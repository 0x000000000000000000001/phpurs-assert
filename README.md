# phpurs-assert

> PHPurs checkout: see the [PHP library development guide](https://github.com/0x000000000000000000001/phpurs/blob/main/docs/libraries.md) for the TAST toolchain, FFI conventions and validation commands. This package has no standalone PHP test runner; validate changes through its consuming libraries.

[![Latest release](http://img.shields.io/github/release/purescript/purescript-assert.svg)](https://github.com/purescript/purescript-assert/releases)
[![Build status](https://github.com/purescript/purescript-assert/workflows/CI/badge.svg?branch=master)](https://github.com/purescript/purescript-assert/actions?query=workflow%3ACI+branch%3Amaster)
[![Pursuit](https://pursuit.purescript.org/packages/purescript-assert/badge)](https://pursuit.purescript.org/packages/purescript-assert)

Basic assertions library for low level testing. This is primarily for testing the core libraries that cannot use [`purescript-quickcheck`](https://github.com/purescript/purescript-quickcheck) without resulting in circular dependencies.

## Installation

```
spago install assert
```

## Documentation

Module documentation is [published on Pursuit](http://pursuit.purescript.org/packages/purescript-assert).
