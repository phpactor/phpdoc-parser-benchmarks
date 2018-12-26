Benchmarks for PHPDoc parsers
=============================

[![Build Status](https://travis-ci.org/phpactor/phpdoc-parser-benchmarks.svg?branch=master)](https://travis-ci.org/phpactor/phpdoc-parser-benchmarks)

Some informal benchmarks for PHPDoc parsers using
[PHPBench](https://github.com/phpbench/phpbench).

Docblock parsing is an important performance bottleneck in Phpactor, these benchmarks
are intended to measure the fast but (currently at least) poorly implemented
Phpactor Docblock parser against other, more accurate, parsers. It is not
recommended to use the Phpactor parser in it's current state in your own projects.

Parsers:

- **Phpactor Parser**: An awful but fast parser for Phpactor.
- **Phpstan Parser**: The parser used by PHPStan.
- **PhpDocumentor Parser**: The parser used by PHPDocumentor.

Test data see (code
[here](https://github.com/phpactor/phpdoc-parser-benchmarks/blob/master/lib/DocblockProvider.php)):

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

Results (2018-12-26)
--------------------

### set: Faker Generator

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,196,144b | 0.382ms | 0.608ms | 0.415ms | 1.049ms | 45.01% | 1.00x
PhpstanBench | 3,717,160b | 3.832ms | 4.780ms | 4.057ms | 8.423ms | 30.05% | 9.79x

### set: Laravel Route

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,045,808b | 0.139ms | 0.203ms | 0.157ms | 0.395ms | 42.19% | 1.00x
PhpstanBench | 1,901,232b | 1.153ms | 1.743ms | 1.269ms | 2.796ms | 36.80% | 8.09x
PhpDocumentorBench | 1,442,752b | 0.615ms | 0.890ms | 0.659ms | 1.370ms | 34.35% | 4.20x

### set: Phpspec ObjectBehavior

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,042,792b | 0.141ms | 0.235ms | 0.154ms | 0.407ms | 43.99% | 1.00x
PhpstanBench | 1,669,136b | 0.844ms | 1.221ms | 0.889ms | 1.998ms | 39.39% | 5.76x
PhpDocumentorBench | 1,385,912b | 0.445ms | 0.667ms | 0.477ms | 1.036ms | 35.31% | 3.09x

### set: Phpunit TestCase::create

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 992,064b | 0.025ms | 0.043ms | 0.027ms | 0.107ms | 46.99% | 1.00x
PhpstanBench | 1,170,496b | 0.137ms | 0.253ms | 0.164ms | 0.414ms | 44.88% | 6.13x
PhpDocumentorBench | 1,355,424b | 0.145ms | 0.233ms | 0.157ms | 0.357ms | 32.02% | 5.86x

Environment
-----------

### Suite #133f0ea6c4b2731d9c2eaec7fea167460c6f1324 2018-12-26 20:33:54

provider | key | value
 --- | --- | --- 
uname | os | Linux
uname | host | x1-debian
uname | release | 4.18.0-2-amd64
uname | version | #1 SMP Debian 4.18.10-2 (2018-11-02)
uname | machine | x86_64
php | xdebug | 
php | version | 7.2.9-1
php | ini | 
php | extensions | Core, date, libxml, openssl, pcre, zlib, filter, hash, pcntl, Reflection, SPL, session, sodium, standard
opcache | extension_loaded | 
unix-sysload | l1 | 1.71
unix-sysload | l5 | 1.88
unix-sysload | l15 | 1.83
vcs | system | git
vcs | branch | master
vcs | version | 13d11804e1a6915d2cdc506aa121389d58960f95
baseline | nothing | 0.090837478637695
baseline | md5 | 0.80704689025879
baseline | file_rw | 1.9490718841553

