# PhpLab
Space for testing stuff in PHP - curr. 8.4+

It is also being used as playground for other repos (e.g: [PhascolarctosCinereus](https://github.com/SchrodtSven/PhascolarctosCinereus))

## Motivation 

Used as temporary container for testing implementations in modern <kbd>PHP</kbd>(8.* - 8.5) for personal usage/needs

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
├── gitme.sh
├── helper_toolz
│   ├── gen_dta.php
│   └── generate_test_data.php
├── LICENSE
├── main.php
├── phpunit.phar
├── phpunit.xml
├── README.md
├── src
│   └── PhpLab
│       ├── Autoload.php
│       ├── Data
│       │   ├── ArrayExternalDataProvider.php
│       │   ├── Mocky.php
│       │   └── NamedSymbols.php
│       ├── Repl
│       │   ├── Interpreter.php
│       │   ├── Lexer.php
│       │   └── Repl.php
│       ├── Snaky
│       │   ├── Ctx
│       │   │   ├── CtxInterface.php
│       │   │   └── Manager.php
│       │   ├── Globals.php
│       │   ├── Kernel
│       │   │   ├── Accessor.php
│       │   │   ├── AccessParser.php
│       │   │   ├── README.md
│       │   │   ├── README.php
│       │   │   └── SnakyAccessTrait.php
│       │   ├── Koalas
│       │   │   └── DataFrame.php
│       │   └── README.md
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
    ├── Snaky
    │   └── Kernel
    │       └── AccessorTest.php
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

22 directories, 58 files
</code></pre>
### Lines of code
<pre><code>
github.com/AlDanial/cloc v 2.02  T=0.42 s (134.1 files/s, 312982.7 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             47           4100          35913          90182
Markdown                         6             88              0            354
XML                              1              2              0             28
Bourne Shell                     1              7              6             23
Text                             1              0              0              2
-------------------------------------------------------------------------------
SUM:                            56           4197          35919          90589
-------------------------------------------------------------------------------
</code></pre>
### Unit testing
<pre><code>
PHPUnit 12.3.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.4.5
Configuration: /Users/svenschrodt/projects/PhpLab/phpunit.xml

.............................................................   61 / 1400 (  4%)
.............................................................  122 / 1400 (  8%)
.............................................................  183 / 1400 ( 13%)
.............................................................  244 / 1400 ( 17%)
.............................................................  305 / 1400 ( 21%)
.............................................................  366 / 1400 ( 26%)
.............................................................  427 / 1400 ( 30%)
.............................................................  488 / 1400 ( 34%)
.............................................................  549 / 1400 ( 39%)
.............................................................  610 / 1400 ( 43%)
.............................................................  671 / 1400 ( 47%)
.............................................................  732 / 1400 ( 52%)
.............................................................  793 / 1400 ( 56%)
.............................................................  854 / 1400 ( 61%)
.............................................................  915 / 1400 ( 65%)
.............................................................  976 / 1400 ( 69%)
............................................................. 1037 / 1400 ( 74%)
............................................................. 1098 / 1400 ( 78%)
............................................................. 1159 / 1400 ( 82%)
............................................................. 1220 / 1400 ( 87%)
............................................................. 1281 / 1400 ( 91%)
............................................................. 1342 / 1400 ( 95%)
..........................................................    1400 / 1400 (100%)

Time: 00:00.522, Memory: 35.81 MB

OK (1400 tests, 7432 assertions)
</code>
</pre>
