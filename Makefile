.PHONY: install
install:
	docker run -v $$(pwd):/app --rm composer "/usr/bin/composer" install --ignore-platform-req=php

.PHONY: autoload
autoload:
	docker run -v $$(pwd):/app --rm composer "/usr/bin/composer" dumpautoload

.PHONY: update
update:
	docker run -v $$(pwd):/app --rm composer "/usr/bin/composer" update

.PHONY: test
test: test56 test82

.PHONY: test56
test56:
	docker run -v $$(pwd):/app -w /app --rm jitesoft/phpunit:5.6 phpunit --configuration phpunit.xml ./tests

.PHONY: test82
test82:
	docker run -v $$(pwd):/app -w /app --rm jitesoft/phpunit:8.2 phpunit  --configuration phpunit.xml ./tests