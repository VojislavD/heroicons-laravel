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
    ) { }

    public function render(): Renderable
    {
        return view('heroicons::components.icon', [
            'path' => $this->icons->get($this->type, $this->name),
        ]);
    }
}
