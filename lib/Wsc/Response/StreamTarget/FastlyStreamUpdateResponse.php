<?php

namespace Ticketpark\Wsc\Response\StreamTarget;

use Ticketpark\Wsc\Container\FastlyStreamTarget;
use JMS\Serializer\Annotation\SerializedName;

class FastlyStreamUpdateResponse
{
    /**
     * @SerializedName("fastly_stream_target")
     * @Type("Ticketpark\Wsc\Container\FastlyStreamTarget")
     */
    private FastlyStreamTarget $fastlyStreamTarget;

    /**
     * @return FastlyStreamTarget
     */
    public function getFastlyStreamTarget(): FastlyStreamTarget
    {
        return $this->fastlyStreamTarget;
    }

    /**
     * @param FastlyStreamTarget $fastlyStreamTarget
     * @return FastlyStreamUpdateResponse
     */
    public function setFastlyStreamTarget(FastlyStreamTarget $fastlyStreamTarget): FastlyStreamUpdateResponse
    {
        $this->fastlyStreamTarget = $fastlyStreamTarget;
        return $this;
    }
}