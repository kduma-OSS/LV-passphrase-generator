# Package EOL

> **This package is deprecated and no longer maintained.**
>
> The underlying dependency `genphrase/genphrase` is no longer actively maintained, and the package has not been updated to support modern Laravel versions. For passphrase generation, consider using dedicated libraries such as [hidehalo/nanoid-php](https://github.com/hidehalo/nanoid-php), [hackzilla/password-generator](https://github.com/hackzilla/password-generator), or implementing a simple diceware generator directly in your application using PHP 8.3+ and `random_int()`.

---

# Laravel Diceware Passphrase Generator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Diceware pass phrase generator

Check full documentation here: [opensource.duma.sh/libraries/deprecated/passphrase-generator](https://opensource.duma.sh/libraries/deprecated/passphrase-generator)

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
