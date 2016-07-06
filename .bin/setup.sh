#!/bin/bash
read -p "Set your website's domain (default=amethyst.dev) : " domain

if [ "${domain}" = "" ]; then
  domain="amethyst.dev"
fi
echo "Your website domain is $domain."

npm install
composer install

echo "module.exports = { vhost: '$domain' };" > config.js
