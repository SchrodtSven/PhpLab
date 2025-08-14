# SchrodtSven\PhpLab\Types\Operational

## ArrayFilter

Used for arrays with same “columns” in each “line” - to be used in future data structure (like Pandas' DF)

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
    public function by(string $crit): self {}
    public function contains(mixed $value): ListClass {}
    public function between(mixed $min, mixed $max): ListClass {}
    public function eq(mixed $value): ListClass {}
    public function ne(mixed $value): ListClass {}
    public function gt(mixed $value): ListClass {}
    public function lt(mixed $value): ListClass {}
    public function ge(mixed $value): ListClass {}
    public function le(mixed $value): ListClass {}
    public function generic(mixed $value, string $op): ListClass {}
    public function min(string $col): mixed {}
    public function max(string $col): mixed {}
    public function uniq(): ListClass {}
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

```
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

#### Combining filter operations 

##### ANDing

Combining filter operations with [this data set](https://github.com/SchrodtSven/PhpLab/blob/main/src/PhpLab/Data/non-php/mock_detail.json)

```php
$fn = 'src/PhpLab/Data/non-php/mock_detail.json';
$lst = ListClass::fromJsonFile($fn);
$filter = $lst->getFilter();
print_r(
    $filter->by('city')
                ->eq('Berlin')
            ->by('mob_since')
                ->in(range(2016, 2023))
        ->getFiltered()
        ->raw()
);
```

```
Array
(
    [0] => Array
        (
            [id] => 39
            [first_name] => Chantal
            [last_name] => Culcheth
            [email] => cculcheth12@w3.org
            [gender] => Female
            [ip_address] => 244.109.74.156
            [member_since] => 1950-07-07
            [mob_since] => 2017
            [city] => Berlin
            [postal_code] => 12683
            [country] => Germany
            [lat] => 52.4981613
            [lng] => 13.5581889
            [mvie_gnr] => Drama
        )

    [1] => Array
        (
            [id] => 127
            [first_name] => Felita
            [last_name] => Restill
            [email] => frestill3i@amazon.co.uk
            [gender] => Female
            [ip_address] => 135.159.140.114
            [member_since] => 1981-07-23
            [mob_since] => 2018
            [city] => Berlin
            [postal_code] => 12169
            [country] => Germany
            [lat] => 52.4555293
            [lng] => 13.339803
            [mvie_gnr] => Comedy
        )

    [2] => Array
        (
            [id] => 939
            [first_name] => Cybil
            [last_name] => Howroyd
            [email] => chowroydq2@ox.ac.uk
            [gender] => Female
            [ip_address] => 234.4.77.145
            [member_since] => 1998-08-05
            [mob_since] => 2016
            [city] => Berlin
            [postal_code] => 10587
            [country] => Germany
            [lat] => 52.5170826
            [lng] => 13.3236611
            [mvie_gnr] => Comedy|Drama|Romance
        )

)
```