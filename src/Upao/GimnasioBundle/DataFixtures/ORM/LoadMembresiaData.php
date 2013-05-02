<?php

namespace Upao\GimnasioBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Faker\Plugin\Utils;
use Symfony\Component\Form\FormEvents;
use Upao\GimnasioBundle\Entity;
use Faker\Faker;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadMembresiaData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
{

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $em = $this->container->get('doctrine')->getEntityManager();
        $clientes = $em->getRepository('UpaoGimnasioBundle:Cliente')->findAll();

        $fecha_inicial = new \DateTime();
        $fecha_inicial->setTimestamp(strtotime('01/01/2005'));

        $fecha_final = new \DateTime();
        $fecha_final->setTimestamp(strtotime('01/01/2012'));

        $diferencia_timestamp = $fecha_final->getTimestamp() - $fecha_inicial->getTimestamp();
        $maximo_membresias = 30;

        $plazos = array(
            array(
                'tiempo' => 60 * 60 * 24 * 30 * 1,
                'precio' => 30,
                'dias' => 30,
            ),
            array(
                'tiempo' => 60 * 60 * 24 * 30 * 2,
                'precio' => 50,
                'dias' => 60,
            ),
            array(
                'tiempo' => 60 * 60 * 24 * 30 * 3,
                'precio' => 75,
                'dias' => 90,
            ),
            array(
                'tiempo' => 60 * 60 * 24 * 30 * 6,
                'precio' => 120,
                'dias' => 180,
            )
        );

        foreach ($clientes as $cliente) {

            $timestamp = $fecha_inicial->getTimestamp() + rand(0, $diferencia_timestamp / $maximo_membresias);


            $fecha_membresia = new \DateTime();

            for ($i = 0, $total = rand(1, $maximo_membresias); $i < $total; $i++) {

                $plazo = $plazos[rand(0, count($plazos) - 1)];

                $fecha_membresia->setTimestamp($timestamp);

                if ($fecha_membresia->format('Y') > 2012) {
                    break;
                }

                $membresia = new Entity\Membresia();
                $membresia->setIdcliente($cliente);
                $membresia->setAnular(rand(0, 100) == 0 ? true : false);

                $membresia->setFecha($fecha_membresia);

                $fecha_inicio = (new \DateTime())->setTimestamp(strtotime('next Monday ' . $fecha_membresia->format('Y-m-d')));
                $fecha_vencimiento = (new \DateTime())->setTimestamp($fecha_inicio->getTimestamp() + $plazo['tiempo']);

                $total_recibo = $plazo['precio'];
                $descuento = $total_recibo * 0.1;
                if ($cliente->getEsestudiante()) {

                    $total_recibo -= $descuento;
                }
                $ruc = $cliente->getRuccli();

                $membresia->setFechainicio($fecha_inicio);
                $membresia->setFechavencimiento($fecha_vencimiento);
                $membresia->setTiporecibo(!empty($ruc) ? 'F' : 'B');
                $membresia->setTotalrecibo($total_recibo);
                $membresia->setDescuento($cliente->getEsestudiante() ? $descuento : 0);


                $maximo_asistencias = $plazo['dias'];
                $total_asistencias = rand(5, $maximo_asistencias);

                $fecha_asistencia = $fecha_inicio;


                for ($j = 0; $j < $total_asistencias; $j++) {

                    if (rand(0, 5) == 0) {

                        continue;

                    }

                    $asistencias_dia = rand(1, 3);

                    $hora_asistencia = rand(8, 20);
                    $minuto_asistencia = rand(0, 59);

                    $fecha_asistencia->setTime($hora_asistencia, $minuto_asistencia);

                    for ($y = 0; $y < $asistencias_dia; $y++) {


                        $fecha_asistencia_salida = (new \DateTime())->setTimestamp($fecha_asistencia->getTimestamp() + rand(60 * 30, 60 * 60 * 4));

                        $asistencia = new Entity\Asistenciacliente();
                        $asistencia->setIdcliente($cliente);
                        $asistencia->setFechaentrada((new \DateTime())->setTimestamp($fecha_asistencia->getTimestamp()));
                        $asistencia->setFechasalida($fecha_asistencia_salida);

                        $manager->persist($asistencia);

                        $hora_asistencia = $hora_asistencia + rand(8, 20);
                        $minuto_asistencia = $minuto_asistencia + 1 % 60;

                        if ($hora_asistencia > 22) {
                            break;
                        } else {
                            $fecha_asistencia->setTime($hora_asistencia, $minuto_asistencia);
                        }

                    }

                    $fecha_asistencia->setTimestamp($fecha_asistencia->getTimestamp() + 60 * 60 * 24);

                }


                $manager->persist($membresia);
                $timestamp += rand(0, ($fecha_final->getTimestamp() - $timestamp) / $maximo_membresias) + $plazo['tiempo'];
            }

        }


        $manager->flush();


    }

    public function getOrder()
    {
        return 7;
    }
}