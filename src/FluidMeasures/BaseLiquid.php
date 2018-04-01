<?php

declare(strict_types = 1);

/**
 * @package TankerTrackers\Convert
 * @since   v0.6.0
 */

namespace TankerTrackers\FluidMeasures {

    use TankerTrackers\Exceptions\ValueNotNumeric;
    use function is_numeric;

    /**
     * Class BaseLiquid
     *
     * @package TankerTrackers\Convert
     */
    abstract class BaseLiquid {

        public $value;

        /**
         * Abstract Liquid constructor.
         *
         * @param $value
         *
         * @throws ValueNotNumeric
         */
        public function __construct ($value = null)
        {
            $this->value = $value;

            if ($this->value === null) {
                throw new ValueNotNumeric('Value entered is null');
            }

            if ( ! is_numeric($this->value)) {
                throw new ValueNotNumeric('Value entered needs to be numeric.');
            }
        }

    }

}
