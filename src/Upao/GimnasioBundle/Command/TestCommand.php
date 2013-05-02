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
        $output->writeln(Faker::name()->firstName());
        $output->writeln(Faker::name()->surname());
        $output->writeln($texto);

       $fecha = (new \DateTime())->setTimestamp(time())->modify('next monday');


        $output->writeln($fecha->format('c'));

    }
}