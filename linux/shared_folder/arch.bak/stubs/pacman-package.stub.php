<?php

declare(strict_types=1);

namespace App\ArchLinux\Package;

use Symfony\Component\Process\Process;

class {{ className }} {
 
  protected function package(): void
  {
    $process = new Process(__DIR__.'/shell_script/pacman/{{ pacman }}');
    $process->run()
  }

  protected function modify(): void
  {
    $process = new Process(__DIR__.'/shell_script/pacman/{{ modify }}');
    $process->run();
  }

  protected function service(): void
  {
    $process = new Process(__DIR__.'/shell_script/pacman/{{ service }}');
    $process->run();
  }
}
