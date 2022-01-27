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
     * @return SourceConnectionInformation
     */
    public function setStreamName(string $streamName): SourceConnectionInformation
    {
        $this->streamName = $streamName;
        return $this;
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
     * @return SourceConnectionInformation
     */
    public function setApplicationName(string $applicationName): SourceConnectionInformation
    {
        $this->applicationName = $applicationName;
        return $this;
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
     * @return SourceConnectionInformation
     */
    public function setSdpUrl(string $sdpUrl): SourceConnectionInformation
    {
        $this->sdpUrl = $sdpUrl;
        return $this;
    }
}
