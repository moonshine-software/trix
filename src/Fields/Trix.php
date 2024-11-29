<?php

declare(strict_types=1);

namespace MoonShine\Trix\Fields;

use MoonShine\AssetManager\Css;
use MoonShine\AssetManager\Js;
use MoonShine\UI\Fields\Textarea;

class Trix extends Textarea
{
    protected string $view = 'moonshine-trix::fields.trix';

    protected ?string $attachmentEndpoint = null;

    protected function assets(): array
    {
        return [
            Js::make('vendor/moonshine-trix/js/trix.js'),
            Css::make('vendor/moonshine-trix/css/trix.css'),
        ];
    }

    public function attachmentEndpoint(string $value): self
    {
        $this->attachmentEndpoint = $value;

        return $this;
    }

    public function getAttachmentEndpoint(): ?string
    {
        return $this->attachmentEndpoint;
    }

    protected function viewData(): array
    {
        return [
            'attachmentEndpoint' => $this->getAttachmentEndpoint()
        ];
    }
}
