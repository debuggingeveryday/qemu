<?php

namespace App\Service;

use Symfony\Component\Process\Process;

class PacmanKeyringService
{
    public function setKeyring(): string
    {
        $process = new Process(['./shell_script/pacman_key.sh']);
        $process->run();

        return $process->getOutput();
    }
}
