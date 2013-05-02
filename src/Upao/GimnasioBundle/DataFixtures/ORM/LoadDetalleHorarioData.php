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


class LoadDetalleHorarioData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
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
        $conn = $this->container->get('database_connection');


        $horarios = $em->getRepository('UpaoGimnasioBundle:Horario')->findAll();
        $salas = $em->getRepository('UpaoGimnasioBundle:Sala')->findAll();

        $cursos = $em->getRepository('UpaoGimnasioBundle:Curso')->findAll();
        $instructores = $em->getRepository('UpaoGimnasioBundle:Instructor')->findAll();



        foreach ($horarios as $horario) {


            foreach ($salas as $sala) {

                $curso = $cursos[rand(0, count($cursos) - 1)];
                $instructor = $instructores[rand(0, count($instructores) - 1)];


                $detalle_horario = new Entity\Detallehorario();
                $detalle_horario->setIdhorario($horario);
                $detalle_horario->setIdsala($sala);
                $detalle_horario->setIdcurso($curso);
                $detalle_horario->setIdinstructor($instructor);
                $manager->persist($detalle_horario);


            }


        }

        $manager->flush();

    }

    public function getOrder()
    {
        return 6;
    }
}