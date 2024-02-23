# Trix editor field for [MoonShine Laravel admin panel](https://moonshine-laravel.com)

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
