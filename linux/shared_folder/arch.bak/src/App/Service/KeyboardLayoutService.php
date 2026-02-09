<?php

namespace App\Service;

use Symfony\Component\Process\Process;

class KeyboardLayoutService
{
    public function setKeyboardLayout(): string
    {
        $process = new Process(['./shell_script/keyboard.sh']);
        $process->run();

        return $process->getOutput();
    }
}
