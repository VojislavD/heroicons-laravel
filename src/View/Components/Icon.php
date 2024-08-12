<?php

namespace Heroicons\View\Components;

use Heroicons\Icons;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Icon extends Component
{
    public function __construct(
        private Icons $icons,
        private string $name,
        private string $type = 'outline',
        private array $iconAttributes = [],
    ) { 
        $this->iconAttributes = match ($this->type) {
            'outline' => [
                'fill' => 'none',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'class' => 'size-6',
            ],
            'solid' => [
                'fill' => 'currentColor',
                'class' => 'size-6',
            ],
            'mini' => [
                'fill' => 'currentColor',
                'class' => 'size-5',
            ],
        };
    }

    public function render(): Renderable
    {
        return view('heroicons::components.icon', [
            'path' => $this->icons->get($this->type, $this->name),
            'iconAttributes' => $this->iconAttributes,
        ]);
    }
}
