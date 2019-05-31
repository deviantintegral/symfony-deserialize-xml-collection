<?php

use Deviantintegral\SymfonyDeserializeXmlCollection\Response;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

require_once './vendor/autoload.php';

$xml = <<<EOD
<response>
  <people>
    <person>
      <name>Harry</name>
    </person>
    <person>
      <name>Sally</name>
    </person>
  </people>
</response>
EOD;

$normalizers = [
  new ObjectNormalizer(NULL, NULL, NULL, new ReflectionExtractor()),
  new ArrayDenormalizer(),
];
$encoders = [new XmlEncoder()];
$serializer = new Serializer($normalizers, $encoders);

$decoded = $serializer->decode($xml, 'xml');
var_export($decoded);

$denormalized = $serializer->denormalize($decoded, Response::class, 'xml');
var_export($denormalized);


