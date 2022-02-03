<?php

namespace Ticketpark\Wsc\Webhooks;

use JMS\Serializer\SerializerBuilder;

class WowzaWebhook
{
    public static function constructEvent(string $data): WebhookEvent
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($data, WebhookEvent::class, 'json');
    }
}