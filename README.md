## Que contient ce dépot ?

Ce dépot contient une api, une sécurité d'accès à l'api par token, une configuration d'authentification utilisateur et de rôle administrateur, une configuration docker containérisant l'api (php + composer, mysql, phpmyadmin, maildev), et également des tests unitaires et fonctionnels ainsi qu'un workflow github

## Déploiement du docker

```
 cd ./docker
 docker-compose up -d --build
```

Dans le cas ou le composer install n'est pas éxécuté
```
 docker exec -it symfony bash
 composer install
```

## Memo dév

Mettre à jour la bdd structuréllement :
```
php bin/console doctrine:schema:update
```

Charger le jeu de fausses données : 
```
php bin/console doctrine:fixtures:load --env=test --quiet
```

Executer les tests :
```
php bin/phpunit
php bin/phpunit --coverage-html ./var/cache/test
```

