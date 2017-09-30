#!/bin/bash


funtion os(){
if [[ "$OSTYPE" == "linux-gnu" ]]; then
        printf  "linux-gnu"
elif [[ "$OSTYPE" == "darwin"* ]]; then
        printf  "Mac-OS"
elif [[ "$OSTYPE" == "cygwin" ]]; then
        printf  "cygwin-gnu"
elif [[ "$OSTYPE" == "msys" ]]; then
        printf  "msys"
elif [[ "$OSTYPE" == "win32" ]]; then
        printf  "win32"
elif [[ "$OSTYPE" == "freebsd"* ]]; then
        printf  "freebsd-gnu"
else
        printf  "Unknown-gnu"
fi
}


if os; then
    printf 'succeeded\n'
else
    printf  "failed\n"
fi

print_something () {
echo Hello I am a function
}

print_something

function valid () {
  if [ $? -eq 0 ]; then
      echo OK
  else
      echo FAIL
  fi
}