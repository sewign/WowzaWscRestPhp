<?php

namespace Ticketpark\Wsc\Request\StreamTarget;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\Wsc\Container\FastlyStreamTarget;
use Ticketpark\Wsc\Request\IdRequestInterface;
use Ticketpark\Wsc\Request\IdRequestTrait;
use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\StreamTarget\FastlyStreamUpdateResponse;

class UpdateWowzaFastlyStreamTargetRequest extends Request implements IdRequestInterface
{
    const API_PATH = '/stream_targets/fastly/{id}';
    const RESPONSE_CLASS = FastlyStreamUpdateResponse::class;

    use RequestCommonsTrait;
    use IdRequestTrait;

    /**
     * @var FastlyStreamTarget
     * @SerializedName("stream_target_fastly")
     * @Type("Ticketpark\Wsc\Container\FastlyStreamTarget")
     */
    protected $streamTargetFastly;

    /**
     * @return FastlyStreamTarget
     */
    public function getStreamTargetFastly(): FastlyStreamTarget
    {
        return $this->streamTargetFastly;
    }

    /**
     * @param FastlyStreamTarget $streamTargetFastly
     * @return UpdateWowzaFastlyStreamTargetRequest
     */
    public function setStreamTargetFastly(FastlyStreamTarget $streamTargetFastly): UpdateWowzaFastlyStreamTargetRequest
    {
        $this->streamTargetFastly = $streamTargetFastly;
        return $this;
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PATCH;
    }
}