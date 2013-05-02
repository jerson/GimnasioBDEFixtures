<?php

namespace Upao\GimnasioBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Upao\GimnasioBundle\Entity;

class LoadHorarioData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $horario_comun = array(

            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('08:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('08:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('09:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('09:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('10:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('10:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('11:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('11:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('12:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('12:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('13:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('13:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('14:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('14:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('15:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('15:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('16:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('16:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('17:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('17:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('18:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('18:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('19:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('19:50')),
            ),
            array(
                'inicio' => (new \DateTime())->setTimestamp(strtotime('20:10')),
                'fin' => (new \DateTime())->setTimestamp(strtotime('20:50')),
            )
        );

        $dias = array(
            'LU' => $horario_comun,
            'MA' => $horario_comun,
            'MI' => $horario_comun,
            'JU' => $horario_comun,
            'VI' => $horario_comun,
            'SA' => array(
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('08:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('08:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('09:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('09:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('10:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('10:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('11:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('11:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('12:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('12:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('13:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('13:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('14:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('14:50')),
                ),
            ),
            'DO' => array(
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('08:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('08:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('09:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('09:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('10:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('10:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('11:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('11:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('12:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('12:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('13:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('13:50')),
                ),
                array(
                    'inicio' => (new \DateTime())->setTimestamp(strtotime('14:10')),
                    'fin' => (new \DateTime())->setTimestamp(strtotime('14:50')),
                ),


            ),
        );


        foreach ($dias as $dia => $datos) {

            foreach ($datos as $dato) {
                $horario = new Entity\Horario();

                $horario->setDiadethorario($dia);
                $horario->setHorainidethorario($dato['inicio']);
                $horario->setHorafindethorario($dato['fin']);

                $manager->persist($horario);
            }


        }


        $manager->flush();

    }

    public function getOrder()
    {
        return 3;
    }
}