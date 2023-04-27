## Docker compose LEMP Stack with PHPMyadmin

> Simple local development

Author: Asep Indra K (https://asepindrak.github.io/)

URL: https://github.com/asepindrak/docker-compose-lemp-stack-with-phpmyadmin

> ---

## Getting Started

- L (Linux)
- E (Nginx)
- M (Mysql)
- P (PHP)

1. Configuration

   - install docker desktop for PC or Mac

```
git clone https://github.com/asepindrak/docker-compose-lemp-stack-with-phpmyadmin.git
```

> ---

```
cd docker-compose-lemp-stack-with-phpmyadmin
```

```
cp .env.example .env
```

```
cp -r src.example src
```

```
docker-compose up
```

2. Access Web

   - http://localhost/

3. Access PHPMyadmin

   - http://localhost:8090

4. Run Container
   > if docker container stopped, you can run again with docker desktop or terminal

```
docker-compose up
```

5. Mysql Config

   - .docker/mysql/my.cnf

6. Nginx Config

   - .docker/nginx/php.conf

7. PHP Dockerfile

   - .docker/php/Dockerfile

8. PHP.ini file

   - .docker/php/php.ini

9. Rebuild Container
   > if you change docker-compose.yaml or my.cnf or php.conf or php/Dockerfile or php.ini or .env, please rebuild the container with

```
docker-compose up -d --build
```

> ---

> PHPMyadmin login

- user: root
- password: root

> upload your app to src folder

> ---
>
> access mysql-test.php to check the database connection http://localhost/mysql-test.php

PHP

```
$db_host = "mysql"
```

NodeJS

```
$db_host = "localhost"
```

> ---

thank's to osteel's blog
https://tech.osteel.me/posts/docker-for-local-web-development-introduction-why-should-you-care
