#!/bin/sh


php vendor/bin/phpstan --level=8 analyse src/ -c phpstan/phpstan.neon
php bin/phpunit
./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src

