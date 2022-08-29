<?php

use TankerTrackers\Convert;
use TankerTrackers\FluidMeasures\ApiGrade;
use TankerTrackers\FluidMeasures\BarrelsPerTonne;
use TankerTrackers\FluidMeasures\Gravity;

// BPT => API
it('can convert an BPT object to API', function () {
    expect(Convert::bpt(4.17)->toApi())
        ->toBeInstanceOf(ApiGrade::class)
        ->toHaveProperty('value');
});

it('correctly calculates API from BPT', function () {
    expect(Convert::bpt(6.69)->toApi()->value)
        ->toBeFloat()
        ->toEqualWithDelta(19.014965, 0.000001);
});

it('can get the API value directly from BPT', function () {
    expect(Convert::bpt(7.33)->apiValue())
        ->toBeFloat()
        ->toEqualWithDelta(33.414005, 0.000001);
});

// BPT => Gravity
it('can convert an BPT object to Gravity', function () {
    expect(Convert::bpt(6.44)->toGravity())
        ->toBeInstanceOf(Gravity::class)
        ->toHaveProperty('value');
});

it('correctly calculates Gravity from BPT', function () {
    expect(Convert::bpt(6.44)->toGravity()->value)
        ->toBeFloat()
        ->toEqualWithDelta(0.97660064846283, 0.000001);
});

it('can get the Gravity value directly from BPT', function () {
    expect(Convert::bpt(7.12)->gravityValue())
        ->toBeFloat()
        ->toEqualWithDelta(0.88332980001413, 0.000001);
});

// BPT => BPT
it('can convert a BPT object to itself', function () {
    expect(Convert::bpt(7.27)->toBpt())
        ->toBeInstanceOf(BarrelsPerTonne::class)
        ->toHaveProperty('value');
});

it('correctly calculates BPT from itself', function () {
    expect(Convert::bpt(7.31)->toBpt()->value)
        ->toBeFloat()
        ->toBe(7.31);
});

it('can get the BPT value directly from itself', function () {
    expect(Convert::bpt(7.20)->bptValue())
        ->toBeFloat()
        ->toBe(7.2);
});
