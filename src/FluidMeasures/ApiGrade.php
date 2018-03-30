<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures {

    /**
     * Class ApiGrade
     *
     * @property array $from
     * @package TankerTrackers
     */
    class ApiGrade {

        public const VALUE = 'value';

        /**
         * ApiGrade constructor.
         *
         * @param $value
         */
        public function __construct ($value = null)
        {
            $this->from = [self::VALUE => $value];
        }

        /** @return BarrelsPerTonne */
        public function toBpt ()
        : BarrelsPerTonne
        {
            return new BarrelsPerTonne($this->from[self::VALUE] ? ($this->from[self::VALUE] + 131.5) / (141.5 * 0.159)
                                               : null);
        }

        /** @return Gravity */
        public function toGravity ()
        : Gravity
        {
            return new Gravity($this->from[self::VALUE] ? (141.5 / ($this->from[self::VALUE] + 131.5)) : null);
        }
    }
}
