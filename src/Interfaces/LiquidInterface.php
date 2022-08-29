<?php

declare(strict_types = 1);

namespace TankerTrackers\Interfaces;

use TankerTrackers\FluidMeasures\ApiGrade;
use TankerTrackers\FluidMeasures\BarrelsPerTonne;
use TankerTrackers\FluidMeasures\Gravity;

interface LiquidInterface
{
    public function apiValue() : float;

    public function bptValue() : float;

    public function gravityValue() : float;

    public function toApi() : ApiGrade;

    public function toBpt() : BarrelsPerTonne;

    public function toGravity() : Gravity;
}
