<?php

namespace HeroiconsLaravel\View\Components;

use HeroiconsLaravel\Icons;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Icon extends Component
{
    public function __construct(
        private Icons $icons,
        private string $name,
        private string $type = 'outline',
        private string $viewBox = '0 0 24 24',
        private array $iconAttributes = [],
    ) { 
        $this->viewBox = match ($this->type) {
            'outline' => '0 0 24 24',
            'solid' => '0 0 24 24',
            'mini' => '0 0 20 20',
            'micro' => '0 0 16 16',
        };

        $this->iconAttributes = match ($this->type) {
            'outline' => [
                'fill' => 'none',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'class' => 'w-6 h-6',
            ],
            'solid' => [
                'fill' => 'currentColor',
                'class' => 'w-6 h-6',
            ],
            'mini' => [
                'fill' => 'currentColor',
                'class' => 'w-5 h-5',
            ],
            'micro' => [
                'fill' => 'currentColor',
                'class' => 'w-4 h-4',
            ],
        };
    }

    public function render(): Renderable
    {
        return view('heroicons-laravel::components.icon', [
            'path' => $this->icons->get($this->type, $this->name),
            'viewBox' => $this->viewBox,
            'iconAttributes' => $this->iconAttributes,
        ]);
    }
}
