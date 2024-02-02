<?php

namespace Gurman\BarBundle\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'bar:hi',
    description: 'Bar demo command',
)]
class BarHiCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hi from Bar!');

        return Command::SUCCESS;
    }
}
