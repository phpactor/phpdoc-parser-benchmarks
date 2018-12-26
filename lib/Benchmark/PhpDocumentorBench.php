<?php

namespace Phpator\PhpdocParserBenchmarks\Benchmark;

use Phpator\PhpdocParserBenchmarks\ParserBenchCase;
use phpDocumentor\Reflection\DocBlockFactory;

class PhpDocumentorBench extends ParserBenchCase
{
    /**
     * {@inheritDoc}
     */
    public function benchParse(array $params)
    {
        $factory = DocBlockFactory::createInstance();
        $factory->create($params['docblock']);
    }

}
