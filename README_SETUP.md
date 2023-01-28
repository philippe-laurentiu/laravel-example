## installation 

### set rights for storage
```
sudo chmod o+w ./storage/ -R 
```


## start
### start all container
```
./vendor/bin/sail up 
```


### use composer inside container
``` 
docker exec -it laravel-example-app_redis_1 /bin/bash
docker exec -it laravel-example-app_laravel.test_1 /bin/bash

```

### laravel and vscode
```
  laravel artisan

  Laravel Snippets

  laravel blade snippet

  laravel extra intellisense

  PHP Intelephense

  laravel goto view

  laravel-goto-controller

  laravel-goto-components

  // only if we are using tailwind
  Tailwind CSS IntelliSense 
```

### php and vscode
```
  PHP DocBlocker

  PHP Intelephense

  PHPDoc Comment

  PHP Namespace Resolver
```


### vscode general 
```
  dotENV

  Past JSON as Code

  VSCode Great Icons

  Database Client
```


### docker and vscode
```
Dev Containers

docker
```


### necessary software
```
  docker engin

  docker desktop

  docker-compose

```


### php development
```
  sudo apt install php

  sudo apt install php-cli unzip

  curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php

  // varified
  php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

  sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

  // test
  composer

  // eventuel necessary modules
  sudo apt install php-mbstring
```



### php stan 
```
  // in project folder
  composer require --dev phpstan/phpstan

  // in porject folder
  composer require nunomaduro/larastan --dev
```



## vscode php stan
#### install extension
```
// install extension 

```


#### add file phpstan.neon in root with

```
includes:
    - ./vendor/nunomaduro/larastan/extension.neon
parameters:
    paths:
        - app
    level: 9
    ignoreErrors:
    excludePaths:
```

#### run php stan
```
vendor/bin/phpstan analyse -l 9
```