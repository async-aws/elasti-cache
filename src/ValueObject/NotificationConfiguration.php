<?php

namespace AsyncAws\ElastiCache\ValueObject;

/**
 * Describes a notification topic and its status. Notification topics are used for publishing ElastiCache events to
 * subscribers using Amazon Simple Notification Service (SNS).
 */
final class NotificationConfiguration
{
    /**
     * The Amazon Resource Name (ARN) that identifies the topic.
     *
     * @var string|null
     */
    private $topicArn;

    /**
     * The current state of the topic.
     *
     * @var string|null
     */
    private $topicStatus;

    /**
     * @param array{
     *   TopicArn?: null|string,
     *   TopicStatus?: null|string,
     * } $input
     */
    public function __construct(array $input)
    {
        $this->topicArn = $input['TopicArn'] ?? null;
        $this->topicStatus = $input['TopicStatus'] ?? null;
    }

    /**
     * @param array{
     *   TopicArn?: null|string,
     *   TopicStatus?: null|string,
     * }|NotificationConfiguration $input
     */
    public static function create($input): self
    {
        return $input instanceof self ? $input : new self($input);
    }

    public function getTopicArn(): ?string
    {
        return $this->topicArn;
    }

    public function getTopicStatus(): ?string
    {
        return $this->topicStatus;
    }
}
