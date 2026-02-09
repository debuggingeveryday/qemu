<?php

namespace App\Command;

use App\ArchLinux\Install;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'arch:install',
    description: 'Arch linux script automate',
    help: 'Install Arch linux',
)]

class Core extends Command
{
    protected function configure(): void
    {
        $this
            ->addOption('username', null, InputOption::VALUE_REQUIRED, 'Username of account', false)
            ->addOption('password', null, InputOption::VALUE_REQUIRED, 'Password of account', false)
            ->addOption('hostname', null, InputOption::VALUE_REQUIRED, 'Hostname of account', false)
            ->addOption('kernel', null, InputOption::VALUE_REQUIRED, 'Kernel type', false)
            ->addOption('target_disk', null, InputOption::VALUE_REQUIRED, 'Path of storage drive targeted', false)
            ->addOption('encrypt', null, InputOption::VALUE_NEGATABLE, 'Apply encryption of storage drive', false)
            ->addOption('timezone', null, InputOption::VALUE_REQUIRED, 'Set system timezone clock', false);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $options = $input->getOptions();
        new Install($options);

        return Command::SUCCESS;
    }
}
