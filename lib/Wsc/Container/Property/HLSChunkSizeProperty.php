<?php

declare(strict_types=1);

namespace Ticketpark\Wsc\Container\Property;

class HLSChunkSizeProperty extends AbstractProperty
{
    public function __construct(int $value)
    {
        $this->section = self::SECTION_HLS;
        $this->key = 'chunkSize';
        $this->value = $value;
    }
}