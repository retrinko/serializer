<?php


namespace Retrinko\Serializer\Test\Unit\Serializers;


use Retrinko\Serializer\Serializers\JsonSerializer;

class JsonSerizalizerTest extends \PHPUnit_Framework_TestCase
{
    public function test_getSerializedContentType_returnsProperValue()
    {
        $expected = 'application/json';
        $this->assertEquals($expected, (new JsonSerializer())->getSerializedContentType());
    }
    
    public function test_serialize_retrunsProperValue()
    {
        $test = ['a', 'b', 'c'];
        $expected = json_encode($test);
        $this->assertEquals($expected, (new JsonSerializer())->serialize($test));
    }

    public function test_unserialize_retrunsProperValue()
    {
        $test = '["a","b","c"]';
        $expected = json_decode($test, true);
        $this->assertEquals($expected, (new JsonSerializer())->unserialize($test));
    }
}