#!/usr/bin/env bash

set -e

export PHPCS_DIR=/tmp/phpcs
export SNIFFS_DIR=/tmp/sniffs
# Install CodeSniffer for WordPress Coding Standards checks.
git clone -b master --depth 1 https://github.com/squizlabs/PHP_CodeSniffer.git $PHPCS_DIR;
# Install WordPress Coding Standards.
git clone -b master --depth 1 https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards.git $SNIFFS_DIR;
# Install PHP Compatibility sniffs.
git clone -b master --depth 1 https://github.com/wimg/PHPCompatibility.git $SNIFFS_DIR/PHPCompatibility;
# Set install path for PHPCS sniffs.
# @link https://github.com/squizlabs/PHP_CodeSniffer/blob/4237c2fc98cc838730b76ee9cee316f99286a2a7/CodeSniffer.php#L1941
$PHPCS_DIR/scripts/phpcs --config-set installed_paths $SNIFFS_DIR;

# After CodeSniffer install you should refresh your path.
phpenv rehash;


# Install JSCS: JavaScript Code Style checker.
# @link http://jscs.info/
#npm install -g jscs;
# Install JSHint, a JavaScript Code Quality Tool.
# @link http://jshint.com/docs/
#npm install -g jshint;
# Pull in the WP Core jshint rules.
#wget https://develop.svn.wordpress.org/trunk/.jshintrc;