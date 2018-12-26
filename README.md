Benchmarks for PHPDoc parsers
=============================

[![Build Status](https://travis-ci.org/phpactor/phpdoc-parser-benchmarks.svg?branch=master)](https://travis-ci.org/phpactor/phpdoc-parser-benchmarks)

Some informal benchmarks for PHPDoc parsers using
[PHPBench](https://github.com/phpbench/phpbench).

Parsers:

- **Phpactor Parser**: An awful but very fast parser.
- **Phpstan Parser**: The parser used by PHPStan.
- **PhpDocumentor Parser**: The parser used by PHPDocumentor.

Test data:

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

```
set: Faker generator
+---------------+------------+------+-----+------------+----------+----------+----------+----------+---------+--------+-------+                                         
| benchmark     | subject    | revs | its | mem_peak   | best     | mean     | mode     | worst    | stdev   | rstdev | diff  |                                         
+---------------+------------+------+-----+------------+----------+----------+----------+----------+---------+--------+-------+                                         
| PhpactorBench | benchParse | 50   | 2   | 1,294,128b | 2.485ms  | 2.514ms  | 2.514ms  | 2.544ms  | 0.030ms | 1.19%  | 1.00x |                                         
| PhpstanBench  | benchParse | 50   | 2   | 3,826,144b | 16.921ms | 17.531ms | 17.532ms | 18.141ms | 0.610ms | 3.48%  | 6.97x |                                         
+---------------+------------+------+-----+------------+----------+----------+----------+----------+---------+--------+-------+                                         

set: Laravel Route
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        
| benchmark          | subject    | revs | its | mem_peak   | best    | mean    | mode    | worst   | stdev   | rstdev | diff  |                                        
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        
| PhpactorBench      | benchParse | 50   | 2   | 1,144,528b | 0.944ms | 1.254ms | 1.254ms | 1.564ms | 0.310ms | 24.74% | 1.00x |                                        
| PhpstanBench       | benchParse | 50   | 2   | 2,009,224b | 5.438ms | 5.473ms | 5.472ms | 5.507ms | 0.034ms | 0.63%  | 4.36x |                                        
| PhpDocumentorBench | benchParse | 50   | 2   | 1,740,160b | 3.333ms | 3.399ms | 3.399ms | 3.465ms | 0.066ms | 1.94%  | 2.71x |                                        
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        

set: Phpspec ObjectBehavior
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        
| benchmark          | subject    | revs | its | mem_peak   | best    | mean    | mode    | worst   | stdev   | rstdev | diff  |                                        
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        
| PhpactorBench      | benchParse | 50   | 2   | 1,141,512b | 0.967ms | 1.302ms | 1.302ms | 1.636ms | 0.334ms | 25.67% | 1.00x |                                        
| PhpstanBench       | benchParse | 50   | 2   | 1,776,520b | 3.838ms | 3.916ms | 3.916ms | 3.994ms | 0.078ms | 1.99%  | 3.01x |                                        
| PhpDocumentorBench | benchParse | 50   | 2   | 1,565,904b | 2.926ms | 3.300ms | 3.299ms | 3.674ms | 0.374ms | 11.33% | 2.54x |                                        
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        

set: Phpunit TestCase::create
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        
| benchmark          | subject    | revs | its | mem_peak   | best    | mean    | mode    | worst   | stdev   | rstdev | diff  |                                        
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        
| PhpactorBench      | benchParse | 50   | 2   | 1,089,856b | 0.321ms | 0.322ms | 0.322ms | 0.323ms | 0.001ms | 0.34%  | 1.00x |                                        
| PhpstanBench       | benchParse | 50   | 2   | 1,277,720b | 0.799ms | 0.802ms | 0.802ms | 0.805ms | 0.003ms | 0.39%  | 2.49x |                                        
| PhpDocumentorBench | benchParse | 50   | 2   | 1,586,680b | 0.899ms | 1.028ms | 1.028ms | 1.157ms | 0.129ms | 12.57% | 3.19x |                                        
+--------------------+------------+------+-----+------------+---------+---------+---------+---------+---------+--------+-------+                                        
```
