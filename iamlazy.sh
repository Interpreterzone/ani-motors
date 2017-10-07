#!/bin/bash
OSI="Hello World!"

function os(){
case "$OSTYPE" in
  solaris*) OSI="SOLARIS" ;;
  darwin*)  OSI="OSX" ;;
  linux*)   OSI="LINUX" ;;
  bsd*)     OSI="BSD" ;;
  msys*)    OSI="WINDOWS" ;;
  *)        OSI="unknown: $OSTYPE" ;;
esac
}

# Identity OS
os
if [ $OSI = "OSX" ]; then
  echo OSX
else
  echo WINDOWS
fi


# command if success
if composer install; then
    printf "Dependency installed success\n"
else
    printf "Dependency installation failed\n"
fi


# if OS is OSX
if [ $OSI = "OSX" ]; then
    cp .env.example .env
    printf "Rename success\n"
else
    printf "Renaming failed!\n"
fi

if [ $OSI = "WINDOWS" ]; then
    copy .env.example .env
    printf "Renaming success\n"
else
    printf "Renaming failed!\n"
fi

