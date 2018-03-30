<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures {

    use TankerTrackers\Convert;

    /**
     * Class BarrelsPerTonne
     *
     * @property array $from
     * @package TankerTrackers
     */
    class BarrelsPerTonne {

        /**
         * BarrelsPerTonne constructor.
         *
         * @param $value
         */
        public const VALUE = 'value';

        /**
         * BarrelsPerTonne constructor.
         *
         * @param $value
         */
        public function __construct ($value)
        {
            $this->from = [
                    self::VALUE => $value
            ];
        }

        /**
         * @return Gravity
         */
        public function toGravity ()
        : Gravity
        {
            $api = $this->toApi()->from[self::VALUE];

            return Convert::api($api)
                          ->toGravity();
        }

        /**
         * @return ApiGrade
         */
        public function toApi ()
        : ApiGrade
        {
            return new ApiGrade($this->from[self::VALUE] ? ($this->from[self::VALUE] * (141.5 * 0.159)) - 131.5 : null);
        }
    }
}
