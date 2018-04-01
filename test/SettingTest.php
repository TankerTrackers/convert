<?php

declare(strict_types = 1);

namespace TankerTesters {

    use PHPUnit\Framework\TestCase;
    use TankerTrackers\Convert;
    use TankerTrackers\FluidMeasures\ApiGrade;
    use TankerTrackers\FluidMeasures\BarrelsPerTonne;
    use TankerTrackers\FluidMeasures\Gravity;

    /**
     * Class Converttest
     *
     * @package TankerTrackers\Convert
     */
    class SettingTest
            extends TestCase {

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::api()
         * @covers \TankerTrackers\FluidMeasures\ApiGrade
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function testToCheckIfWeCanSetApiValue () : void
        {
            $givenInput = 30;
            $expected = new ApiGrade(30);

            $actual = Convert::api($givenInput);

            static::assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         * @covers \TankerTrackers\Convert::bpt()
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         */
        public function testToCheckIfWeCanSetBarrelsPerTonneValue () : void
        {
            $givenInput = 7;
            $expected = new BarrelsPerTonne(7);

            $actual = Convert::bpt($givenInput);

            static::assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         * @covers \TankerTrackers\Convert::gravity()
         * @covers \TankerTrackers\FluidMeasures\Gravity
         */
        public function testToCheckIfWeCanSetSpecificGravityValue () : void
        {
            $givenInput = 7;
            $expected = new Gravity(7);

            $actual = Convert::gravity($givenInput);

            static::assertEquals($expected, $actual);
        }
    }

}
