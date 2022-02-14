<?php

namespace Ticketpark\Wsc\Container\Property;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class AbstractProperty implements PropertyInterface
{
    /**
     * @SerializedName("key")
     * @Type("string")
     */
    protected string $key;

    /**
     * @SerializedName("section")
     * @Type("string")
     */
    protected string $section;

    /**
     * @SerializedName("value")
     * @Type("string")
     */
    protected string $value;
}