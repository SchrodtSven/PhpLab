# SchrodtSven\PhpLab\Types\Operational

## ArrayFilter

Used for arrays with same “columns” in each “line” - to be used in future Data structure like Pandas DF

### API 

```php
 public const string EQ = '=='; // equals
    public const string NE = '!='; // not equals
    public const string GT = '>'; // greater than
    public const string LT = '<'; // less than
    public const string GE = '>'; // greater than or equals
    public const string LE = '<'; // less than or equals
    public const string CT = 'CT'; // contains
    public const string BT = 'BT'; // between
    public const string MIN = 'MIN'; // min()
    public const string MAX = 'MAX'; // max()
    public function __construct(protected ListClass $dta) {}
    public function by(string $crit): self
    public function contains(mixed $value): ListClass
    public function between(mixed $min, mixed $max): ListClass
    public function eq(mixed $value): ListClass
    public function ne(mixed $value): ListClass
    public function gt(mixed $value): ListClass
    public function lt(mixed $value): ListClass
    public function ge(mixed $value): ListClass
    public function le(mixed $value): ListClass
    public function generic(mixed $value, string $op): ListClass
    public function min(string $col): mixed
    public function max(string $col): mixed
    public function uniq(string $col): ListClass
```

### Example usage

Using [city_country_geo_pop.csv](https://github.com/SchrodtSven/PhpLab/blob/main/src/PhpLab/Data/non-php/city_country_geo_pop.csv) with 
<kbd>[CsvManager](https://github.com/SchrodtSven/PhpLab/blob/main/src/PhpLab/Streams/CsvManager.php)</bkd>


```php
use SchrodtSven\PhpLab\Streams\CsvManager;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;


$fn = 'src/PhpLab/Data/non-php/city_country_geo_pop.csv';
$csv = new CsvManager($fn);

$lst = $csv->asList();

$filter = new ArrayFilter($lst);

$filtered = $filter->by('city')->eq('Berlin');

print_r($filtered->raw());

```

````
SchrodtSven\PhpLab\Types\ListClass Object
(
    [dta:protected] => Array
        (
            [0] => Array
                (
                    [idx] => 134
                    [city] => Berlin
                    [country] => Germany
                    [iso3] => DEU
                    [capital] => primary
                    [lat] => 52.52
                    [lng] => 13.405
                    [admin_name] => Berlin
                    [population] => 4890363.0
                )

            [1] => Array
                (
                    [idx] => 43097
                    [city] => Berlin
                    [country] => United States
                    [iso3] => USA
                    [capital] => 
                    [lat] => 44.4869
                    [lng] => -71.2599
                    [admin_name] => New Hampshire
                    [population] => 9485.0
                )

        )

)
```