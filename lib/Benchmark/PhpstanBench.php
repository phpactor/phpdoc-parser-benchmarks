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
     * @var Lexer
     */
    private $lexer;
    /**
     * @var PhpDocParser
     */
    private $parser;

    public function setUp(): void
    {
        $this->lexer = new Lexer();
        $this->parser = new PhpDocParser(new TypeParser(), new ConstExprParser());
    }

    /**
     * {@inheritDoc}
     */
    public function benchParse(array $params): void
    {
        $tokens = new TokenIterator($this->lexer->tokenize($params['docblock']));
        $this->parser->parse($tokens);
    }
}
