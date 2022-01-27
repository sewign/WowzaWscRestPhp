<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SourceConnectionInformation
{
    /**
     * @var string
     * @SerializedName("stream_name")
     * @Type("string")
     */
    private $streamName;

    /**
     * @var string
     * @SerializedName("application_name")
     * @Type("string")
     */
    private $applicationName;

    /**
     * @var string
     * @SerializedName("sdp_url")
     * @Type("string")
     */
    private $sdpUrl;

    /**
     * @return string
     */
    public function getStreamName(): string
    {
        return $this->streamName;
    }

    /**
     * @param string $streamName
     */
    public function setStreamName(string $streamName): void
    {
        $this->streamName = $streamName;
    }

    /**
     * @return string
     */
    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    /**
     * @param string $applicationName
     */
    public function setApplicationName(string $applicationName): void
    {
        $this->applicationName = $applicationName;
    }

    /**
     * @return string
     */
    public function getSdpUrl(): string
    {
        return $this->sdpUrl;
    }

    /**
     * @param string $sdpUrl
     */
    public function setSdpUrl(string $sdpUrl): void
    {
        $this->sdpUrl = $sdpUrl;
    }
}
