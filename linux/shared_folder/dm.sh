# git clone https://github.com/debuggingeveryday/dotfiles.git
# copy all files content of dotfiles to /home/{user}

sudo pacman -Sy --noconfirm --needed bspwm ly rofi nvim xorg-xinit xorg-server xterm bspwm sxhkd dunst zsh zsh-autocomplete zsh-autosuggestions zsh-completions zsh-history-substring-search zsh-syntax-highlighting trash-cli mesa-utils kitty ttf-fira-code ttf-nerd-fonts-symbols ttf-nerd-fonts-symbols-common ttf-nerd-fonts-symbols-mono fzf xdg-utils ttf-cascadia-code-nerd &&

sudo systemctl enable ly@tty1.service &&

cp .env.example .env

sudo locale-gen

(git clone https://aur.archlinux.org/paru.git ; cd paru ; makepkg -si)

# -- Microcode -- #
# for intel 
# pacman -Sy intel-ucode
# for amd
# pacman -Sy amd-ucode

sudo grub-mkconfig -o /boot/grub/grub.cfg


# -- GPU DRIVERS -- #
# for nvidia
# pacman -Sy nvidia-open nvidia-utils lib32-nvidia-utils nvidia-settings vulkan-icd-loader lib32-vulkan-icd-loader

# for amd
# pacman -Sy lib32-mesa vulkan-radeon lib32-vulkan-radeon vulkan-icd-loader lib32-vulkan-icd-loader

# for intel
# pacman -Sy lib32-mesa vulkan-intel lib32-vulkan-intel vulkan-icd-loader lib32-vulkan-icd-loader


# !! Note
# 1. Make sure run service ly should working so double check
# 2. should from dotfiles is set to normal users
# 3. if done all reset picom for bug issue
# 4. set up nvidia settings
