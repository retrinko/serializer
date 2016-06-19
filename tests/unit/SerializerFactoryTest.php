<?php


namespace Retrinko\Serializer\Test\Unit;


use Retrinko\Serializer\SerializerFactory;
use Retrinko\Serializer\Serializers\JsonSerializer;
use Retrinko\Serializer\Serializers\NullSerializer;
use Retrinko\Serializer\Serializers\PhpSerializer;

class SerializerFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function supportedContentTypesProvider()
    {
        return [
            [PhpSerializer::SERIALIZED_CONTENT_TYPE,
             'Retrinko\Serializer\Serializers\PhpSerializer'],
            [JsonSerializer::SERIALIZED_CONTENT_TYPE,
             'Retrinko\Serializer\Serializers\JsonSerializer'],
            [NullSerializer::SERIALIZED_CONTENT_TYPE,
             'Retrinko\Serializer\Serializers\NullSerializer']
        ];
    }

    /**
     * @dataProvider supportedContentTypesProvider
     *
     * @param string $contentType
     * @param string $expectedSerializerClass
     *
     * @throws \Retrinko\Serializer\Exceptions\Exception
     */
    public function test_bySerializedContentType_withSupportedContentType_returnsProperSerializer($contentType, $expectedSerializerClass)
    {
        $this->assertTrue(SerializerFactory::bySerializedContentType($contentType) instanceof $expectedSerializerClass);
    }

    /**
     * @expectedException \Retrinko\Serializer\Exceptions\Exception
     */
    public function test_bySerializedContentType_withUnsupportedContentType_thowsException()
    {
        SerializerFactory::bySerializedContentType('unsupported content type');
    }
}