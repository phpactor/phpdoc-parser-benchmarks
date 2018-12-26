<?php

namespace Phpator\PhpdocParserBenchmarks\Benchmark;

use Phpator\PhpdocParserBenchmarks\ParserBenchCase;
use phpDocumentor\Reflection\DocBlockFactory;

class PhpDocumentorBench extends ParserBenchCase
{
    /**
     * @var DocBlockFactory
     */
    private $factory;

    public function setUp(): void
    {
        $this->factory = DocBlockFactory::createInstance();
    }

    /**
     * {@inheritDoc}
     */
    public function benchParse(array $params): void
    {
        $this->factory->create($params['docblock']);
    }

}
