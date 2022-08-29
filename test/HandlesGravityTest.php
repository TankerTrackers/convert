<?php

use TankerTrackers\Convert;
use TankerTrackers\FluidMeasures\ApiGrade;
use TankerTrackers\FluidMeasures\BarrelsPerTonne;
use TankerTrackers\FluidMeasures\Gravity;

// Gravity => API
it('can convert a Gravity object to API', function () {
    expect(Convert::gravity(1)->toApi())
        ->toBeInstanceOf(ApiGrade::class)
        ->toHaveProperty('value');
});

it('correctly calculates API from Gravity', function () {
    expect(Convert::gravity(0.911)->toApi()->value)
        ->toBeFloat()
        ->toEqualWithDelta(23.823819978046, 0.000001);
});

it('can get the API value directly from Gravity', function () {
    expect(Convert::gravity(0.718)->apiValue())
        ->toBeFloat()
        ->toEqualWithDelta(65.575208913649, 0.000001);
});

// Gravity => BPT
it('can convert an Gravity object to BPT', function () {
    expect(Convert::gravity(9.91)->toBpt())
        ->toBeInstanceOf(BarrelsPerTonne::class)
        ->toHaveProperty('value');
});

it('correctly calculates BPT from Gravity', function () {
    expect(Convert::gravity(0.97655)->toBpt()->value)
        ->toBeFloat()
        ->toEqualWithDelta(6.4403340086024, 0.000001);
});

it('can get the BPT value directly from Gravity', function () {
    expect(Convert::gravity(9.9998)->bptValue())
        ->toBeFloat()
        ->toEqualWithDelta(0.62894339647799, 0.000001);
});

// Gravity => Gravity
it('can convert a Gravity object to itself', function () {
    expect(Convert::gravity(1)->toGravity())
        ->toBeInstanceOf(Gravity::class)
        ->toHaveProperty('value');
});

it('correctly calculates BPT from itself', function () {
    expect(Convert::gravity(1.012)->toGravity()->value)
        ->toBeFloat()
        ->toBe(1.012);
});

it('can get the BPT value directly from itself', function () {
    expect(Convert::gravity(9.770)->gravityValue())
        ->toBeFloat()
        ->toBe(9.77);
});
