<?php

declare(strict_types=1);

namespace MoonShine\Trix\Fields;

use MoonShine\Fields\Textarea;

class Trix extends Textarea
{
    protected static string $view = 'moonshine-trix::fields.trix';

    protected array $assets = [
        'vendor/moonshine-trix/js/trix.js',
        'vendor/moonshine-trix/css/trix.css',
    ];
}
