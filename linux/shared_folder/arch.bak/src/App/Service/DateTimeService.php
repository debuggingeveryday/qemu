<?php

namespace App\Service;

use Symfony\Component\Process\Process;

class DateTimeService
{
    public function setDatetimeAndTimezone(): string
    {
        $process = new Process(['./shell_script/date.sh']);
        $process->run();

        return $process->getOutput();
    }
}
