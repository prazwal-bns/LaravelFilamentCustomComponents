<?php

namespace App\Components;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View as View;

class TextInput implements Htmlable
{
    protected string $label;

    public function __construct(
        protected string $name)
    {

    }

    public static function make(string $name): self
    {
        return new self($name);
    }

    public function render(): View
    {
        return view('components.text-input', [
            'label' => $this->getLabel()
        ]);
    }

    public function getLabel(){
        return $this->label ?? str($this->name)
            ->title();
    }

    public function label(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function toHtml(): string
    {
        return $this->render()->render();
    }
}

