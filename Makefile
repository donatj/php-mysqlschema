.PHONY: fix
fix:
	vendor/bin/php-cs-fixer fix
	vendor/bin/phpcbf

.PHONY: lint
lint:
	vendor/bin/php-cs-fixer fix --dry-run --diff
	vendor/bin/phpcs

.PHONY: test
test:
	vendor/bin/phpunit
	vendor/bin/phpstan analyse
