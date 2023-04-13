# secret-key-generator

## Description

Standalone repository to generate a secret key suitable for the `SECRET_KEY` config of eLabFTW.

Note: it is recommended to use one of these two other approaches:

1. `curl "https://get.elabftw.net?key"`
2. `docker run --rm -t --entrypoint '/bin/sh' elabftw/elabimg -c "php -d memory_limit=10M -d open_basedir='' bin/console tools:genkey"`

## Usage

~~~bash
git clone https://github.com/elabftw/secret-key-generator
cd secret-key-generator
composer install
php generate.php
~~~
