#!/bin/bash
echo

if which brew >/dev/null; then
	echo "-- Brew Installed already ..."
else
	echo "** Brew Installing ... "
	ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
fi
echo "** Brew Updating ... "
brew update
if $(brew cask --version > /dev/null 2>&1); then
    echo "-- Brew Cask Installed already ..."
else
    echo "** Brew Cask Installing ... "
    brew tap caskroom/cask
fi
brew cleanup && brew cask cleanup
brew tap homebrew/services
