<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Field;

class DownloadButton extends Field
{
    protected string $view = 'forms.components.download-button';

    protected string $url;

    public function url(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
