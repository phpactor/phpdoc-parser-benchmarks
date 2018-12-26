<?php

namespace Phpator\PhpdocParserBenchmarks\Benchmark;

use PHPStan\PhpDocParser\Lexer\Lexer;
use PHPStan\PhpDocParser\Parser\ConstExprParser;
use PHPStan\PhpDocParser\Parser\PhpDocParser;
use PHPStan\PhpDocParser\Parser\TokenIterator;
use PHPStan\PhpDocParser\Parser\TypeParser;
use Phpator\PhpdocParserBenchmarks\ParserBenchCase;

class PhpstanBench extends ParserBenchCase
{
    /**
     * {@inheritDoc}
     */
    public function benchParse(array $params)
    {
        $lexer = new Lexer();
        $parser = new PhpDocParser(new TypeParser(), new ConstExprParser());
        $tokens = new TokenIterator($lexer->tokenize($params['docblock']));
        $parser->parse($tokens);
    }
}
