<?php

use TankerTrackers\Convert;
use TankerTrackers\FluidMeasures\ApiGrade;
use TankerTrackers\FluidMeasures\BarrelsPerTonne;
use TankerTrackers\FluidMeasures\Gravity;

// API => BPT
it('can convert an API object to BPT', function () {
    expect(Convert::api(29)->toBpt())
        ->toBeInstanceOf(BarrelsPerTonne::class)
        ->toHaveProperty('value');
});

it('correctly calculates BPT from API', function () {
    expect(Convert::api(35.93)->toBpt()->value)
        ->toBeFloat()
        ->toEqualWithDelta(7.441829455297, 0.000001);
});

it('can get the BPT value directly from API', function () {
    expect(Convert::api(23.93)->bptValue())
        ->toBeFloat()
        ->toEqualWithDelta(6.9084605640376, 0.000001);
});

// API => Gravity
it('can convert an API object to Gravity', function () {
    expect(Convert::api(24)->toGravity())
        ->toBeInstanceOf(Gravity::class)
        ->toHaveProperty('value');
});

it('correctly calculates Gravity from API', function () {
    expect(Convert::api(10)->toGravity()->value)
        ->toBeFloat()
        ->toBe(1.0);
});

it('can get the Gravity value directly from API', function () {
    expect(Convert::api(10)->gravityValue())
        ->toBeFloat()
        ->toBe(1.0);
});

// API => API
it('can convert an API object to itself', function () {
    expect(Convert::api(24)->toApi())
        ->toBeInstanceOf(ApiGrade::class)
        ->toHaveProperty('value');
});

it('correctly calculates API from itself', function () {
    expect(Convert::api(12.34)->toApi()->value)
        ->toBeFloat()
        ->toBe(12.34);
});

it('can get the API value directly from itself', function () {
    expect(Convert::api(9.8765)->apiValue())
        ->toBeFloat()
        ->toBe(9.8765);
});
