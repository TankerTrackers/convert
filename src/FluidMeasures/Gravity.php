<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures {

    /**
     * Class Gravity
     *
     * @package TankerTrackers\Convert
     * @since   v0.5.0
     * @author  Breki Tomasson <breki.tomasson@gmail.com>
     */
    class Gravity
            extends BaseLiquid {

        /**
         * @return BarrelsPerTonne
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function toBpt () : BarrelsPerTonne
        {
            return $this->toApi()
                        ->toBpt();
        }

        /**
         * @return ApiGrade
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function toApi () : ApiGrade
        {
            return new ApiGrade($this->value ? ($this->value + 131.5) / (141.5 * 0.159) : null);
        }
    }
}
