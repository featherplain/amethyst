#!/bin/bash

function cp:files() {
  cp -r -f ./languages ./dist
  cp -r -f ./inc ./dist
  cp -r -f ./template-parts ./dist
  cp ./*.php ./dist
  cp ./screenshot.png ./dist
  cp ./*.txt ./dist
  cp ./style.css ./dist
  return
}
cp:files
