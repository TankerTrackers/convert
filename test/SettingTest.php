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
         */
        public function testToCheckIfWeCanSetApiValue ()
        {
            $givenInput = 30;
            $expected = new ApiGrade(30);

            $actual = Convert::api($givenInput);

            $this->assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::bpt()
         * @covers \TankerTrackers\FluidMeasures\BarrelsPerTonne
         */
        public function testToCheckIfWeCanSetBarrelsPerTonneValue ()
        {
            $givenInput = 7;
            $expected = new BarrelsPerTonne(7);

            $actual = Convert::bpt($givenInput);

            $this->assertEquals($expected, $actual);
        }

        /**
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @covers \TankerTrackers\Convert::gravity()
         * @covers \TankerTrackers\FluidMeasures\Gravity
         */
        public function testToCheckIfWeCanSetSpecificGravityValue ()
        {
            $givenInput = 7;
            $expected = new Gravity(7);

            $actual = Convert::gravity($givenInput);

            $this->assertEquals($expected, $actual);
        }
    }

}
