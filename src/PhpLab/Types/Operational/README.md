# SchrodtSven\PhpLab\Types\Operational

## ArrayFilter

Used for arrays with same “columns” in each “line” - to be used in future data structure (like Pandas' DF)

The filter uses a fluent interface for <var>method chaining</var> - to get the currently filtered data see <kbd>ArrayFilter::getFiltered()</kbd>

### API 

```php
    public const string EQ = '=='; // equals
    public const string NE = '!='; // not equals
    public const string GT = '>'; // greater than
    public const string LT = '<'; // less than
    public const string GE = '>'; // greater than or equals
    public const string LE = '<'; // less than or equals
    public const string SW = 'SW'; // starts with
    public const string EW = 'EW'; // ends with
    public const string CT = 'CT'; // contains
    public const string BT = 'BT'; // between
    public const string MIN = 'MIN'; // min()
    public const string MAX = 'MAX'; // max()
    public const string IN = 'IN'; //  in() 
    public const string NIN = 'NIИ'; // not in() 
    public function __construct(protected ListClass $dta) 
    public function by(string $crit): self
    public function starts(mixed $value): self
    public function contains(mixed $value): self
    public function ends(mixed $value): self
    public function between(mixed $min, mixed $max): self
    public function in(array $dta): self
    public function nin(array $dta): self
    public function eq(mixed $value): self
    public function ne(mixed $value): self
    public function gt(mixed $value): self
    public function lt(mixed $value): self
    public function ge(mixed $value): self
    public function le(mixed $value): self
    public function generic(mixed $value, string $op): self
    public function min(string $col): mixed
    public function max(string $col): mixed
    public function uniq(): ListClass
    public function getFiltered(): ListClass
    public function reset(): void
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
$filtered = $filter->by('city')->contains('Berlin');

print_r($filtered->getFiltered()->raw());

```

```
Array
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
            [idx] => 13560
            [city] => New Berlin
            [country] => United States
            [iso3] => USA
            [capital] => 
            [lat] => 42.9726
            [lng] => -88.1291
            [admin_name] => Wisconsin
            [population] => 40387.0
        )

    [2] => Array
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