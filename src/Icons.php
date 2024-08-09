<?php

namespace Heroicons;

use Heroicons\Icons\OutlineIcons;

class Icons
{
    public function __construct(
        private OutlineIcons $outlineIcons,
    ) { }

    public function get(string $type, string $name): string
    {
        return match ($type) {
            'outline' => $this->outlineIcons->getIcon($name),
        };
    }
}