UNAME_OS := $(shell lsb_release -si)
BUILD_DEPS := npm
NPM_DEPS := sass


build:
	@sass sass/style.sass css/style.css

watch:
	@sass --watch sass/style.sass:css/style.css

install_build_deps:
ifeq (${UNAME_OS},Arch)
	@yay -Sy ${BUILD_DEPS}
	@npm install ${NPM_DEPS}
else ifeq (${UNAME_OS},Pop)
	@apt update
	@apt install ${BUILD_DEPS}
	@npm install ${NPM_DEPS}
else ifeq (${UNAME_OS},Ubuntu)
	@apt update
	@apt install ${BUILD_DEPS}
	@npm install ${NPM_DEPS}
endif

deploy:
	@chmod +x ./deploy.sh
	@./deploy.sh
