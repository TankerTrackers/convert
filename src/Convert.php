<?php

declare(strict_types = 1);

namespace TankerTrackers;

class Convert
{
    public static function api(int|float $api) : FluidMeasures\ApiGrade
    {
        return new FluidMeasures\ApiGrade($api);
    }

    public static function bpt(int|float $bpt) : FluidMeasures\BarrelsPerTonne
    {
        return new FluidMeasures\BarrelsPerTonne($bpt);
    }

    public static function gravity(int|float $gravity) : FluidMeasures\Gravity
    {
        return new FluidMeasures\Gravity($gravity);
    }
}
