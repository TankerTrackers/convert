<?php

namespace TankerTrackers\Interfaces;

use TankerTrackers\FluidMeasures\ApiGrade;
use TankerTrackers\FluidMeasures\BarrelsPerTonne;
use TankerTrackers\FluidMeasures\Gravity;

interface LiquidInterface
{
    public function toBpt() : BarrelsPerTonne;
    public function bptValue() : float;

    public function toGravity() : Gravity;
    public function gravityValue() : float;

    public function toApi() : ApiGrade;
    public function apiValue() : float;
}
