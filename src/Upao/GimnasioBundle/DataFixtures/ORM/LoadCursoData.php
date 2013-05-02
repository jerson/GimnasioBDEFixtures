<?php

namespace Upao\GimnasioBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Upao\GimnasioBundle\Entity;

class LoadCursoData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $cursos = array(
            'Curso1',
            'Curso2',
            'Curso3',
            'Curso4',
            'Curso5',
            'Curso6',
        );

        foreach ($cursos as $nombre_curso) {
            $curso = new Entity\Curso();
            $curso->setNombre($nombre_curso);
            $curso->setDescripcion('');

            $manager->persist($curso);
        }


        $manager->flush();

    }

    public function getOrder()
    {
        return 2;
    }
}