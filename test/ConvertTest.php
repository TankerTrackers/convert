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
         */
        public function testConversionOfApiGradeToBarrelsPerTonne ()
        {
            $givenInput = 32;
            $expected = new BarrelsPerTonne(7.267151143409561);

            $actual = Convert::api($givenInput)
                             ->toBpt();

            $this->assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::bpt()
         * @covers \TankerTrackers\FluidMeasures\ApiGrade
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         */
        public function testConversionOfBarrelsPerTonneToApiGrade ()
        {
            $givenInput = 7.4;
            $expected = new ApiGrade(34.9889);

            $actual = Convert::bpt($givenInput)
                             ->toApi();

            $this->assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::gravity()
         * @covers \TankerTrackers\FluidMeasures\ApiGrade
         * @covers \TankerTrackers\FluidMeasures\Gravity
         */
        public function testConversionOfGravityToApiGrade ()
        {
            $givenInput = 0.85;
            $expected = new ApiGrade(5.882614396515323);

            $actual = Convert::gravity($givenInput)
                             ->toApi();

            $this->assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::api()
         * @covers \TankerTrackers\FluidMeasures\ApiGrade
         * @covers \TankerTrackers\FluidMeasures\Gravity
         */
        public function testConversionOfApiGradeToGravity ()
        {
            $givenInput = 40;
            $expected = new Gravity(0.8250728862973761);

            $actual = Convert::api($givenInput)
                             ->toGravity();

            $this->assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::gravity()
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         * @covers \TankerTrackers\FluidMeasures\Gravity
         */

        public function testConversionOfGravityToBarrelsPerTonne ()
        {
            $givenInput = 0.75;
            $expected = new BarrelsPerTonne(6.106103502711506);

            $actual = Convert::gravity($givenInput)
                             ->toBpt();

            $this->assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::bpt()
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         * @covers \TankerTrackers\FluidMeasures\Gravity
         */
        public function testConversionOfBarrelsPerTonneToGravity ()
        {
            $givenInput = 7.25;
            $expected = new Gravity(0.8674907829104316);

            $actual = Convert::bpt($givenInput)
                             ->toGravity();

            $this->assertEquals($expected, $actual);
        }

    }

}
