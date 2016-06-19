<?php


namespace Retrinko\Serializer\Serializers;


/**
 * Class PhpSerializer
 * @package Retrinko\Serializer\Serializers
 */
class PhpSerializer extends AbstractSerializer
{

    /**
     * Serialized content type.
     * type/lang[/serizalizationFunctions]
     */
    const SERIALIZED_CONTENT_TYPE = 'application/php/serialize/base64_encode';

    /**
     * @param mixed $input
     * @return string
     */
    public function serialize($input)
    {
        return base64_encode(serialize($input));
    }

    /**
     * @param $input
     * @return mixed
     */
    public function unserialize($input)
    {
        return unserialize(base64_decode($input));
    }

    /**
     * @return string
     */
    public function getSerializedContentType()
    {
        return self::SERIALIZED_CONTENT_TYPE;
    }
}