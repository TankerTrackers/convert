<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures;

class ApiGrade extends BaseLiquid
{
    public function apiValue() : float
    {
        return $this->value;
    }

    public function bptValue() : float
    {
        return $this->toBpt()->value;
    }

    public function gravityValue() : float
    {
        return $this->toGravity()->value;
    }

    public function toApi() : ApiGrade
    {
        return $this;
    }

    public function toBpt() : BarrelsPerTonne
    {
        return new BarrelsPerTonne(($this->value + 131.5) / (141.5 * 0.159));
    }

    public function toGravity() : Gravity
    {
        return new Gravity(141.5 / ($this->value + 131.5));
    }
}
