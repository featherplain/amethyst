#!/usr/bin/env bash

set -e

if [[ "false" != "$TRAVIS_PULL_REQUEST" ]]; then
  echo "Not deploying pull requests."
  exit
fi

if [[ "master" != "$TRAVIS_BRANCH" ]]; then
  echo "Not on the 'master' branch."
  exit
fi

rm -rf .git
rm -r .gitignore

echo ".editorconfig
.travis.yml
README.md
.bin
bower.json
gulpfile.js
node_modules
package.json
src
README.md
setting.json
bower_components
.DS_store
*.zip" > .gitignore

git init
git config user.name "featherplain"
git config user.email "info@featherplain.com"
git add .
git commit --quiet -m "Deploy from travis"
git push --force --quiet "https://${GH_TOKEN}@${GH_REF}" master:release > /dev/null 2>&1
