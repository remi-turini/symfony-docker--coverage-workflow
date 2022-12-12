composer install
composer update

php bin/console doctrine:database:create --no-interaction
php bin/console doctrine:database:create --env=test --no-interaction

php bin/console doctrine:schema:update --env=test --force
php bin/console doctrine:schema:update --force
#php bin/console d:m:diff --quiet
#php bin/console d:m:m --quiet

php bin/console app:create-api-key myKey1234


exec apache2-foreground
