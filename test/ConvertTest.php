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
    class ConvertTest
            extends TestCase {

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::api()
         * @covers \TankerTrackers\FluidMeasures\ApiGrade
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function testConversionOfApiGradeToBarrelsPerTonne () : void
        {
            $givenInput = 32;
            $expected = new BarrelsPerTonne(7.267151143409561);

            $actual = Convert::api($givenInput)
                             ->toBpt();

            static::assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         * @covers \TankerTrackers\Convert::bpt()
         * @covers \TankerTrackers\FluidMeasures\ApiGrade
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         */
        public function testConversionOfBarrelsPerTonneToApiGrade () : void
        {
            $givenInput = 7.4;
            $expected = new ApiGrade(34.9889);

            $actual = Convert::bpt($givenInput)
                             ->toApi();

            static::assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::gravity()
         * @covers \TankerTrackers\FluidMeasures\ApiGrade
         * @covers \TankerTrackers\FluidMeasures\Gravity
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function testConversionOfGravityToApiGrade () : void
        {
            $givenInput = 0.85;
            $expected = new ApiGrade(5.882614396515323);

            $actual = Convert::gravity($givenInput)
                             ->toApi();

            static::assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::api()
         * @covers \TankerTrackers\FluidMeasures\ApiGrade
         * @covers \TankerTrackers\FluidMeasures\Gravity
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function testConversionOfApiGradeToGravity () : void
        {
            $givenInput = 40;
            $expected = new Gravity(0.8250728862973761);

            $actual = Convert::api($givenInput)
                             ->toGravity();

            static::assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         * @covers \TankerTrackers\Convert::gravity()
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         * @covers \TankerTrackers\FluidMeasures\Gravity
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */

        public function testConversionOfGravityToBarrelsPerTonne () : void
        {
            $givenInput = 0.75;
            $expected = new BarrelsPerTonne(6.106103502711506);

            $actual = Convert::gravity($givenInput)
                             ->toBpt();

            static::assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::bpt()
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         * @covers \TankerTrackers\FluidMeasures\Gravity
         * @throws \TankerTrackers\Exceptions\ValueNotNumeric
         */
        public function testConversionOfBarrelsPerTonneToGravity () : void
        {
            $givenInput = 7.25;
            $expected = new Gravity(0.8674907829104316);

            $actual = Convert::bpt($givenInput)
                             ->toGravity();

            static::assertEquals($expected, $actual);
        }

    }

}
