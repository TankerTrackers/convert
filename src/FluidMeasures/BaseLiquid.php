<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures;

use TankerTrackers\Interfaces\LiquidInterface;

abstract class BaseLiquid implements LiquidInterface
{

    public function __construct(public float $value)
    {
        // Promoted properties, nothing else to do here.
    }

    public function __serialize() : array
    {
        return ['value' => $this->value];
    }

}

