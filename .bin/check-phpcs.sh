#!/usr/bin/env bash

set -e
export PHPCS_DIR=/tmp/phpcs
export SNIFFS_DIR=/tmp/sniffs
$PHPCS_DIR/scripts/phpcs -p -s -v -n . --standard=./codesniffer.ruleset.xml --extensions=php;