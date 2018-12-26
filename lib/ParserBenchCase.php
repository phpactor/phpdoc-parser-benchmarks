<?php

namespace Phpator\PhpdocParserBenchmarks;

/**
 * @OutputTimeUnit("milliseconds")
 * @Iterations(10)
 * @Revs(50)
 * @BeforeMethods({"setUp"})
 */
abstract class ParserBenchCase
{
    public function setUp(): void
    {
    }

    public function provideDocblocks(): iterable
    {
        return new DocblockProvider();
    }

    /**
     * @ParamProviders({"provideDocblocks"})
     */
    abstract public function benchParse(array $params): void;
}
