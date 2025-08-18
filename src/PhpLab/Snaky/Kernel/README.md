## The <bigger>🐘<bigger> (not PHP) in the room 

We want:


#### Vertical slicing (“rows”)
- [ ] access operators for slicing; stepping like
  - `[2:]` (third element to end)
  - `[0::2]` (from start to end, stepped by 2)
  - `[::2]` (SAME AS ABOVE)
  


####  “Horizontal sclices” (“columns”)
 
    - [['id', 'mail']] - cutting  named “cols” from data structure
    - [['2:4']] - cutting  “cols” from 3rd to fifth index from data structure

> [!IMPORTANT]  
> This is a <abbr title="Proof of concept">POC</abbr>, <abbr title="Work in progress">WIP</abbr>, <abbr title="Where to fly?">WTF</abbr> and only for myself with
no mile stones or deadline.

#### Filtering functions
- [x] filtering data with PHP 8.4+ the snaky way 🐍.
  - tbh: also and more important: the [🐼, 🐼] way.

### Ideas

```php

with($dataStructure).do(function($item) {
  // process
})


// Queries in DataFrames:
  $data->query("year == 2007")->query("continent == 'Europe'")
```


 

## Motivation 

Just reimplement that stuff, having fun, learning things

## Principles 

Although we do have some classes operating as ```array```s, ```list```s, ```dict```s: ```DataFrame```* will use <var>PHP</var> native array functions for performance causes.

## Code examples

[More example code for basic usage](doq/README.md)

## "Simple" slicing [] operations

### List
```php
$foo = new ListClass(['Werner', 'Herbert', 'Franzy']);

# MASPIP - Make array sclicing possible in PHP like so:
var_dump($foo['1:2']);

```

```sh
array(3) {
  [0]=>
  string(7) "Herbert"
  [1]=>
  string(6) "Franzy"
} 
```
