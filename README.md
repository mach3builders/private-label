# Private-label
Useful package for setting up a private-label environment inside a laravel app.

## Installation

You can install the package via composer:

```bash
composer require mach3builders/private-label
```

## Usage

After installation publish the config.
Inside the config you can set your own model, as long it extends the Packages model

#### Helpers

After installation you can use the following helper

``` php
<p>{{ private_label('name') }}</p>

@if (private_label()->logo)
    <img src="{{ private_label()->logo }}" alt="">
@endif

Winkelwagen voor: {{ private_label()->company->name }}
```
The helper supports relations aswell

### Testing

``` bash
composer test
```

## Credits

- [Jasper Helmich](https://github.com/mach3builders)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
