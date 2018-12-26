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
PhpactorBench | 1,196,144b | 0.324ms | 0.562ms | 0.414ms | 1.078ms | 44.28% | 1.00x
PhpstanBench | 3,717,160b | 3.843ms | 5.128ms | 4.166ms | 8.687ms | 33.11% | 9.12x

### set: Laravel Route

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,045,808b | 0.121ms | 0.245ms | 0.157ms | 0.396ms | 40.52% | 1.00x
PhpstanBench | 1,901,232b | 1.173ms | 1.709ms | 1.267ms | 2.825ms | 37.19% | 6.97x
PhpDocumentorBench | 1,442,752b | 0.597ms | 0.896ms | 0.665ms | 1.365ms | 33.81% | 3.65x

### set: Phpspec ObjectBehavior

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,042,792b | 0.140ms | 0.245ms | 0.153ms | 0.429ms | 43.91% | 1.00x
PhpstanBench | 1,669,136b | 0.837ms | 1.265ms | 0.905ms | 2.169ms | 37.95% | 5.15x
PhpDocumentorBench | 1,385,912b | 0.444ms | 0.644ms | 0.485ms | 1.079ms | 35.72% | 2.63x

### set: Phpunit TestCase::create

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 992,064b | 0.025ms | 0.039ms | 0.027ms | 0.084ms | 45.81% | 1.00x
PhpstanBench | 1,170,496b | 0.154ms | 0.271ms | 0.166ms | 0.431ms | 43.11% | 6.91x
PhpDocumentorBench | 1,355,424b | 0.144ms | 0.225ms | 0.157ms | 0.344ms | 33.93% | 5.72x

## Environment

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
unix-sysload | l1 | 2.2
unix-sysload | l5 | 1.93
unix-sysload | l15 | 1.91
vcs | system | git
vcs | branch | master
vcs | version | 207b0a3dbfe19b020c01e561ca5e3cd294a26a9e
baseline | nothing | 0.20313262939453
baseline | md5 | 1.0261535644531
baseline | file_rw | 3.5390853881836

