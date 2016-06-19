<?php


namespace Retrinko\Serializer\Traits;

use Retrinko\Serializer\Interfaces\SerializerInterface;

/**
 * Class SerializerAwareTrait
 * @package Retrinko\Serializer
 */
trait SerializerAwareTrait
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * Sets a serializer.
     *
     * @param SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer()
    {
        return $this->serializer;
    }
}