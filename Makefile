.PHONY: fix
fix:
	vendor/bin/php-cs-fixer fix

.PHONY: lint
lint:
	vendor/bin/php-cs-fixer fix --dry-run --diff

.PHONY: test
test:
	vendor/bin/phpunit
	vendor/bin/phpstan analyse
