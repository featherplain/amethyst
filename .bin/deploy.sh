#!/usr/bin/env bash

set -e

rm -rf .git
rm -r .gitignore

echo ".editorconfig
.travis.yml
README.md
.bin
bower.json
gulpfile.js
node_modules
maps
package.json
src/html
src/images
src/jade
src/shell
README.md
setting.json
bower_components
.DS_store
vendor
composer.*
codesniffer.ruleset.xml
*.zip" > .gitignore

git init
git config user.name "featherplain"
git config user.email "info@featherplain.com"
git add .
git commit --quiet -m "Deploy from travis"
git push --force --quiet "https://${GH_TOKEN}@${GH_REF}" master:release > /dev/null 2>&1
