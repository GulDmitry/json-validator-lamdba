## Installation
* `cp .env.dist .env`.
* make sure `uid` and `gid` are correct in `.env`.
* `docker-compose up`
* `docker exec json-validator-php php composer.phar install` or `./docker/bin/php composer.phar install`
* Go to [http://localhost](http://localhost)

`sam local start-api`
