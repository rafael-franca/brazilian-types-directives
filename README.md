# Brazilian Types Directives

## Introduction

This package provides a new directives types for Laravel Blade based on some brazilian data.

## Installation

> **Requires [PHP 5.6+](https://php.net/releases/) and [Laravel 5.5+](https://laravel.com)**

Require Brazilian Types Directives using [Composer](https://getcomposer.org):

    composer require rafael-franca/brazilian-types-directives

## Using
This are Blade directives and your use is the same of any other directive.

### Types Supported
See below the types supported.
#### CPF
    @cpf('12345678901')
You will see: **123.456.789-01**

#### CNPJ
    @cnpj('12345678901234')
You will see: **12.345.678/9012-34**
 
#### Phone
This directive support these types of brazilian phones:

 - Phone with and without ramal code (8-digit)
 - Mobile (8-digit and 9-digit)

> All numbers can be the prefix area code.

    @telefone('86999999999')
You will see: **(86) 9-9999-9999**

#### Money
    @dinheiro('999.99')
You will see:  **R$ 999,99**

#### CEP
    @cep('64000000')
You will see: **64.000-000**

## Contributing

Thank you for considering to contribute to Brazilian Types Directives.

You can have a look at the [CHANGELOG](https://github.com/rafael-franca/brazilian-types-directives/blob/stable/CHANGELOG.md) for constant updates & detailed information about the changes. You can also follow the twitter account for latest announcements or just come say hi!: [@rafaelfrancam](https://twitter.com/rafaelfrancam)

## License

Brazilian Types Directives is an open-sourced software licensed under the [MIT license](https://github.com/rafael-franca/brazilian-types-directives/blob/stable/LICENSE.md).
