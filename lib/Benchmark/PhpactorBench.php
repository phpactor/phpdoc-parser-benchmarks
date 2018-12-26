<?php

namespace Phpator\PhpdocParserBenchmarks\Benchmark;

use Phpactor\Docblock\DocblockFactory;
use Phpator\PhpdocParserBenchmarks\ParserBenchCase;

class PhpactorBench extends ParserBenchCase
{
    /**
     * @var DocblockFactory
     */
    private $factory;

    public function setUp(): void
    {
        $this->factory = new DocblockFactory();
    }

    public function benchParse(array $params): void
    {
        $this->factory->create($params['docblock']);
    }
}
