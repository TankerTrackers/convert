<?php

declare(strict_types = 1);

namespace TankerTrackers {

    /**
     * Class Convert
     *
     * @package TankerTrackers
     */
    class Convert {

        /**
         * @param $apiValue
         *
         * @return FluidMeasures\ApiGrade
         * @throws Exceptions\ValueNotNumeric
         */
        public static function api ($apiValue) : FluidMeasures\ApiGrade
        {
            return new FluidMeasures\ApiGrade($apiValue);
        }

        /**
         * @param $bptValue
         *
         * @return FluidMeasures\BarrelsPerTonne
         * @throws Exceptions\ValueNotNumeric
         */
        public static function bpt ($bptValue) : FluidMeasures\BarrelsPerTonne
        {
            return new FluidMeasures\BarrelsPerTonne($bptValue);
        }

        /**
         * @param $gravValue
         *
         * @return FluidMeasures\Gravity
         * @throws Exceptions\ValueNotNumeric
         */
        public static function gravity ($gravValue) : FluidMeasures\Gravity
        {
            return new FluidMeasures\Gravity($gravValue);
        }
    }
}
