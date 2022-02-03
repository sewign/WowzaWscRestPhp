<?php

namespace Ticketpark\Wsc\Webhooks;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class WebhookEvent
{
    const TRANSCODER_AUDIO_STARTED = 'wowza.audio.started';
    const TRANSCODER_AUDIO_STOPPED = 'wowza.audio.stopped';
    const TRANSCODER_DOWNLOAD_FAILED = 'wowza.download.failed';
    const TRANSCODER_DOWNLOAD_SUCCESS = 'wowza.download.success';
    const TRANSCODER_RESET_REQUESTED = 'wowza.reset.requested';
    const TRANSCODER_START_CANCELED = 'wowza.start.canceled';
    const TRANSCODER_START_COMPLETE = 'wowza.start.complete';
    const TRANSCODER_START_REQUESTED = 'wowza.start.requested';
    const TRANSCODER_STOP_COMPLETE = 'wowza.stop.complete';
    const TRANSCODER_VIDEO_STARTED = 'wowza.video.started';
    const TRANSCODER_VIDEO_STOPPED = 'wowza.video.stopped';
    const RECORDING_COMPLETED = 'wowza.completed';
    const RECORDING_CONVERTING = 'wowza.converting';
    const RECORDING_DELETED = 'wowza.deleted';
    const RECORDING_FAILED = 'wowza.failed';
    const RECORDING_NO_VIDEO = 'wowza.no_video';
    const RECORDING_UPLOADING = 'wowza.uploading';

    /**
     * @var string
     * @SerializedName("version");
     * @Type("string");
     */
    private string $version;

    /**
     * @var string
     * @SerializedName("event");
     * @Type("string");
     */
    private string $event;

    /**
     * @var string
     * @SerializedName("event_id");
     * @Type("string");
     */
    private string $event_id;

    /**
     * @var string
     * @SerializedName("object_type");
     * @Type("string");
     */
    private string $object_type;

    /**
     * @var string
     * @SerializedName("object_id");
     * @Type("string");
     */
    private string $object_id;

    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getEventId(): string
    {
        return $this->event_id;
    }

    /**
     * @return string
     */
    public function getObjectType(): string
    {
        return $this->object_type;
    }

    /**
     * @return string
     */
    public function getObjectId(): string
    {
        return $this->object_id;
    }

    public function getEvent(): string
    {
        return "wowza." . $this->event;
    }
}