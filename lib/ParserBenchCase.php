<?php

namespace Phpator\PhpdocParserBenchmarks;

/**
 * @OutputTimeUnit("milliseconds")
 * @Iterations(10)
 * @Revs(50)
 */
abstract class ParserBenchCase
{
    public function provideDocblocks(): iterable
    {
        return new DocblockProvider();
    }

    /**
     * @ParamProviders({"provideDocblocks"})
     */
    abstract public function benchParse(array $params);
}
