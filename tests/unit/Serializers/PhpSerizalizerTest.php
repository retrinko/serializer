<?php


namespace Retrinko\Serializer\Test\Unit\Serializers;


use Retrinko\Serializer\Serializers\PhpSerializer;

class PhpSerizalizerTest extends \PHPUnit_Framework_TestCase
{
    public function test_getSerializedContentType_returnsProperValue()
    {
        $expected = 'application/php/serialize/base64_encode';
        $this->assertEquals($expected, (new PhpSerializer())->getSerializedContentType());
    }
    
    public function test_serialize_retrunsProperValue()
    {
        $test = ['a', 'b', 'c'];
        $expected = base64_encode(serialize($test));
        $this->assertEquals($expected, (new PhpSerializer())->serialize($test));
    }

    public function test_unserialize_retrunsProperValue()
    {
        $expected = ['a', 'b', 'c'];
        $test = base64_encode(serialize($expected));
        $this->assertEquals($expected, (new PhpSerializer())->unserialize($test));
    }
}