# Makefile for building Symfony and Laravel Docker images

# Default PHP version and variant (override with `make PHP_VERSION=8.3 PHP_VARIANT=cli`)
PHP_VERSION ?= 8.4
PHP_VARIANT ?= cli

# Image names
SYMFONY_IMAGE := myapp-symfony
LARAVEL_IMAGE := myapp-laravel

# Build Symfony image
.PHONY: symfony
symfony:
	docker build \
		--build-arg PHP_VERSION=$(PHP_VERSION) \
		--build-arg PHP_VARIANT=$(PHP_VARIANT) \
		-f dockerfile.symfony \
		-t $(SYMFONY_IMAGE):$(PHP_VERSION)-$(PHP_VARIANT) .

# Build Laravel image
.PHONY: laravel
laravel:
	docker build \
		--build-arg PHP_VERSION=$(PHP_VERSION) \
		--build-arg PHP_VARIANT=$(PHP_VARIANT) \
		-f dockerfile.laravel \
		-t $(LARAVEL_IMAGE):$(PHP_VERSION)-$(PHP_VARIANT) .

# Build both
.PHONY: all
all: symfony laravel

FRAMEWORK ?= laravel

.PHONY: up
up:
	@if [ "$(FRAMEWORK)" = "symfony" ]; then \
		IMAGE=$(SYMFONY_IMAGE):$(PHP_VERSION)-$(PHP_VARIANT); \
	elif [ "$(FRAMEWORK)" = "laravel" ]; then \
		IMAGE=$(LARAVEL_IMAGE):$(PHP_VERSION)-$(PHP_VARIANT); \
	else \
		echo "Invalid FRAMEWORK: $(FRAMEWORK) (must be symfony or laravel)"; \
		exit 1; \
	fi; \
	echo "Running $$IMAGE..."; \
	docker run --rm -it -p 8000:8000 -v $$PWD/domains:/app/domains $$IMAGE

.PHONY: up-fresh
up-fresh:
	@if [ "$(FRAMEWORK)" = "symfony" ]; then \
		$(MAKE) symfony; \
	elif [ "$(FRAMEWORK)" = "laravel" ]; then \
		$(MAKE) laravel; \
	else \
		echo "Invalid FRAMEWORK: $(FRAMEWORK) (must be symfony or laravel)"; \
		exit 1; \
	fi; \
	$(MAKE) up FRAMEWORK=$(FRAMEWORK)

# Clean images (optional helper)
.PHONY: clean
clean:
	docker rmi $(SYMFONY_IMAGE):$(PHP_VERSION)-$(PHP_VARIANT) || true
	docker rmi $(LARAVEL_IMAGE):$(PHP_VERSION)-$(PHP_VARIANT) || true