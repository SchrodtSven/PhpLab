# PhpLab
Space for testing stuff in PHP - curr. 8.4+

It is also being used as playground for other repos (e.g: [PhascolarctosCinereus](https://github.com/SchrodtSven/PhascolarctosCinereus))
## Motivation 

Used as temporary container for testing implementations in modern <kbd>PHP</kbd>(8.4+) for personal usage/needs

- snippets, doclets, partlets
- PoCs, Ideas, future projects (see: directory ```Incub``` l8er - it yet does not exists)


## Appendix
### Files
<pre><code>
.
├── build
│   └── cicd_steps.txt
├── doq
│   └── Changelog.md
├── gen_dta.php
├── generate_test_data.php
├── gitme.sh
├── grube.php
├── grube.txt
├── LICENSE
├── main.php
├── phpunit.garbage
├── phpunit.phar
├── phpunit.xml
├── README.md
├── README.tpl.md
├── src
│   └── PhpLab
│       ├── Autoload.php
│       ├── Data
│       │   ├── ArrayExternalDataProvider.php
│       │   ├── Mocky.php
│       │   ├── NamedSymbols.php
│       │   └── non-php
│       │       ├── city_country_geo_pop.csv
│       │       ├── customers_database.json
│       │       ├── female_first.csv
│       │       ├── germany.csv
│       │       ├── last_name.csv
│       │       ├── male_first.csv
│       │       ├── meta_syntactic_vars.txt
│       │       ├── mock_detail.json
│       │       ├── mock.csv
│       │       ├── mock.json
│       │       └── worldcities.csv
│       ├── Repl
│       │   ├── Interpreter.php
│       │   ├── Lexer.php
│       │   └── Repl.php
│       ├── Streams
│       │   └── CsvManager.php
│       └── Types
│           ├── ArrayClass.php
│           ├── DictClass.php
│           ├── Dry
│           │   ├── ArrayAccessTrait.php
│           │   ├── ArrayCallbackTrait.php
│           │   ├── ArraySliceTrait.php
│           │   ├── ArraySortTrait.php
│           │   ├── IteratorTrait.php
│           │   ├── MultiByteStringTrait.php
│           │   ├── PrintfTrait.php
│           │   ├── StackOperationTrait.php
│           │   ├── StringBoolTrait.php
│           │   ├── StringContextTrait.php
│           │   ├── StringEmbracingTrait.php
│           │   └── StringTransformingTrait.php
│           ├── ListClass.php
│           ├── Operational
│           │   ├── ArrayFilter.php
│           │   └── README.md
│           ├── README.md
│           ├── StackInterface.php
│           └── StringClass.php
└── test
    ├── DataProviderTypeTest.php
    ├── DependsTest.php
    ├── GlobalTest.php
    ├── Streams
    │   └── CsvManagerTest.php
    └── Types
        ├── DictClassTest.php
        ├── ListClassTest.php
        ├── Operational
        │   └── ArrayFilterTest.php
        ├── StackOperationTest.php
        ├── StringClassTest.php
        └── StringTraitTest.php

15 directories, 63 files
</code></pre>
### Lines of code
<pre><code>
github.com/AlDanial/cloc v 2.02  T=0.33 s (153.7 files/s, 400794.8 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             41           4087          35796          90073
Markdown                         5             53              0            285
XML                              1              2              0             28
Bourne Shell                     1              7              6             23
Text                             2              5              0             12
-------------------------------------------------------------------------------
SUM:                            50           4154          35802          90421
-------------------------------------------------------------------------------
</code></pre>
### Unit testing
<pre><code>
PHPUnit 12.3.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.4.5
Configuration: /Users/svenschrodt/projects/PhpLab/phpunit.xml

.............................................................   61 / 1388 (  4%)
.............................................................  122 / 1388 (  8%)
.............................................................  183 / 1388 ( 13%)
.............................................................  244 / 1388 ( 17%)
.............................................................  305 / 1388 ( 21%)
.............................................................  366 / 1388 ( 26%)
.............................................................  427 / 1388 ( 30%)
.............................................................  488 / 1388 ( 35%)
.............................................................  549 / 1388 ( 39%)
.............................................................  610 / 1388 ( 43%)
.............................................................  671 / 1388 ( 48%)
.............................................................  732 / 1388 ( 52%)
.............................................................  793 / 1388 ( 57%)
.............................................................  854 / 1388 ( 61%)
.............................................................  915 / 1388 ( 65%)
.............................................................  976 / 1388 ( 70%)
............................................................. 1037 / 1388 ( 74%)
............................................................. 1098 / 1388 ( 79%)
............................................................. 1159 / 1388 ( 83%)
............................................................. 1220 / 1388 ( 87%)
............................................................. 1281 / 1388 ( 92%)
............................................................. 1342 / 1388 ( 96%)
..............................................                1388 / 1388 (100%)

Time: 00:00.524, Memory: 35.81 MB

OK (1388 tests, 7321 assertions)
</code>
</pre>
