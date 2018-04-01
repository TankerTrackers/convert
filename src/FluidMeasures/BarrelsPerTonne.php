<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures {

    /**
     * Class BarrelsPerTonne
     *
     * @package TankerTrackers\Convert
     * @since   v0.5.0
     * @author  Breki Tomasson <breki.tomasson@gmail.com>
     */
    class BarrelsPerTonne
            extends BaseLiquid {

        /**
         * @return Gravity
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function toGravity () : Gravity
        {
            return $this->toApi()
                        ->toGravity();
        }

        /**
         * @return ApiGrade
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function toApi () : ApiGrade
        {
            return new ApiGrade($this->value ? ($this->value * (141.5 * 0.159)) - 131.5 : null);
        }
    }
}
