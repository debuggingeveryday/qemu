#!/bin/bash

# ---------- 64 BIT -------------- #

# ISO=archlinux-2024.05.01-x86_64.iso

ISO=./archiso/output_iso/archlinux-2024.06.10-x86_64.iso # my archlinux iso test image

if [[ "$1" == "efi" ]]; then

qemu-system-x86_64 -enable-kvm \
    -bios /usr/share/edk2-ovmf/x64/OVMF.fd \
    -cdrom $ISO \
    -boot menu=on \
    -drive file=Image.img \
    -m 4G \
    -cpu host \
    -vga virtio \
    -display sdl,gl=on \
    -serial none \
    -smp cores=2 \

elif [[ "$1" == "bios" ]]; then

qemu-system-x86_64 -enable-kvm \
    -cdrom $ISO \
    -boot menu=on \
    -drive file=Image.img \
    -m 4G \
    -cpu host \
    -vga virtio \
    -display sdl,gl=on \
    -serial none \
    -smp cores=2 \

else
    echo "$1 not available"
fi