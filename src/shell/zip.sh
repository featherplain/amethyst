#!/bin/bash

# ---------------------------------- #
# static files
# ---------------------------------- #
function build_dist() {
  zip dist.zip -r dist -x "*.DS_Store"
  return
}
if [[ -f dist.zip ]]
then
  rm -rf dist.zip
fi
build_dist

# ---------------------------------- #
# sample script for wp theme build
# ---------------------------------- #
# function build_yourtheme() {
#   mkdir yourtheme
#   cp -rpf assets yourtheme/
#   cp -rpf languages yourtheme/
#   cp -rpf inc yourtheme/
#   cp -rpf template-parts yourtheme/
#   mkdir yourtheme/src
#   cp -rpf src/scss yourtheme/src/
#   cp -rpf src/js yourtheme/src/
#   cp *.php yourtheme/
#   cp screenshot.png yourtheme/
#   cp *.txt yourtheme/
#   cp style.css yourtheme/
#   zip yourtheme.zip -r yourtheme -x "*.DS_Store"
#   rm -rf yourtheme
#   return
# }
# if [[ -f yourtheme.zip ]]
# then
#   rm -rf yourtheme.zip
# fi
# build_yourtheme
