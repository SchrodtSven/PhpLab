# SchrodtSven\PhpLab\Types\Operational

## ArrayFilter

### Example usage

Using [city_country_geo_pop.csv](https://github.com/SchrodtSven/PhpLab/blob/main/src/PhpLab/Data/non-php/city_country_geo_pop.csv) with 
<kbd>[CsvManager](https://github.com/SchrodtSven/PhpLab/blob/main/src/PhpLab/Streams/CsvManager.php)</bkd>


```php
use SchrodtSven\PhpLab\Streams\CsvManager;
use SchrodtSven\PhpLab\Types\ListClass;
use SchrodtSven\PhpLab\Types\Operational\ArrayFilter;


$fn = 'src/PhpLab/Data/non-php/city_country_geo_pop.csv';
$csv = new CsvManager($fn);

$lst = new $csv->asList();

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