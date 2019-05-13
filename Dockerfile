FROM php:7.2.17-apache-stretch

# Install packages for running SuiteCRM and its dependencies.
# git is required by composer
# gnupg and apt-transport-https are necessary for installing Chrome.
RUN apt-get update && apt-get install -y apt-utils \
    git \
    libzip-dev \
    zip \
    libpng-dev \
    libicu-dev \
    g++ \
    mysql-client \
    gnupg \
    apt-transport-https

# Install mysql driver
# Here you can install any other extension that you need
RUN docker-php-ext-configure intl
RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install pdo_mysql zip gd intl

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
# RUN php composer.phar install

# Install Chrome and ChromeDriver
RUN curl -sSL https://dl.google.com/linux/linux_signing_key.pub | apt-key add - && echo "deb https://dl.google.com/linux/chrome/deb/ stable main" > /etc/apt/sources.list.d/google-chrome.list
RUN apt-get update -qqy && apt-get install -yy google-chrome-stable
RUN wget https://chromedriver.storage.googleapis.com/74.0.3729.6/chromedriver_linux64.zip
RUN unzip -o chromedriver_linux64.zip
