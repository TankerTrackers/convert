<?php

declare(strict_types = 1);

namespace TankerTrackers\FluidMeasures {

    use TankerTrackers\Convert;

    /**
     * Class Gravity
     *
     * @property array $from
     * @package TankerTrackers
     */
    class Gravity {

        public const VALUE = 'value';

        /**
         * Gravity constructor.
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
         * @return BarrelsPerTonne
         */
        public function toBpt ()
        : BarrelsPerTonne
        {
            $api = $this->toApi();

            return Convert::api($api->from[self::VALUE])
                          ->toBpt();
        }

        /**
         * @return ApiGrade
         */
        public function toApi ()
        : ApiGrade
        {
            return new ApiGrade($this->from[self::VALUE] ? ($this->from[self::VALUE] + 131.5) / (141.5 * 0.159) : null);
        }
    }
}
