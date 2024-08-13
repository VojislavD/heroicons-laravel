<?php

namespace HeroiconsLaravel;

use HeroiconsLaravel\Icons\MicroIcons;
use HeroiconsLaravel\Icons\MiniIcons;
use HeroiconsLaravel\Icons\OutlineIcons;
use HeroiconsLaravel\Icons\SolidIcons;

class Icons
{
    public function __construct(
        private OutlineIcons $outlineIcons,
        private SolidIcons $solidIcons,
        private MiniIcons $miniIcons,
        private MicroIcons $microIcons,
    ) { }

    public function get(string $type, string $name): string
    {
        return match ($type) {
            'outline' => $this->outlineIcons->getIcon($name),
            'solid' => $this->solidIcons->getIcon($name),
            'mini' => $this->miniIcons->getIcon($name),
            'micro' => $this->microIcons->getIcon($name),
        };
    }
}