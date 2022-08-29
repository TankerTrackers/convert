<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures;

class BarrelsPerTonne extends BaseLiquid
{
    public function toGravity() : Gravity
    {
        return $this->toApi()->toGravity();
    }

    public function toApi() : ApiGrade
    {
        return new ApiGrade($this->value * (141.5 * 0.159) - 131.5);
    }

    public function toBpt() : BarrelsPerTonne
    {
        return $this;
    }

    public function bptValue() : float
    {
        return $this->value;
    }

    public function gravityValue() : float
    {
        return $this->toGravity()->value;
    }

    public function apiValue() : float
    {
        return $this->toApi()->value;
    }
}
