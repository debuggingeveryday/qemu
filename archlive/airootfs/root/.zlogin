# fix for screen readers
if grep -Fqa 'accessibility=' /proc/cmdline &> /dev/null; then
    setopt SINGLE_LINE_ZLE
fi

~/.automated_script.sh

mkdir -p /mnt/host_share
mount -t 9p -o trans=virtio host_share /mnt/host_share
git config --global --add safe.directory /mnt/host_share/arch
cd /mnt/host_share/arch
