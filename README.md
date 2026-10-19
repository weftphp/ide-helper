# weft/ide-helper

Declaration-only stubs for the [weft](../weft) PHP extension. They make editors
(PhpStorm, DEVSENSE PHP Tools, Intelephense) and analyzers (PHPStan, Psalm) recognise the
`Weft\*` functions and classes instead of reporting "Call to unknown function".

The stubs are **never loaded or executed**; the extension provides the real symbols.

## Install

```sh
composer require --dev weft/ide-helper
```

Editors index `vendor/` automatically. For PHPStan, add the stub explicitly:

```neon
parameters:
    stubFiles:
        - vendor/weft/ide-helper/src/weft.php
```

Without Composer, copy `src/weft.php` into your project.

## Keeping it in sync

`src/weft.php` mirrors the extension's registered API (`ext/src/*.rs` in weft). Update it
whenever a function, class or signature changes there.
