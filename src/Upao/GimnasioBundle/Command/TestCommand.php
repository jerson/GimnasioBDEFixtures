<?php
/**
 * Created by JetBrains PhpStorm.
 * User: GersonAlexander
 * Date: 30/04/13
 * Time: 11:22 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Upao\GimnasioBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Faker\Faker;
use Faker\Plugin;
use ReverseRegex\Lexer;
use PHPStats\Generator\MersenneRandom;
use ReverseRegex\Parser;
use ReverseRegex\Generator\Scope;
use Upao\GimnasioBundle\Entity\Curso;

class TestCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('demo:test')
            ->setDescription('test');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $texto = Plugin\Utils::getInstance()->numerify('###.###');
        $output->writeln(Faker::name()->name());
        $output->writeln($texto);

        $lexer = new  Lexer('(0[4-7]{2}(-)[4-9]{3}(-|)[0-9]{3}|9[4-7]{2}[0-9]{3}[0-9]{3})');
        $gen = new MersenneRandom(1452);
        $result = '';

        $parser = new Parser($lexer, new Scope(), new Scope());
        $parser->parse()->getResult()->generate($result, $gen);


        $output->writeln($result);

        $result = Plugin\Utils::getInstance()->lexer('(0[4-7]{2}(-)[4-9]{3}(-|)[0-9]{3}|9[4-7]{2}[0-9]{3}[0-9]{3})',1452);

        $output->writeln($result);


        $result = Faker::phoneNumber()->phone();

        $output->writeln($result);

        $em = $this->getContainer()->get('doctrine')->getEntityManager();
        $conn = $this->getContainer()->get('database_connection');

        $id_curso  = $conn->fetchColumn('SELECT IdCurso FROM Curso ORDER BY NEWID()',array(),0);
        $id_instructor  = $conn->fetchColumn('SELECT IdInstructor FROM Instructor ORDER BY NEWID()',array(),0);


        $curso = $em->getRepository('UpaoGimnasioBundle:Curso')->find($id_curso);
        $instructor = $em->getRepository('UpaoGimnasioBundle:Instructor')->find($id_instructor);

        /*$curso = $em->getRepository('UpaoGimnasioBundle:Curso')->findOneBy(
            array(),
            array('' => 'NEWID()')
        );*/

        print_r($curso);
        print_r($instructor);

    }
}