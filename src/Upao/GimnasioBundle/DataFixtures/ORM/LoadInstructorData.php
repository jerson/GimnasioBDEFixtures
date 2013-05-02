<?php

namespace Upao\GimnasioBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Upao\GimnasioBundle\Entity;
use Faker\Faker;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadInstructorData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
{

    private $faker_name;
    private $faker_address;
    private $faker_number;
    private $faker_identification;
    private $faker_internet;

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
        $this->faker_name = Faker::name();
        $this->faker_address = Faker::address();
        $this->faker_number = Faker::phoneNumber();
        $this->faker_identification = Faker::identification();
        $this->faker_internet = Faker::internet();

        for ($i = 0; $i < 22; $i++) {

            $instructor = new Entity\Instructor();
            $instructor->setNombresinst($this->faker_name->firstName());
            $apellidos = $this->faker_name->surname();
            $username = $apellidos;
            $username .= rand(0, 1) == 0 ? ' ' . rand(1, 100) : '_' . rand(1, 100);

            $instructor->setApellidosinst($apellidos);
            $instructor->setDireccioninst($this->faker_address->streetAddress());
            $instructor->setEmailinst($this->getUniqueEmail($username));
            $instructor->setDniinst($this->getUniqueDni($i));

            if(rand(0,9)<8){
                $instructor->setCelularinst($this->faker_number->mobile($i));
            }
            if(rand(0,9)<3){
                $instructor->setTelefonoinst($this->faker_number->phone($i));
            }

            if(!$instructor->getCelularinst() && !$instructor->getTelefonoinst()){
                $instructor->setCelularinst($this->faker_number->mobile($i));
            }



            $manager->persist($instructor);

            $manager->flush();
        }


    }

    public function getUniqueEmail($username)
    {
        $faker = $this->faker_internet;
        return $this->getUnique('emailinst', function () use ($faker, $username) {
            return $faker->freeEmail($username);
        });
    }

    public function getUniqueDni($i = 0)
    {
        $faker = $this->faker_identification;
        return $this->getUnique('dniinst', function () use ($faker, $i) {
            return $faker->dni($i);
        });
    }


    public function getUnique($field, $function)
    {
        $value = '';
        $em = $this->container->get('doctrine')->getEntityManager();

        while (true) {

            $value = $function();
            $existe = $em->getRepository('UpaoGimnasioBundle:Instructor')
                ->findBy(
                    array($field => $value)
                );

            if (!$existe) {
                break;
            }

        }


        return $value;
    }

    public function getOrder()
    {
        return 4;
    }
}