<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures;

class Gravity extends BaseLiquid
{
    public function toBpt() : BarrelsPerTonne
    {
        return $this->toApi()->toBpt();
    }

    public function toApi() : ApiGrade
    {
        return new ApiGrade((141.5 / $this->value) - 131.5);
    }

    public function bptValue() : float
    {
        return $this->toBpt()->value;
    }

    public function toGravity() : Gravity
    {
        return $this;
    }

    public function gravityValue() : float
    {
        return $this->value;
    }

    public function apiValue() : float
    {
        return $this->toApi()->value;
    }
}
