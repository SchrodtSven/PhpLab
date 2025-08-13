# <kbd>SchrodtSven\Types</kbd>

Wrappers for PHP native data types, offering a fluent OOP interface

## Examples 

```php
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\StringClass;

$code = 'Foo bar    nn. Gaz.   Guy Baz';


$t = new StringClass($code);

// Splitting given string by whitespace, resulting in an instance of ListClass
$tkn = $t->splitByWS(false);

// Sorting values and quoting each value
$tkn->sort()->quote();
// Dynamically generate an array assignment and print it 
print($tkn->join(', ')->append(']')->prepend('['));

// ['Baz', 'Foo', 'Gaz.', 'Guy', 'bar', 'nn.']'
```

