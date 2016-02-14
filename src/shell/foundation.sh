#!/bin/bash

function copy:foundation() {
  # scss files
  mkdir ./src/scss/components/core/foundation
  cp -r ./node_modules/foundation-sites/scss/components ./src/scss/components/core/foundation
  cp -r ./node_modules/foundation-sites/scss/forms ./src/scss/components/core/foundation
  cp -r ./node_modules/foundation-sites/scss/grid ./src/scss/components/core/foundation
  cp -r ./node_modules/foundation-sites/scss/typography ./src/scss/components/core/foundation
  cp -r ./node_modules/foundation-sites/scss/util ./src/scss/components/core/foundation
  cp -r ./node_modules/foundation-sites/scss/_global.scss ./src/scss/components/core/foundation
  cp ./node_modules/foundation-sites/scss/settings/_settings.scss ./src/scss/components/core/foundation/_settings.scss
  cp ./node_modules/foundation-sites/scss/foundation.scss ./src/scss/components/core/foundation/_foundation.scss
  # js files
  cp -r ./node_modules/foundation-sites/js ./src/js/foundation
  return
}

if [[ -f ./src/scss/components/core/_foundation.scss || -f ./src/scss/components/core/_settings.scss || -f ./src/js/foundation ]]
then
  echo 'file already exists/'
else
  echo 'start copy foundation files.'
  copy:foundation
fi
