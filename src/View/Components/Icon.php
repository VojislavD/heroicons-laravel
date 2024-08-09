<?php

namespace Heroicons\View\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Icon extends Component
{
    public function render(): Renderable
    {
        return view('heroicons::components.icon');
    }
}
