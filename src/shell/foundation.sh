#!/bin/bash

function copy:foundation() {
  cp -r ./bower_components/foundation/scss/foundation ./src/scss/core/foundation
  cp ./bower_components/foundation/scss/foundation/_settings.scss ./src/scss/core/_settings.scss
  cp ./bower_components/foundation/scss/foundation.scss ./src/scss/core/_foundation.scss
  return
}

if [[ -f ./src/scss/core/_foundation.scss || -f ./src/scss/core/_settings.scss ]]
then
  echo 'file already exists/'
else
  echo 'start copy foundation files.'
  copy:foundation
fi
