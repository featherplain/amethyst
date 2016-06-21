#!/usr/bin/env bash

# Set up WordPress installation.
export WP_DEVELOP_DIR=/tmp/wordpress
mkdir -p $WP_DEVELOP_DIR
# Use the Git mirror of WordPress.
git clone --depth=1 --branch="$WP_VERSION" git://develop.git.wordpress.org/ $WP_DEVELOP_DIR
# Set up Amethyst theme information.
theme_slug=$(base $(pwd))
theme_dir=$WP_DEVELOP_DIR/src/wp-content/themes/$theme_slug
cd ..
mv $theme_slug $theme_dir
# Set up WordPress configuration.
cd $WP_DEVELOP_DIR
echo $WP_DEVELOP_DIR
cp wp-tests-config-sample.php wp-tests-config.php
sed -i "s/amethyst_testdb/wordpress_test/" wp-tests-config.php
sed -i "s/amethyst/root/" wp-tests-config.php
sed -i "s/randummstring3212//" wp-tests-config.php
# Create WordPress database.
mysql -e 'CREATE DATABASE wordpress_test;' -uroot
# Hop into themes directory.
cd $theme_dir
# Install JSCS: JavaScript Code Style checker
# @link http://jscs.info/
npm install -g jscs
# Install JSHint, a JavaScript Code Quality Tool
# @link http://jshint.com/docs/
npm install -g jshint
wget https://develop.svn.wordpress.org/trunk/.jshintrc
