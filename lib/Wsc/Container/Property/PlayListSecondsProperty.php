<?php

declare(strict_types=1);

namespace Ticketpark\Wsc\Container\Property;

class PlayListSecondsProperty extends AbstractProperty
{
    public function __construct(int $value)
    {
        $this->key = 'playlistSeconds';
        $this->section = self::SECTION_PLAYLIST;
        $this->value = (string)$value;
    }
}