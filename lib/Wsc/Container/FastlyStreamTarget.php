<?php

namespace Ticketpark\Wsc\Container;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\Property\PropertyInterface;

class FastlyStreamTarget
{
    /**
     * @SerializedName("id")
     * @Type("string")
     */
    private $id;

    /**
     * @SerializedName("name")
     * @Type("string")
     */
    private $name;

    /**
     * @SerializedName("properties")
     * @Type("ArrayCollection<Ticketpark\Wsc\Container\Property\PropertyInterface>")
     */
    private $properties;

    /**
     * @param $id
     */
    public function __construct()
    {
        $this->properties = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return FastlyStreamTarget
     */
    public function setId(string $id): FastlyStreamTarget
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return FastlyStreamTarget
     */
    public function setName(string $name): FastlyStreamTarget
    {
        $this->name = $name;
        return $this;
    }

    public function addProperty(PropertyInterface $property)
    {
        $this->properties->add($property);

        return $this;
    }
}

