<?php

namespace Phpator\PhpdocParserBenchmarks\Benchmark;

use Phpactor\Docblock\DocblockFactory;
use Phpator\PhpdocParserBenchmarks\ParserBenchCase;

class PhpactorBench extends ParserBenchCase
{
    public function benchParse(array $params)
    {
        $factory = new DocblockFactory();
        $factory->create($params['docblock']);
    }
}
