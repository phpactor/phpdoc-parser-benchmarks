Benchmarks for PHPDoc parsers
=============================

[![Build Status](https://travis-ci.org/phpactor/phpdoc-parser-benchmarks.svg?branch=master)](https://travis-ci.org/phpactor/phpdoc-parser-benchmarks)

Some informal benchmarks for PHPDoc parsers using
[PHPBench](https://github.com/phpbench/phpbench).

Parsers:

- **Phpactor Parser**: An awful but fast parser for Phpactor.
- **Phpstan Parser**: The parser used by PHPStan.
- **PhpDocumentor Parser**: The parser used by PHPDocumentor.

Test data see (code
[here](https://github.com/phpactor/phpdoc-parser-benchmarks/blob/master/lib/DocblockProvider.php):

- **Faker Generator**: Large class docblock.
- **Laravel Route**: Medium class docblock .
- **PhpSpec ObjectBeavior**: Medium class docblock.
- **PhpUnit TestCase::create**: Small method docblock.

Running
-------

```
$ git clone git@github.com:phpactor/phpdoc-parser-benchmarks
$ composer install
$ ./vendor/bin/phpbench run --report=parser
```

Results
-------

*Note that the Phpdocumentor docblock parser currently throws an exception when
parsing the Faker docblock.*

### set: Faker Generator

benchmark | mem_peak | best | mean | mode | worst | rstdev
 --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,295,416b | 2.180ms | 2.652ms | 2.491ms | 4.243ms | 20.89%
PhpstanBench | 3,827,856b | 17.037ms | 18.646ms | 17.622ms | 25.568ms | 13.50%

### set: Laravel Route

benchmark | mem_peak | best | mean | mode | worst | rstdev
 --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,145,816b | 0.798ms | 1.197ms | 1.449ms | 1.512ms | 24.18%
PhpstanBench | 2,010,936b | 5.311ms | 6.120ms | 5.610ms | 8.146ms | 14.98%
PhpDocumentorBench | 1,601,992b | 3.253ms | 3.893ms | 3.365ms | 5.469ms | 22.07%

### set: Phpspec ObjectBehavior

benchmark | mem_peak | best | mean | mode | worst | rstdev
 --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,142,800b | 0.917ms | 1.172ms | 0.948ms | 1.553ms | 24.03%
PhpstanBench | 1,778,232b | 3.757ms | 4.576ms | 3.959ms | 5.912ms | 19.58%
PhpDocumentorBench | 1,477,568b | 1.967ms | 2.365ms | 2.268ms | 3.392ms | 15.17%

### set: Phpunit TestCase::create

benchmark | mem_peak | best | mean | mode | worst | rstdev
 --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,091,144b | 0.175ms | 0.247ms | 0.293ms | 0.303ms | 23.35%
PhpstanBench | 1,279,432b | 0.746ms | 1.021ms | 0.802ms | 1.302ms | 23.13%
PhpDocumentorBench | 1,512,104b | 0.814ms | 0.975ms | 0.871ms | 1.411ms | 21.60%

