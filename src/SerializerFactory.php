<?php


namespace Retrinko\Serializer;

use Retrinko\Serializer\Exceptions\Exception;
use Retrinko\Serializer\Interfaces\SerializerInterface;
use Retrinko\Serializer\Serializers\JsonSerializer;
use Retrinko\Serializer\Serializers\NullSerializer;
use Retrinko\Serializer\Serializers\PhpSerializer;

class SerializerFactory
{

    /**
     * Creates a Serializer for the given content type.
     * 
     * @param string $contentType
     * @return SerializerInterface
     * @throws \Exception
     */
    public static function bySerializedContentType($contentType)
    {
        switch($contentType)
        {
            case PhpSerializer::SERIALIZED_CONTENT_TYPE:
                $serializer = new PhpSerializer();
                break;
            case JsonSerializer::SERIALIZED_CONTENT_TYPE:
                $serializer = new JsonSerializer();
                break;
            case NullSerializer::SERIALIZED_CONTENT_TYPE:
                $serializer = new NullSerializer();
                break;
            default:
                throw new Exception('Not supported content type!');
        }
        return $serializer;
    }


}