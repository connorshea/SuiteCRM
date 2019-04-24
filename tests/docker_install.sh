#!/bin/bash

# We need to install dependencies only for Docker
[[ ! -e /.dockerenv ]] && exit 0

set -xe

# Install git (the php image doesn't have it) which is required by composer
apt-get update -yqq
apt-get install apt-utils git libzip-dev zip libpng-dev -y

# Install mysql driver
# Here you can install any other extension that you need
docker-php-ext-configure zip --with-libzip
docker-php-ext-install pdo_mysql zip gd intl
