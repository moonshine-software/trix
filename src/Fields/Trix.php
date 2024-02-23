<?php

declare(strict_types=1);

namespace MoonShine\Trix\Fields;

use MoonShine\Fields\Textarea;

class Trix extends Textarea
{
    protected string $view = 'moonshine-trix::fields.trix';

    protected ?string $attachmentEndpoint = null;

    protected array $assets = [
        'vendor/moonshine-trix/js/trix.js',
        'vendor/moonshine-trix/css/trix.css',
    ];

    public function attachmentEndpoint(string $value): self
    {
        $this->attachmentEndpoint = $value;

        return $this;
    }

    public function getAttachmentEndpoint(): ?string
    {
        return $this->attachmentEndpoint;
    }
}
