<?php

namespace App\Service;

use Symfony\Component\Process\Process;

class HardwareInfoService
{
    public function collect(): array|object
    {
        return [
            'boot_type' => $this->getBootType(),
            'cpu_model' => $this->getCPUmodel(),
            'gpu_model' => $this->getGPUmodel(),
            'ram_size' => $this->getRAMSize(),
            'has_wifi' => $this->hasWifi(),
        ];
    }

    private function getBootType(): string
    {
        $process = new Process(['./shell_script/hardware_info/boot.sh']);
        $process->run();

        return $process->getOutput();
    }

    private function getCPUmodel(): string
    {
        $process = new Process(['./shell_script/hardware_info/cpu.sh']);
        $process->run();

        return $process->getOutput();
    }

    private function getGPUmodel(): string
    {
        $process = new Process(['./shell_script/hardware_info/gpu.sh']);
        $process->run();

        return $process->getOutput();
    }

    private function getRAMSize(): string
    {
        $process = new Process(['./shell_script/hardware_info/ram.sh']);
        $process->run();

        return $process->getOutput();
    }

    private function hasWifi(): string
    {
        $process = new Process(['./shell_script/hardware_info/wifi.sh']);
        $process->run();

        return $process->getOutput();
    }
}
