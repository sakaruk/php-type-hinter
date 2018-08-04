## adhocore/type-hinter

[![Latest Version](https://img.shields.io/github/release/adhocore/type-hinter.svg?style=flat-square)](https://github.com/adhocore/type-hinter/releases)
[![Travis Build](https://img.shields.io/travis/adhocore/type-hinter/master.svg?style=flat-square)](https://travis-ci.org/adhocore/type-hinter?branch=master)
[![Scrutinizer CI](https://img.shields.io/scrutinizer/g/adhocore/type-hinter.svg?style=flat-square)](https://scrutinizer-ci.com/g/adhocore/type-hinter/?branch=master)
[![Codecov branch](https://img.shields.io/codecov/c/github/adhocore/type-hinter/master.svg?style=flat-square)](https://codecov.io/gh/adhocore/type-hinter)
[![StyleCI](https://styleci.io/repos/142870630/shield)](https://styleci.io/repos/142870630)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](./LICENSE)


## Installation

#### Composer

```bash
composer global require adhocore/type-hinter
```

#### Phar

> This is preferred/recommended way of installation

```sh

```

## Usage

(Go to any PHP project root and run)

```sh
typehinter --help
typehinter -P 7.1

# Dont forget to run tests to ensure it doesnt break anything
# (this could as well be a part of typehinter soon)
vendor/bin/phpunit
```