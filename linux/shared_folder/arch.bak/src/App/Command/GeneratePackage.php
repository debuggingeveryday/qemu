<?php

namespace App\Command;

use App\Service\PacmanPackageGeneratorService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'make:package',
    description: 'Pacman package install',
    help: 'Create package installer',
)]

class GeneratePackage extends Command
{
    protected function configure(): void
    {
        $this->addArgument('className', InputArgument::IS_ARRAY, 'Generate Pacman Package File?');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $pacmanPackageGeneratorService = new PacmanPackageGeneratorService;
        $className = $input->getArgument('className');

        return dump($className);

        $pacmanPackageGeneratorService->create($className);

        return Command::SUCCESS;
    }
}
