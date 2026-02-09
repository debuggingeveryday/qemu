@echo off
:: boot arch linux

:: Config


set iso_path=../archlinux-2025.08.01-x86_64.iso
set share_folder_path=\\DESKTOP-473PLPQ\shared_folder
set add_nvme=true

setlocal enabledelayedexpansion

set arguments= ^
    -cdrom "%iso_path%" ^
    -boot menu=on ^
    -drive file=Image.img ^
    -m 4G ^
    -bios OVMF_X64.fd ^
    -accel whpx ^
    -vga virtio ^
    -display sdl,gl=on ^
    -serial none ^
    -smp cores=2

IF /I "%add_nvme%"=="true" (
    set arguments=!arguments! -drive file=Image.img,if=none,id=nvm -device nvme,serial=deadbeef,drive=nvm
)

IF NOT "%shared_folder_path%"=="" (
	set arguments=!arguments! -net user,id=nic0,smb=%shared_folder_path% ^
		-net nic,model=virtio
)

qemu-system-x86_64.exe !arguments!
