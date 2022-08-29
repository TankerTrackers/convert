<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures;

class Gravity extends BaseLiquid
{
    public function apiValue() : float
    {
        return $this->toApi()->value;
    }

    public function bptValue() : float
    {
        return $this->toBpt()->value;
    }

    public function gravityValue() : float
    {
        return $this->value;
    }

    public function toApi() : ApiGrade
    {
        return new ApiGrade((141.5 / $this->value) - 131.5);
    }

    public function toBpt() : BarrelsPerTonne
    {
        return $this->toApi()->toBpt();
    }

    public function toGravity() : Gravity
    {
        return $this;
    }
}
