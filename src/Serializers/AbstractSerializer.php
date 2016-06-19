<?php


namespace Retrinko\Serializer\Serializers;

use Retrinko\Serializer\Interfaces\SerializerInterface;

abstract class AbstractSerializer implements SerializerInterface
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     * AbstractSerializer constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }
}