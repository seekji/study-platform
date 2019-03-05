#!/usr/bin/env bash

if [[ ! -f phpunit.xml ]]; then
    cp phpunit.xml.dist phpunit.xml
fi

composer install --prefer-dist -n -o

php bin/console doctrine:database:create -e test --if-not-exists
php bin/console doctrine:migrations:migrate -e test --no-interaction
php bin/console doctrine:fixtures:load -e test -n

echo "Application is ready for testing" >&2