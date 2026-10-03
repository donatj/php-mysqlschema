.PHONY: test
test:
	vendor/bin/phpunit
	vendor/bin/phpstan analyse
