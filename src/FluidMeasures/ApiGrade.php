<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures {

    /**
     * Class ApiGrade
     *
     * @package TankerTrackers\Convert
     * @since   v0.5.0
     * @author  Breki Tomasson <breki.tomasson@gmail.com>
     */
    class ApiGrade
            extends BaseLiquid {

        /**
         * @return BarrelsPerTonne
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function toBpt () : BarrelsPerTonne
        {
            return new BarrelsPerTonne($this->value ? ($this->value + 131.5) / (141.5 * 0.159) : null);
        }

        /**
         * @return Gravity
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function toGravity () : Gravity
        {
            return new Gravity($this->value ? (141.5 / ($this->value + 131.5)) : null);
        }
    }
}
