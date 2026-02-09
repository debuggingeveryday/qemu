if [[ -d "/sys/firmware/efi" ]]; then
  boot_type="UEFI"
else
  boot_type="BIOS"
fi

echo $boot_type
