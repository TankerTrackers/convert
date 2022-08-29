<?php

use TankerTrackers\Convert;
use TankerTrackers\FluidMeasures\ApiGrade;
use TankerTrackers\FluidMeasures\BarrelsPerTonne;
use TankerTrackers\FluidMeasures\Gravity;

it('can create an API object', function () {
    expect(Convert::api(32))->toBeInstanceOf(ApiGrade::class);
});

it('can create a BPT object', function () {
    expect(Convert::bpt(15))->toBeInstanceOf(BarrelsPerTonne::class);
});

it('can create a Gravity object', function () {
    expect(Convert::gravity(10))->toBeInstanceOf(Gravity::class);
});


