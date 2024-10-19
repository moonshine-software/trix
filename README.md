# Trix editor field for [MoonShine Laravel admin panel](https://moonshine-laravel.com)

### Requirements

- MoonShine v3.0+

### Support MoonShine versions

| MoonShine   | Trix |
|-------------|------|
| 2.0+        | 1.0+ |
| 3.0+        | 3.0+ |

## Installation
```shell
composer require moonshine/trix
```

## Usage

```php
use MoonShine\Trix\Fields\Trix;

Trix::make('Label')
```

```php
use MoonShine\Trix\Fields\Trix;

Trix::make('Label')->attachmentEndpoint('/endpoint')
```
