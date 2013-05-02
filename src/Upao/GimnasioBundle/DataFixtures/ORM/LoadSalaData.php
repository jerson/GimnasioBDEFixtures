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

class LoadSalaData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
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

        for ($i = 0; $i < 100; $i++) {
            $sala = new Entity\Sala();
            $sala->setNombresala('SALA'.$i);

            $manager->persist($sala);

        }


        $manager->flush();

    }
    public function getOrder()
    {
        return 1;
    }
}