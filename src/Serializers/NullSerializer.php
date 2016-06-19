<?php

namespace Retrinko\Serializer\Serializers;

/**
 * Class NullSerializer
 * NOTICE! This class does not perform any serialization/unserialization.
 *
 * @package Retrinko\Serializer\Serializers
 */
class NullSerializer extends AbstractSerializer
{
    /**
     * Serialized content type.
     * type/lang[/serizalizationFunctions]
     */
    const SERIALIZED_CONTENT_TYPE = 'text/plain';

    /**
     * @param string $input
     * @return string
     */
    public function serialize($input)
    {
        return $input;
    }

    /**
     * @param string $input
     * @return string
     */
    public function unserialize($input)
    {
        return $input;
    }

    /**
     * @return string
     */
    public function getSerializedContentType()
    {
        return self::SERIALIZED_CONTENT_TYPE;
    }
}