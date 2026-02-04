### Files
<pre><code>
.
├── App
│   ├── Base.php
│   └── tpl
│       ├── index.phtml
│       └── index.tpl
├── LICENSE
├── README.md
├── build
│   └── cicd_steps.txt
├── doq
│   ├── Changelog.md
│   ├── PhpStormStubsMap.php
│   └── PhpToken.php
├── dta
│   ├── foo.txt
│   └── mime_types.txt
├── foo.php
├── foo_test.php
├── gitme.sh
├── helper_toolz
│   ├── gen_dta.php
│   └── generate_test_data.php
├── httpd.md
├── httpd_dev_start.sh
├── index.php
├── main.php
├── parse.php
├── phpunit.xml
├── pub
│   ├── README.md
│   └── index.php
├── src
│   └── PhpLab
│       ├── Autoload.php
│       ├── Data
│       │   ├── ArrayExternalDataProvider.php
│       │   ├── Mocky.php
│       │   └── NamedSymbols.php
│       ├── Mvc
│       │   ├── Request.php
│       │   ├── Response.php
│       │   └── Router.php
│       ├── Parser
│       │   ├── Generic.php
│       │   ├── ParsedEntity.php
│       │   ├── PhtmlParser.php
│       │   └── TinyParser.php
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
│       │   │   ├── AccessParser.php
│       │   │   ├── Accessor.php
│       │   │   ├── README.md
│       │   │   ├── README.php
│       │   │   └── SnakyAccessTrait.php
│       │   └── README.md
│       ├── Streams
│       │   └── CsvManager.php
│       ├── Transpile
│       │   ├── PhpDeuxZephir
│       │   │   ├── Parser.php
│       │   │   ├── README.md
│       │   │   ├── Tknizr.php
│       │   │   ├── Token.php
│       │   │   ├── codes
│       │   │   │   ├── ex1.php
│       │   │   │   └── ex2.php
│       │   │   └── tokens.php
│       │   └── README.md
│       ├── Types
│       │   ├── ArrayClass.php
│       │   ├── DictClass.php
│       │   ├── Dry
│       │   │   ├── ArrayAccessTrait.php
│       │   │   ├── ArrayCallbackTrait.php
│       │   │   ├── ArraySliceTrait.php
│       │   │   ├── ArraySortTrait.php
│       │   │   ├── IteratorTrait.php
│       │   │   ├── MultiByteStringTrait.php
│       │   │   ├── PrintfTrait.php
│       │   │   ├── StackOperationTrait.php
│       │   │   ├── StringBoolTrait.php
│       │   │   ├── StringContextTrait.php
│       │   │   ├── StringEmbracingTrait.php
│       │   │   └── StringTransformingTrait.php
│       │   ├── ListClass.php
│       │   ├── Operational
│       │   │   ├── ArrayFilter.php
│       │   │   └── README.md
│       │   ├── README.md
│       │   ├── StackInterface.php
│       │   └── StringClass.php
│       └── functions.php
├── test
│   ├── DataProviderTypeTest.php
│   ├── DependsTest.php
│   ├── GlobalTest.php
│   ├── Snaky
│   │   └── Kernel
│   │       └── AccessorTest.php
│   ├── Streams
│   │   └── CsvManagerTest.php
│   └── Types
│       ├── DictClassTest.php
│       ├── ListClassTest.php
│       ├── Operational
│       │   └── ArrayFilterTest.php
│       ├── StackOperationTest.php
│       ├── StringClassTest.php
│       └── StringTraitTest.php
└── transpile.php

30 directories, 89 files
</code></pre>
### Lines of code
<pre><code>
github.com/AlDanial/cloc v 2.06  T=0.06 s (1510.9 files/s, 402520.8 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             69            825           1307          19263
Text                             3              0              0            698
Markdown                        10             87              0            395
XML                              1              2              0             28
Bourne Shell                     2              7              6             27
-------------------------------------------------------------------------------
SUM:                            85            921           1313          20411
-------------------------------------------------------------------------------
</code></pre>
### Unit testing
<pre><code>
PHPUnit 12.4.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.5.0
Configuration: /Users/svenschrodt/projx/PhpLab/phpunit.xml

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

Time: 00:00.184, Memory: 33.84 MB

OK (1400 tests, 7355 assertions)
</code>
</pre>
