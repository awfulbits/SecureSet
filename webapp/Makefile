UNAME_OS := $(shell lsb_release -si)
BUILD_DEPS := ruby
GEM_DEPS := sass sass-listen


build:
	@sass sass/style.sass css/style.css

watch:
	@sass --watch sass/style.sass:css/style.css

install_build_deps:
ifeq (${UNAME_OS},Arch)
	@yay -Sy ${BUILD_DEPS}
	@gem install ${GEM_DEPS}
else ifeq (${UNAME_OS},Pop)
	@apt update
	@apt install ${BUILD_DEPS}
	@gem install ${GEM_DEPS}
else ifeq (${UNAME_OS},Ubuntu)
	@apt update
	@apt install ${BUILD_DEPS}
	@gem install ${GEM_DEPS}
endif

deploy:
	@chmod +x ./deploy.sh
	@./deploy.sh