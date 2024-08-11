<?php

namespace Heroicons;

use Heroicons\Icons\OutlineIcons;
use Heroicons\Icons\SolidIcons;

class Icons
{
    public function __construct(
        private OutlineIcons $outlineIcons,
        private SolidIcons $solidIcons,
    ) { }

    public function get(string $type, string $name): string
    {
        return match ($type) {
            'outline' => $this->outlineIcons->getIcon($name),
            'solid' => $this->solidIcons->getIcon($name),
        };
    }
}