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
github.com/AlDanial/cloc v 2.02  T=0.42 s (118.2 files/s, 308178.4 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             41           4087          35796          90073
Markdown                         5             53              0            285
XML                              1              2              0             28
Bourne Shell                     1              7              7             22
Text                             2              5              0             12
-------------------------------------------------------------------------------
SUM:                            50           4154          35803          90420
-------------------------------------------------------------------------------
</code></pre>
### Unit testing
<pre><code>
</code>
</pre>
