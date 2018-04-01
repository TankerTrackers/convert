<?php

declare(strict_types = 1);

namespace TankerTesters {

    use PHPUnit\Framework\TestCase;
    use TankerTrackers\Exceptions\ValueNotNumeric;
    use TankerTrackers\FluidMeasures\ApiGrade;
    use TankerTrackers\FluidMeasures\BarrelsPerTonne;

    /**
     * Class ExceptionTest
     *
     * @package TankerTesters\Exceptions
     * @since   v0.6.0
     */
    class ExceptionTest
            extends TestCase {

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testGetLine () : void
        {
            try {
                new BarrelsPerTonne(null);
            } catch (ValueNotNumeric $exception) {
                static::assertInternalType('numeric', $exception->getLine());
            }
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function test__toString () : void
        {
            try {
                new ApiGrade('Herpyderp');
            } catch (ValueNotNumeric $exception) {
                static::assertStringStartsWith('TankerTrackers\Exceptions\ValueNotNumeric: Value entered needs to be numeric.',
                                               (string) $exception);
            }
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testGetCode () : void
        {
            try {
                new ApiGrade('Herpyderp');
            } catch (ValueNotNumeric $exception) {
                static::assertEquals($exception->getCode(), 0);
            }

        }
    }
}
