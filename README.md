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

15 directories, 62 files
</code></pre>
### Lines of code
<pre><code>
github.com/AlDanial/cloc v 2.02  T=0.44 s (113.3 files/s, 295315.0 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
PHP                             41           4087          35796          90073
Markdown                         5             53              0            284
XML                              1              2              0             28
Bourne Shell                     1              7              6             23
Text                             2              5              0             12
-------------------------------------------------------------------------------
SUM:                            50           4154          35802          90420
-------------------------------------------------------------------------------
</code></pre>
### Unit testing
<pre><code>

Deprecated: PHPUnit\Framework\Exception::__construct(): Implicitly marking parameter $previous as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/Exception/Exception.php on line 47

Deprecated: PHPUnit\Framework\Constraint\Constraint::fail(): Implicitly marking parameter $comparisonFailure as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/Constraint/Constraint.php on line 95

Deprecated: PHPUnit\Framework\Constraint\JsonMatches::fail(): Implicitly marking parameter $comparisonFailure as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/Constraint/JsonMatches.php on line 72

Deprecated: PHPUnit\Framework\TestSuite::run(): Implicitly marking parameter $result as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestSuite.php on line 448

Deprecated: PHPUnit\Framework\Test::run(): Implicitly marking parameter $result as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/Test.php on line 23

Deprecated: PHPUnit\Framework\TestCase::run(): Implicitly marking parameter $result as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 613

Deprecated: PHPUnit\Framework\Error\Error::__construct(): Implicitly marking parameter $previous as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/Error/Error.php on line 20

Deprecated: PHPUnit\Framework\ExceptionWrapper::originalException(): Implicitly marking parameter $exceptionToStore as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/ExceptionWrapper.php on line 94

Deprecated: PHPUnit\Framework\ExpectationFailedException::__construct(): Implicitly marking parameter $comparisonFailure as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/Exception/ExpectationFailedException.php on line 31

Deprecated: PHPUnit\Framework\ExpectationFailedException::__construct(): Implicitly marking parameter $previous as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/Exception/ExpectationFailedException.php on line 31

Deprecated: PHPUnit\Framework\InvalidArgumentException::__construct(): Implicitly marking parameter $previous as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/Exception/InvalidArgumentException.php on line 28

Deprecated: PHPUnit\Framework\MockObject\Generator::getMock(): Implicitly marking parameter $proxyTarget as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/MockObject/Generator.php on line 91

Deprecated: PHPUnit\Framework\MockObject\Generator::getMockForAbstractClass(): Implicitly marking parameter $mockedMethods as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/MockObject/Generator.php on line 151

Deprecated: PHPUnit\Framework\MockObject\Generator::getMockForTrait(): Implicitly marking parameter $mockedMethods as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/MockObject/Generator.php on line 193

Deprecated: PHPUnit\Framework\MockObject\Generator::generate(): Implicitly marking parameter $methods as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/MockObject/Generator.php on line 229

Deprecated: PHPUnit\Framework\MockObject\Generator::getObject(): Implicitly marking parameter $proxyTarget as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/MockObject/Generator.php on line 387

Deprecated: PHPUnit\PharIo\Manifest\Manifest::isExtensionFor(): Implicitly marking parameter $version as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phar-io-manifest/values/Manifest.php on line 74

Deprecated: PHPUnit\PhpParser\ConstExprEvaluator::__construct(): Implicitly marking parameter $fallbackEvaluator as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/ConstExprEvaluator.php on line 37

Deprecated: PHPUnit\PhpParser\Internal\PrintableNewAnonClassNode::__construct(): Implicitly marking parameter $extends as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Internal/PrintableNewAnonClassNode.php on line 30

Deprecated: PHPUnit\PhpParser\Lexer::startLexing(): Implicitly marking parameter $errorHandler as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Lexer.php on line 64

Deprecated: PHPUnit\PhpParser\Lexer\Emulative::startLexing(): Implicitly marking parameter $errorHandler as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Lexer/Emulative.php on line 57

Deprecated: PHPUnit\PhpParser\NameContext::startNamespace(): Implicitly marking parameter $namespace as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/NameContext.php on line 35

Deprecated: PHPUnit\PhpParser\NodeDumper::dump(): Implicitly marking parameter $code as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/NodeDumper.php on line 41

Deprecated: PHPUnit\PhpParser\NodeVisitor\NameResolver::__construct(): Implicitly marking parameter $errorHandler as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/NodeVisitor/NameResolver.php on line 35

Deprecated: PHPUnit\PhpParser\NodeVisitor\NameResolver::addAlias(): Implicitly marking parameter $prefix as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/NodeVisitor/NameResolver.php on line 150

Deprecated: PHPUnit\PhpParser\Node\Arg::__construct(): Implicitly marking parameter $name as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Arg.php on line 27

Deprecated: PHPUnit\PhpParser\Node\Expr\ArrayDimFetch::__construct(): Implicitly marking parameter $dim as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Expr/ArrayDimFetch.php on line 20

Deprecated: PHPUnit\PhpParser\Node\Expr\ArrayItem::__construct(): Implicitly marking parameter $key as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Expr/ArrayItem.php on line 25

Deprecated: PHPUnit\PhpParser\Node\Expr\Exit_::__construct(): Implicitly marking parameter $expr as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Expr/Exit_.php on line 20

Deprecated: PHPUnit\PhpParser\Node\Expr\Yield_::__construct(): Implicitly marking parameter $value as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Expr/Yield_.php on line 20

Deprecated: PHPUnit\PhpParser\Node\Expr\Yield_::__construct(): Implicitly marking parameter $key as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Expr/Yield_.php on line 20

Deprecated: PHPUnit\PhpParser\Node\Name::slice(): Implicitly marking parameter $length as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Name.php on line 146

Deprecated: PHPUnit\PhpParser\Node\Param::__construct(): Implicitly marking parameter $default as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Param.php on line 35

Deprecated: PHPUnit\PhpParser\Node\Stmt\Break_::__construct(): Implicitly marking parameter $num as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/Break_.php on line 17

Deprecated: PHPUnit\PhpParser\Node\Stmt\Catch_::__construct(): Implicitly marking parameter $var as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/Catch_.php on line 24

Deprecated: PHPUnit\PhpParser\Node\Stmt\Continue_::__construct(): Implicitly marking parameter $num as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/Continue_.php on line 17

Deprecated: PHPUnit\PhpParser\Node\Stmt\Declare_::__construct(): Implicitly marking parameter $stmts as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/Declare_.php on line 20

Deprecated: PHPUnit\PhpParser\Node\Stmt\EnumCase::__construct(): Implicitly marking parameter $expr as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/EnumCase.php on line 22

Deprecated: PHPUnit\PhpParser\Node\Stmt\Namespace_::__construct(): Implicitly marking parameter $name as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/Namespace_.php on line 23

Deprecated: PHPUnit\PhpParser\Node\Stmt\PropertyProperty::__construct(): Implicitly marking parameter $default as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/PropertyProperty.php on line 20

Deprecated: PHPUnit\PhpParser\Node\Stmt\Return_::__construct(): Implicitly marking parameter $expr as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/Return_.php on line 17

Deprecated: PHPUnit\PhpParser\Node\Stmt\StaticVar::__construct(): Implicitly marking parameter $default as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/StaticVar.php on line 21

Deprecated: PHPUnit\PhpParser\Node\Stmt\TryCatch::__construct(): Implicitly marking parameter $finally as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Node/Stmt/TryCatch.php on line 23

Deprecated: PHPUnit\PhpParser\Parser::parse(): Implicitly marking parameter $errorHandler as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Parser.php on line 18

Deprecated: PHPUnit\PhpParser\ParserAbstract::parse(): Implicitly marking parameter $errorHandler as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/ParserAbstract.php on line 139

Deprecated: PHPUnit\PhpParser\ParserFactory::create(): Implicitly marking parameter $lexer as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/ParserFactory.php on line 21

Deprecated: PHPUnit\PhpParser\Parser\Multiple::parse(): Implicitly marking parameter $errorHandler as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/nikic-php-parser/PhpParser/Parser/Multiple.php on line 26

Deprecated: PHPUnit\Runner\PhptTestCase::__construct(): Implicitly marking parameter $phpUtil as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Runner/PhptTestCase.php on line 86

Deprecated: PHPUnit\Runner\PhptTestCase::run(): Implicitly marking parameter $result as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Runner/PhptTestCase.php on line 109

Deprecated: PHPUnit\SebastianBergmann\CliParser\Parser::parse(): Implicitly marking parameter $longOptions as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/sebastian-cli-parser/Parser.php on line 45

Deprecated: PHPUnit\SebastianBergmann\CodeCoverage\Node\AbstractNode::__construct(): Implicitly marking parameter $parent as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/php-code-coverage/Node/AbstractNode.php on line 46

Deprecated: PHPUnit\SebastianBergmann\Diff\ConfigurationException::__construct(): Implicitly marking parameter $previous as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/sebastian-diff/Exception/ConfigurationException.php on line 21

Deprecated: PHPUnit\SebastianBergmann\Diff\Differ::diff(): Implicitly marking parameter $lcs as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/sebastian-diff/Differ.php on line 74

Deprecated: PHPUnit\SebastianBergmann\Diff\Differ::diffToArray(): Implicitly marking parameter $lcs as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/sebastian-diff/Differ.php on line 94

Deprecated: PHPUnit\SebastianBergmann\Exporter\Exporter::shortenedRecursiveExport(): Implicitly marking parameter $context as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/sebastian-exporter/Exporter.php on line 77

Deprecated: PHPUnit\SebastianBergmann\GlobalState\Snapshot::__construct(): Implicitly marking parameter $excludeList as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/sebastian-global-state/Snapshot.php on line 92

Deprecated: PHPUnit\TextUI\TestRunner::__construct(): Implicitly marking parameter $loader as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/TextUI/TestRunner.php on line 122

Deprecated: PHPUnit\TextUI\TestRunner::__construct(): Implicitly marking parameter $filter as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/TextUI/TestRunner.php on line 122

Deprecated: PHPUnit\TheSeer\Tokenizer\XMLSerializer::__construct(): Implicitly marking parameter $xmlns as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/theseer-tokenizer/XMLSerializer.php on line 20

Deprecated: PHPUnit\Util\PHP\AbstractPhpProcess::getCommand(): Implicitly marking parameter $file as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Util/PHP/AbstractPhpProcess.php on line 168

Deprecated: PHPUnit\Util\PHP\WindowsPhpProcess::getCommand(): Implicitly marking parameter $file as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpunit/Util/PHP/WindowsPhpProcess.php on line 24

Deprecated: Prophecy\Argument\Token\ExactValueToken::__construct(): Implicitly marking parameter $util as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Argument/Token/ExactValueToken.php on line 34

Deprecated: Prophecy\Argument\Token\ExactValueToken::__construct(): Implicitly marking parameter $comparatorFactory as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Argument/Token/ExactValueToken.php on line 34

Deprecated: Prophecy\Argument\Token\IdenticalValueToken::__construct(): Implicitly marking parameter $util as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Argument/Token/IdenticalValueToken.php on line 30

Deprecated: Prophecy\Argument\Token\ObjectStateToken::__construct(): Implicitly marking parameter $util as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Argument/Token/ObjectStateToken.php on line 35

Deprecated: Prophecy\Argument\Token\ObjectStateToken::__construct(): Implicitly marking parameter $comparatorFactory as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Argument/Token/ObjectStateToken.php on line 35

Deprecated: Prophecy\Call\Call::__construct(): Implicitly marking parameter $exception as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Call/Call.php on line 39

Deprecated: Prophecy\Call\CallCenter::__construct(): Implicitly marking parameter $util as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Call/CallCenter.php on line 40

Deprecated: Prophecy\Doubler\CachedDoubler::createDoubleClass(): Implicitly marking parameter $class as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/CachedDoubler.php on line 26

Deprecated: Prophecy\Doubler\CachedDoubler::generateClassId(): Implicitly marking parameter $class as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/CachedDoubler.php on line 40

Deprecated: Prophecy\Doubler\Doubler::__construct(): Implicitly marking parameter $mirror as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Doubler.php on line 45

Deprecated: Prophecy\Doubler\Doubler::__construct(): Implicitly marking parameter $creator as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Doubler.php on line 45

Deprecated: Prophecy\Doubler\Doubler::__construct(): Implicitly marking parameter $namer as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Doubler.php on line 45

Deprecated: Prophecy\Doubler\Doubler::double(): Implicitly marking parameter $class as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Doubler.php on line 83

Deprecated: Prophecy\Doubler\Doubler::double(): Implicitly marking parameter $args as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Doubler.php on line 83

Deprecated: Prophecy\Doubler\Doubler::createDoubleClass(): Implicitly marking parameter $class as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Doubler.php on line 111

Deprecated: Prophecy\Doubler\ClassPatch\MagicCallPatch::__construct(): Implicitly marking parameter $tagRetriever as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/ClassPatch/MagicCallPatch.php on line 29

Deprecated: Prophecy\Doubler\Generator\ClassCodeGenerator::__construct(): Implicitly marking parameter $typeHintReference as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Generator/ClassCodeGenerator.php on line 23

Deprecated: Prophecy\Doubler\Generator\ClassCreator::__construct(): Implicitly marking parameter $generator as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Generator/ClassCreator.php on line 28

Deprecated: Prophecy\Doubler\Generator\Node\MethodNode::__construct(): Implicitly marking parameter $typeHintReference as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/Generator/Node/MethodNode.php on line 37

Deprecated: Prophecy\Doubler\LazyDouble::setArguments(): Implicitly marking parameter $arguments as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/LazyDouble.php on line 86

Deprecated: Prophecy\Doubler\NameGenerator::name(): Implicitly marking parameter $class as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Doubler/NameGenerator.php on line 31

Deprecated: Prophecy\PhpDocumentor\ClassAndInterfaceTagRetriever::__construct(): Implicitly marking parameter $classRetriever as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/PhpDocumentor/ClassAndInterfaceTagRetriever.php on line 23

Deprecated: Prophecy\Prediction\CallPrediction::__construct(): Implicitly marking parameter $util as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prediction/CallPrediction.php on line 33

Deprecated: Prophecy\Prediction\CallTimesPrediction::__construct(): Implicitly marking parameter $util as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prediction/CallTimesPrediction.php on line 36

Deprecated: Prophecy\Prediction\NoCallsPrediction::__construct(): Implicitly marking parameter $util as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prediction/NoCallsPrediction.php on line 31

Deprecated: Prophecy\Prophecy\ObjectProphecy::__construct(): Implicitly marking parameter $callCenter as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prophecy/ObjectProphecy.php on line 46

Deprecated: Prophecy\Prophecy\ObjectProphecy::__construct(): Implicitly marking parameter $revealer as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prophecy/ObjectProphecy.php on line 46

Deprecated: Prophecy\Prophecy\ObjectProphecy::__construct(): Implicitly marking parameter $comparatorFactory as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prophecy/ObjectProphecy.php on line 46

Deprecated: Prophecy\Prophecy\ObjectProphecy::willBeConstructedWith(): Implicitly marking parameter $arguments as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prophecy/ObjectProphecy.php on line 84

Deprecated: Prophecy\Prophet::__construct(): Implicitly marking parameter $doubler as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prophet.php on line 45

Deprecated: Prophecy\Prophet::__construct(): Implicitly marking parameter $revealer as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prophet.php on line 45

Deprecated: Prophecy\Prophet::__construct(): Implicitly marking parameter $util as nullable is deprecated, the explicit nullable type must be used instead in phar:///opt/homebrew/bin/phpunit/phpspec-prophecy/Prophecy/Prophet.php on line 45
PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

  Warning - The configuration file did not pass validation!
  The following problems have been detected:

  Line 14:
  - Element 'phpunit', attribute 'cacheDirectory': The attribute 'cacheDirectory' is not allowed.
  - Element 'phpunit', attribute 'requireCoverageMetadata': The attribute 'requireCoverageMetadata' is not allowed.
  - Element 'phpunit', attribute 'beStrictAboutCoverageMetadata': The attribute 'beStrictAboutCoverageMetadata' is not allowed.
  - Element 'phpunit', attribute 'displayDetailsOnPhpunitDeprecations': The attribute 'displayDetailsOnPhpunitDeprecations' is not allowed.
  - Element 'phpunit', attribute 'failOnPhpunitDeprecation': The attribute 'failOnPhpunitDeprecation' is not allowed.

  Line 21:
  - Element 'source': This element is not expected.

  Test results may not be as expected.


EEEE.EEE..EEE........EEEEEEEEEEEE                                 33 / 33 (100%)

Time: 00:00.025, Memory: 32.28 MB

There were 22 errors:

1) DataProviderTypeTest::testAddByStaticDataProvider
ArgumentCountError: Too few arguments to function DataProviderTypeTest::testAddByStaticDataProvider(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 3 expected

/Users/svenschrodt/projects/PhpLab/test/DataProviderTypeTest.php:26

2) DataProviderTypeTest::testSubByStaticDataProvider
ArgumentCountError: Too few arguments to function DataProviderTypeTest::testSubByStaticDataProvider(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 3 expected

/Users/svenschrodt/projects/PhpLab/test/DataProviderTypeTest.php:34

3) DataProviderTypeTest::testAddWithTestWithAttribute
ArgumentCountError: Too few arguments to function DataProviderTypeTest::testAddWithTestWithAttribute(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 3 expected

/Users/svenschrodt/projects/PhpLab/test/DataProviderTypeTest.php:62

4) DataProviderTypeTest::testSubWithTestWithAttribute
ArgumentCountError: Too few arguments to function DataProviderTypeTest::testSubWithTestWithAttribute(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 3 expected

/Users/svenschrodt/projects/PhpLab/test/DataProviderTypeTest.php:91

5) DependsTest::testPush
ArgumentCountError: Too few arguments to function DependsTest::testPush(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 1 expected

/Users/svenschrodt/projects/PhpLab/test/DependsTest.php:30

6) DependsTest::testPop
ArgumentCountError: Too few arguments to function DependsTest::testPop(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 1 expected

/Users/svenschrodt/projects/PhpLab/test/DependsTest.php:41

7) GlobalTest::testIfIsStringable
ArgumentCountError: Too few arguments to function GlobalTest::testIfIsStringable(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 1 expected

/Users/svenschrodt/projects/PhpLab/test/GlobalTest.php:18

8) DictClassTest::testIfCountWorxCorrectly
ArgumentCountError: Too few arguments to function DictClassTest::testIfCountWorxCorrectly(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 2 expected

/Users/svenschrodt/projects/PhpLab/test/Types/DictClassTest.php:25

9) DictClassTest::testIfJsonSerialzWorkxProperly
ArgumentCountError: Too few arguments to function DictClassTest::testIfJsonSerialzWorkxProperly(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 2 expected

/Users/svenschrodt/projects/PhpLab/test/Types/DictClassTest.php:33

10) ListClassTest::testIfCountWorxCorrectly
ArgumentCountError: Too few arguments to function ListClassTest::testIfCountWorxCorrectly(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 2 expected

/Users/svenschrodt/projects/PhpLab/test/Types/ListClassTest.php:25

11) StackOperationTest::testPush
ArgumentCountError: Too few arguments to function StackOperationTest::testPush(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 1 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StackOperationTest.php:43

12) StackOperationTest::testPop
ArgumentCountError: Too few arguments to function StackOperationTest::testPop(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 1 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StackOperationTest.php:54

13) StackOperationTest::testUnshift
ArgumentCountError: Too few arguments to function StackOperationTest::testUnshift(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 1 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StackOperationTest.php:64

14) StackOperationTest::testShift
ArgumentCountError: Too few arguments to function StackOperationTest::testShift(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 1 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StackOperationTest.php:73

15) StackOperationTest::testFirstLastKeys
ArgumentCountError: Too few arguments to function StackOperationTest::testFirstLastKeys(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 3 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StackOperationTest.php:81

16) StringClassTest::testIfIsCamelizable
ArgumentCountError: Too few arguments to function StringClassTest::testIfIsCamelizable(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 2 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StringClassTest.php:16

17) StringClassTest::testIfPreAndAppendWorxProperly
ArgumentCountError: Too few arguments to function StringClassTest::testIfPreAndAppendWorxProperly(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 4 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StringClassTest.php:24

18) StringClassTest::testIfSplitCorrectlyByWhitespace
ArgumentCountError: Too few arguments to function StringClassTest::testIfSplitCorrectlyByWhitespace(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 2 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StringClassTest.php:32

19) StringTraitTest::testIfBeginsEndsContainsWorxProperly
ArgumentCountError: Too few arguments to function StringTraitTest::testIfBeginsEndsContainsWorxProperly(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 4 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StringTraitTest.php:42

20) StringTraitTest::testIfLegacyIpNumSubstrWorxProperly
ArgumentCountError: Too few arguments to function StringTraitTest::testIfLegacyIpNumSubstrWorxProperly(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 4 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StringTraitTest.php:54

21) StringTraitTest::testSubstrCountPlusSplit
ArgumentCountError: Too few arguments to function StringTraitTest::testSubstrCountPlusSplit(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 2 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StringTraitTest.php:63

22) StringTraitTest::testIfCaseTransformationWorxPorperly
ArgumentCountError: Too few arguments to function StringTraitTest::testIfCaseTransformationWorxPorperly(), 0 passed in phar:///opt/homebrew/bin/phpunit/phpunit/Framework/TestCase.php on line 1248 and exactly 6 expected

/Users/svenschrodt/projects/PhpLab/test/Types/StringTraitTest.php:77

ERRORS!
Tests: 33, Assertions: 1628, Errors: 22.
</code>
</pre>
