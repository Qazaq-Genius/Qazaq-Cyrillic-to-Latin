.PHONY: install
install:
	docker run -v ./:/app -it --rm composer "/usr/bin/composer" install --ignore-platform-req=php

.PHONY: autoload
autoload:
	docker run -v ./:/app -it --rm composer "/usr/bin/composer" dumpautoload

.PHONY: update
update:
	docker run -v ./:/app -it --rm composer "/usr/bin/composer" update

.PHONY: test
test:
	docker run -v ./:/var/www/html -w /var/www/html -it --rm php:5.6 "php" ./vendor/bin/phpunit ./tests