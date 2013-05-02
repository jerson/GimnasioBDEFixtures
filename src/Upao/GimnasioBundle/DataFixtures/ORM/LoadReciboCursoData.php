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


class LoadReciboCursoData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
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

        $plazos = array(
            array(
                'tiempo' => 60 * 60 * 24 * 30 * 1,
                'precio' => 30,
                'dias' => 30,
                'time' => 'this',
            ),
            array(
                'tiempo' => 60 * 60 * 24 * 30 * 2,
                'precio' => 50,
                'dias' => 60,
                'time' => '+1',
            ),
            array(
                'tiempo' => 60 * 60 * 24 * 30 * 3,
                'precio' => 75,
                'dias' => 90,
                'time' => '+2',
            )
        );

        $cursos = $em->getRepository('UpaoGimnasioBundle:Curso')->findAll();
        $maximo_membresias=0;
        foreach ($clientes as $cliente) {
            $maximo_membresias = rand(1,15);

            $timestamp = $fecha_inicial->getTimestamp() + rand(0, $diferencia_timestamp);


            $fecha_membresia = new \DateTime();

            for ($i = 0, $total = rand(1, $maximo_membresias); $i < $total; $i++) {

                $plazo = $plazos[rand(0, count($plazos) - 1)];

                $fecha_membresia->setTimestamp($timestamp);

                if ($fecha_membresia->format('Y') > 2012) {
                    break;
                }

                $recibo_curso = new Entity\Recibocurso();
                $recibo_curso->setIdcliente($cliente);
                $recibo_curso->setAnular(rand(0, 100) == 0 ? true : false);


                $timestamp_recibo = $fecha_membresia->getTimestamp();
                $recibo_curso->setFecha((new \DateTime())->setTimestamp($timestamp_recibo));

                $fecha_inicio = (new \DateTime())->setTimestamp($timestamp_recibo)->modify('first day of next month');
                $fecha_vencimiento = (new \DateTime())->setTimestamp($fecha_inicio->getTimestamp())->modify('last day of '.$plazo['time'].' month');

                $total_recibo = $plazo['precio'];
                $descuento = $total_recibo * 0.1;
                if ($cliente->getEsestudiante()) {

                    $total_recibo -= $descuento;
                }
                $ruc = $cliente->getRuccli();

                $curso = $cursos[rand(0, count($cursos) - 1)];


                $detalles_horario = $em->getRepository('UpaoGimnasioBundle:Detallehorario')->findBy(array(
                    'idcurso' => $curso->getIdcurso()
                ));




                $recibo_curso->setFechainicio($fecha_inicio);
                $recibo_curso->setFechavencimiento($fecha_vencimiento);
                $recibo_curso->setTiporecibo(!empty($ruc) ? 'F' : 'B');
                $recibo_curso->setTotalrecibo($total_recibo);
                $recibo_curso->setDescuento($cliente->getEsestudiante() ? $descuento : 0);
                $recibo_curso->setIdcurso($curso);


                $maximo_asistencias = $plazo['dias'];
                $total_asistencias = rand(5, $maximo_asistencias);

                $fecha_asistencia = (new \DateTime())->setTimestamp($fecha_inicio->getTimestamp());


                for ($j = 0; $j < $total_asistencias; $j++) {

                    if (rand(0, 5) == 0) {

                        continue;

                    }

                    $asistencias_dia = rand(1, 3);

                    $hora_asistencia = rand(8, 20);
                    $minuto_asistencia = rand(0, 59);

                    $fecha_asistencia->setTime($hora_asistencia, $minuto_asistencia);
                    $detalle_horario = $detalles_horario[rand(0, count($detalles_horario) - 1)];

                    for ($y = 0; $y < $asistencias_dia; $y++) {


                        $fecha_asistencia_salida = (new \DateTime())->setTimestamp($fecha_asistencia->getTimestamp() + rand(60 * 30, 60 * 60 * 4));

                        $asistencia = new Entity\Asistenciaclientecurso();
                        $asistencia->setIdcliente($cliente);
                        $asistencia->setFechaasistencia((new \DateTime())->setTimestamp($fecha_asistencia->getTimestamp()));
                        $asistencia->setIddetallehorario($detalle_horario);

                        $manager->persist($asistencia);

                        $hora_asistencia = $hora_asistencia + rand(8, 20);
                        $minuto_asistencia = $minuto_asistencia + 1 % 60;

                        if ($hora_asistencia > 22) {
                            break;
                        } else {
                            $fecha_asistencia->setTime($hora_asistencia, $minuto_asistencia);
                        }

                    }

                    $fecha_asistencia->setTimestamp($fecha_asistencia->getTimestamp() + 60 * 60 * 24 * rand(1,4));

                }


                $manager->persist($recibo_curso);
                $timestamp += rand(0, ($fecha_final->getTimestamp() - $timestamp)) + $plazo['tiempo'];
            }

        }


        $manager->flush();


    }

    public function getOrder()
    {
        return 9;
    }
}