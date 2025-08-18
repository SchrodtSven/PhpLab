# SchrodtSven\PhpLab\Snaky

Playground for managing data foo the “snaky way” (aka: <kbd>“pythonic”</kbd>)

## Global functions

### Ideas - not implemented yet
```php
with($dataStructure)->do(function($item) {
  // process $item
})


// ANDing queries in DataFrames:
  $data->query("year == 2007")->query("continent == 'Europe'")->getFiltered();
```
## Subnamespaces 


### SchrodtSven\PhpLab\Snaky\Ctx

Behaviour similar to <kbd>contextlib.contextmanager</kbd>