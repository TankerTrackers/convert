# Convert

This package is mainly concerned with converting between the following three units of measurement:

- [API Gravity](https://en.wikipedia.org/wiki/API_gravity)
- [Barrels per Tonne](https://en.wikipedia.org/wiki/Barrel_(unit))
- [Specific Gravity](https://en.wikipedia.org/wiki/Relative_density), AKA "Relative Density"

It was developed to be compatible with PHP 8.0 and greater.

# Installation

```sh
composer require tankertrackers/convert
```

## Usage

If you are doing calculations on an oil grade with a relative density of 0.83, you can create an `Gravity` object by calling on the appropriate static 
method on the `TankerTrackers\Convert` class like so: `Convert::gravity(0.83)`. If you wanted to see the corresponding API value for this Gravity value, you
can instead call `Convert::gravity(0.83)->toApi()`.

Converting all three measurements between each other is done in the same way, and all three methods - `->toApi()`, `->toBpt()`, and `->toGravity()` - are 
available on all three measurements.

```php
>>> TankerTrackers\Convert::api(34.12)->toBpt();
=> TankerTrackers\FluidMeasures\BarrelsPerTonne {#2684
     +value: 7.3613796475321,
   }

>>> TankerTrackers\Convert::bpt(6.59)->toGravity()
=> TankerTrackers\FluidMeasures\Gravity {#2686
     +value: 0.95437149864956,
   }
   
>>> TankerTrackers\Convert::gravity(1.19)->toApi()
=> TankerTrackers\FluidMeasures\ApiGrade {#2689
     +value: 5.897726515101,
   }

// You can also juggle types back and forth as much as you want.
>>> TankerTrackers\Convert::api(30)->toGravity()->toBpt()->toApi()->toBpt()->toGravity()->toApi()
=> TankerTrackers\FluidMeasures\ApiGrade {#2682
     +value: 30.0,
   }
```

> Note that the `$value` attribute is always returned as a `float`; even if the value is `1.0` it is not cast to an `int`.  

You can also access the values directly by calling `->apiValue()`, `->bptValue()` or `->gravityValue()`. This gives the same value as converting to that 
measurement type and accessing the `$value` attribute:

```php
>>> TankerTrackers\Convert::api(31)->toGravity()->value
=> 0.87076923076923

>>> TankerTrackers\Convert::api(31)->gravityValue()
=> 0.87076923076923
```

## Future Development

### Api Grade Categories

In the future, this package will contain some additional bells and whistles when it comes to analyzing the values of the various measurements. For example, 
the `ApiGrade` class might offer a `->getCategory()` method so that something like this is possible:

```php
>>> $api = Convert::bpt(7.12)->toApi()
>>> $api->getCategory()
=> "Medium"
```

### Pre-defined Listings

I might also consider adding a number of well known oil grades via Enum classes so that one can reference values directly, something like:

```php
>>> \TankerTrackers\Common\ApiGrade::ATHABSCA_BITUMEN->getApi()
=> 31.0
>>> \TankerTrackers\Common\ApiGrade::ATHABSCA_BITUMEN->getGravity()
=> 0.87076923076923
```

### Improvements to Value Checking

At the moment, the system trusts that the values you are entering are valid for that category, so it has no reason to suspect anything is weird if you ask 
it to create a liquid of -718 Barrels Per Tonne. Some sanity checks should probably be implemented that catch scenarios like this.

# Copyright / License

This library is released under an MIT License. See the `LICENSE` file for further details.
