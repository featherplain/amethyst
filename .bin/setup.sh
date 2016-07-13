#!/bin/bash
if [ "$TRAVIS_BRANCH" == "" ]; then
  read -p "Set your hostname (default:amethyst.dev): " domain
fi

if [ "${domain}" = "" ]; then
  domain="amethyst.dev"
fi

npm install
composer install

echo "module.exports = { vhost: '$domain' };" > config.js
