PHP Structure Check
===================

[![Build Status](https://travis-ci.org/1blankz7/php-structure-check.svg?branch=master)](https://travis-ci.org/1blankz7/php-structure-check)

This library can check a complex array structure against a given requirement.
The purpose of this library is to create a better experience when testing a result set from an api or something similar.

## Installation

```
composer require 1blankz7/php-structure-check
```

## Usage

Create a requirement:
```php
$requirement = new ListType(
    new ObjectType([
        'foo' => new StringType(),
        'bar' => new StringType()
    ]),
    new ObjectType([
        'foo' => new StringType(),
        'bar' => new IntType()
    ]),
    new ObjectType([
        'foo' => new AnyType(),
        'bar' => new IntType()
    ]),
);
```
Have some sort of external data you want to check.
```php
$data = [
    [
        'foo' => 'foe',
        'bar' => 'baz',
    ], [
        'foo' => 'foe',
        'bar' => 7,
    ], [
        'foo' => [],
        'bar' => 'baz',
    ],
];
```
Check the data against the requirement.
```php
$result = Checker::fulfills($data, $requirement);
```
The returned object holds information about the analysis. You can
check the result by calling `isValid()` on the result object. To
fetch the errors, simply call `getErrors`.