<?php

use Retrinko\Serializer\SerializerFactory;
use Retrinko\Serializer\Serializers\JsonSerializer;
use Retrinko\Serializer\Serializers\PhpSerializer;

require_once __DIR__ . '/../vendor/autoload.php';

$value = ['a', 'b', 'c'];
printf('Original value: %s', PHP_EOL);
var_dump($value);

$serializer = SerializerFactory::bySerializedContentType(JsonSerializer::SERIALIZED_CONTENT_TYPE);
$serializedValue = $serializer->serialize($value);
printf('Serialized value using %s: %s', 'JsonSerializer', PHP_EOL);
var_dump($serializedValue);

$serializer = SerializerFactory::bySerializedContentType(PhpSerializer::SERIALIZED_CONTENT_TYPE);
$serializedValue = $serializer->serialize($value);
printf('Serialized value using %s: %s', 'PhpSerializer', PHP_EOL);
var_dump($serializedValue);