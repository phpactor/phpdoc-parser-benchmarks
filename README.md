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

Based on 50 cycles in 100 revolutions with a single cycle warmup.

*Note that the Phpdocumentor docblock parser currently throws an nexception when
parsing the Faker docblock.*

### set: Faker Generator

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,295,448b | 2.354ms | 2.803ms | 2.490ms | 3.904ms | 18.04% | 1.00x
PhpstanBench | 3,827,888b | 16.575ms | 17.443ms | 16.917ms | 23.565ms | 6.72% | 6.22x

### set: Laravel Route

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,145,848b | 0.830ms | 1.042ms | 0.876ms | 1.450ms | 21.24% | 1.00x
PhpstanBench | 2,010,968b | 5.109ms | 5.584ms | 5.318ms | 8.002ms | 11.93% | 5.36x
PhpDocumentorBench | 1,602,024b | 3.159ms | 3.470ms | 3.279ms | 5.268ms | 15.54% | 3.33x

### set: Phpspec ObjectBehavior

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,142,832b | 0.855ms | 1.042ms | 0.918ms | 1.552ms | 20.20% | 1.00x
PhpstanBench | 1,778,264b | 3.626ms | 4.201ms | 3.791ms | 6.632ms | 18.37% | 4.03x
PhpDocumentorBench | 1,477,600b | 2.054ms | 2.491ms | 2.203ms | 3.577ms | 19.74% | 2.39x

### set: Phpunit TestCase::create

benchmark | mem_peak | best | mean | mode | worst | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- 
PhpactorBench | 1,091,176b | 0.155ms | 0.210ms | 0.168ms | 0.310ms | 26.32% | 1.00x
PhpstanBench | 1,279,464b | 0.627ms | 0.866ms | 0.738ms | 1.154ms | 20.52% | 4.12x
PhpDocumentorBench | 1,512,136b | 0.694ms | 0.937ms | 0.782ms | 1.326ms | 22.96% | 4.46x

### env

provider | key | value
 --- | --- | --- 
uname | os | Linux
uname | host | x1-debian
uname | release | 4.18.0-2-amd64
uname | version | #1 SMP Debian 4.18.10-2 (2018-11-02)
uname | machine | x86_64
php | xdebug | 1
php | version | 7.2.9-1
php | ini | /etc/php/7.2/cli/php.ini
php | extensions | Core, date, libxml, openssl, pcre, zlib, filter, hash, pcntl, Reflection, SPL, session, sodium, standard, PDO, xml, bcmath, bz2, calendar, ctype, curl, dom, mbstring, fileinfo, ftp, gd, gettext, gmp, iconv, intl, json, exif, pdo_pgsql, pdo_sqlite, pgsql, Phar, posix, readline, shmop, SimpleXML, soap, sockets, sqlite3, sysvmsg, sysvsem, sysvshm, tokenizer, wddx, xmlreader, xmlwriter, xsl, Zend OPcache, xdebug
opcache | extension_loaded | 1
opcache | enabled | 
unix-sysload | l1 | 1.43
unix-sysload | l5 | 1.67
unix-sysload | l15 | 1.73
vcs | system | git
vcs | branch | master
vcs | version | a3c1e52ce1daa8fba2f8ae9eb5ce1c552339cbcd
baseline | nothing | 0.15401840209961
baseline | md5 | 1.0361671447754
baseline | file_rw | 3.3500194549561
