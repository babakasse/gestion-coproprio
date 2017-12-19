<?php
/**
 * Created by PhpStorm.
 * User: Mister Kc
 * Date: 19/12/2017
 * Time: 20:14
 */

namespace FrontBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use FrontBundle\Repository\ChargeRepository;

class ChargeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('charge:restant')
            ->setDescription('Liste de tous les charges restant à payer')
            ->addArgument(
                'user',
                InputArgument::OPTIONAL,
                'Le ou les copropriétaire(s) concérnés ?'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

            $text = 'Liste de tous les charges restant à payer :';
            $output->writeln($text);

    }
}