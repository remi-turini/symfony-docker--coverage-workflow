## Que contient ce dépot ?

- Une api
- Une sécurité d'accès à l'api par token
- Une configuration d'authentification utilisateur et de rôle administrateur
- Une configuration docker containérisant l'api (php + composer, mysql, phpmyadmin, maildev)
- Des tests unitaires et fonctionnels 
- Un workflow github

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

