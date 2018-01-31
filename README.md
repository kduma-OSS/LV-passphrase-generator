# Laravel Diceware Passphrase Generator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Diceware pass phrase generator

## Install

Via Composer

``` bash
$ composer require kduma/passphrase-generator
```

## Usage

``` php
Passphrase::get();
// returns: Molecule-Unclamped-think-alphabet

Passphrase::setSeparators("!@#")
    ->setEntropy(30)
    ->useEnglishWordList()
    ->dontUseModifiers()
    ->get();
// returns: Chrome#Quite@Tribe
```

## Credits

- [Krystian Duma][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/kduma/passphrase-generator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/kduma/passphrase-generator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/kduma/passphrase-generator
[link-downloads]: https://packagist.org/packages/kduma/passphrase-generator
[link-author]: https://github.com/kduma
[link-contributors]: ../../contributors
