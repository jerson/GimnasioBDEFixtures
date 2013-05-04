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


class LoadMedidaData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
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

        return;

        $em = $this->container->get('doctrine')->getEntityManager();
        $clientes = $em->getRepository('UpaoGimnasioBundle:Cliente')->findAll();

        $fecha_inicial = new \DateTime();
        $fecha_inicial->setTimestamp(strtotime('01/01/2005'));

        $fecha_final =  new \DateTime();
        $fecha_final->setTimestamp(strtotime('01/01/2012'));

        $diferencia_timestamp = $fecha_final->getTimestamp() - $fecha_inicial->getTimestamp();
        $maximo_medidas = 0;

        foreach ($clientes as $cliente) {
            $maximo_medidas = rand(1,20);

            $timestamp = $fecha_inicial->getTimestamp() + rand(0,$diferencia_timestamp);

            $estatura_media = rand(150,189) /100;
            $peso_medio = rand(50,120) /100;
            $brazo_medio = rand(40,60) / 100;
            $bust_tor_medio = rand(28,40) / 100;
            $cintura_medio = rand(70,120) / 100;
            $pierna_medio = rand(40,60) / 100;
            $cadera_medio = rand(70,110) / 100;
            $pantorrillas_medio = rand(20,50) / 100;
            $promedio_grasa_medio = rand(1,50) / 100;

            $fecha_medida = new \DateTime();

            for ($i = 0, $total = rand(1, $maximo_medidas); $i < $total; $i++) {

                $fecha_medida->setTimestamp($timestamp);

                if($fecha_medida->format('Y')>2012){
                    break;
                }

                $medida = new Entity\Medida();
                $medida->setIdcliente($cliente);
                $medida->setFechamed($fecha_medida);
                $medida->setEstaturamed($estatura_media);
                $medida->setPesomed($peso_medio);
                $medida->setBrazomed($brazo_medio);
                $medida->setBustTormed($bust_tor_medio);

                $medida->setCinturamed($cintura_medio);
                $medida->setPiernamed($pierna_medio);
                $medida->setCaderamed($cadera_medio);
                $medida->setPantorrillasmed($pantorrillas_medio);
                $medida->setPorgrasamed($promedio_grasa_medio);



                $manager->persist($medida);
                $timestamp+= rand(0,($fecha_final->getTimestamp() - $timestamp));
            }

        }


        $manager->flush();




    }

    public function getOrder()
    {
        return 8;
    }
}