#!/bin/bash

function build_amethyst() {
  mkdir amethyst
  cp -rpf assets amethyst/
  cp -rpf languages amethyst/
  cp -rpf inc amethyst/
  cp -rpf template-parts amethyst/
  mkdir amethyst/src
  cp -rpf src/scss amethyst/src/
  cp -rpf src/js amethyst/src/
  cp *.php amethyst/
  cp screenshot.png amethyst/
  cp *.txt amethyst/
  cp style.css amethyst/
  zip amethyst.zip -r amethyst -x "*.DS_Store"
  # zip amethyst.zip -r /amethyst/amethyst * -x *.DS_Store
  rm -rf amethyst
  return
}
if [[ -f amethyst.zip ]]
then
  rm -rf amethyst.zip
fi
build_amethyst
