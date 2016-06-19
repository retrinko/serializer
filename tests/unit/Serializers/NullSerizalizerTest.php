<?php


namespace Retrinko\Serializer\Test\Unit\Serializers;


use Retrinko\Serializer\Serializers\NullSerializer;

class NullSerizalizerTest extends \PHPUnit_Framework_TestCase
{
    public function test_getSerializedContentType_returnsProperValue()
    {
        $expected = 'text/plain';
        $this->assertEquals($expected, (new NullSerializer())->getSerializedContentType());
    }
    
    public function test_serialize_retrunsProperValue()
    {
        $test = ['a', 'b', 'c'];
        $expected = $test;
        $this->assertEquals($expected, (new NullSerializer())->serialize($test));
    }

    public function test_unserialize_retrunsProperValue()
    {
        $test = '["a","b","c"]';
        $expected = $test;
        $this->assertEquals($expected, (new NullSerializer())->unserialize($test));
    }
}