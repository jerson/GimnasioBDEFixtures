<?php

namespace Upao\GimnasioBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Faker\Plugin\Utils;
use Upao\GimnasioBundle\Entity;
use Faker\Faker;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class LoadClienteData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
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

        for ($i = 0, $total = rand(800, 1200); $i < $total; $i++) {

            $street = $this->faker_address->streetArray();

            $direccion = new Entity\Direccion();
            $direccion->setCalle($street['name']);
            $direccion->setNumero($this->faker_address->streetNumber());
            $direccion->setReferencia('');
            $direccion->setTipo($street['type']);
            $manager->persist($direccion);


            $cliente = new Entity\Cliente();
            $cliente->setIddireccion($direccion);

            $nombres = $this->faker_name->firstName();
            $apellidos = $this->faker_name->surname();
            $cliente->setNombrescli($nombres);
            $cliente->setApellidoscli($apellidos);

            $username = rand(0, 1) == 0 ? $apellidos : $nombres;
            $username .= rand(0, 1) == 0 ? rand(1, 100) : '_' . rand(1, 100);

            if(rand(0,9)<8){
                $cliente->setCelularcli($this->faker_number->mobile($i));
            }
            if(rand(0,9)<3){
                $cliente->setTelefonocli($this->faker_number->phone($i));
            }

            if(!$cliente->getCelularcli() && !$cliente->getTelefonocli()){
                $cliente->setCelularcli($this->faker_number->mobile($i));
            }

            $cliente->setEsestudiante(rand(0, 30) == 0 ? true : false);
            $cliente->setClavecli(Utils::getInstance()->lexer('[A-Za-z0-9]{6,10}'));
            $cliente->setUsuariocli($this->faker_internet->userName($username));
            $cliente->setEmailcli($this->faker_internet->freeEmail($username));

            if (rand(0, 9) == 0) {
                $cliente->setRuccli($this->faker_identification->ruc($i));
            } else {
                $cliente->setDnicli($this->faker_identification->dni($i));
            }

            $manager->persist($cliente);

        }


        $manager->flush();
    }

    public function getUniqueEmail($username)
    {
        $faker = $this->faker_internet;
        return $this->getUnique('emailcli', function () use ($faker, $username) {
            return $faker->freeEmail($username);
        });
    }

    public function getUniqueDni($i = 0)
    {
        $faker = $this->faker_identification;
        return $this->getUnique('dnicli', function () use ($faker, $i) {
            return $faker->dni($i);
        });
    }

    public function getUniqueRuc($i = 0)
    {
        $faker = $this->faker_identification;
        return $this->getUnique('ruccli', function () use ($faker, $i) {
            return $faker->ruc($i);
        });
    }


    public function getUnique($field, $function)
    {
        $value = '';
        $em = $this->container->get('doctrine')->getEntityManager();

        while (true) {

            $value = $function();
            $existe = $em->getRepository('UpaoGimnasioBundle:Cliente')
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
        return 5;
    }
}