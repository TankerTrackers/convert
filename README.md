# Convert

Convert does exactly what it says on the tin - it converts things from one format or style to another format or style.

## Usage

If you were to look for the Barrels Per Tonne value for a liquid with an API of 34.12, the syntax would look like this:

`$barrelsPerTonne = TankerTrackers\Convert::api(34.12)->toBpt();`

What you'd get returned is an `TankerTrackers\FluidMeasures\BarrelsPerTonne` object that has the key `Value`, which 
contains your answer.

## Implemented

- Convert freely between:
  - API Gravity (`->toApi()`)
  - Barrels Per Tonne (`->toBpt()`)
  - Specific Gravity (`->toGravity()`)
