<?php

namespace App\ArchLinux;

use App\Service\DateTimeService;
use App\Service\HardwareInfoService;
use App\Service\KeyboardLayoutService;
use App\Service\PacmanKeyringService;

class Install
{
    private $options;

    private readonly HardwareInfoService $hardware_info_service;

    private readonly KeyboardLayoutService $keyboard_layout_service;

    private readonly PacmanKeyringService $pacman_keyring_service;

    private readonly DateTimeService $date_time_service;

    /*
    * @param array $options
    */
    public function __construct($options)
    {
        $this->options = $options;
        $this->hardware_info_service = new HardwareInfoService;
    }

    public function execute(): void
    {
        dump($this->options);
        dump($this->hardware_info_service->collect());
    }
}
