<?php
    require_once __DIR__."/../src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_forNumber()
        {
            //arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = "z";

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals("Please enter an integer", $result);
        }

        //test for an integer
        function test_forInteger()
        {
            //arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2.23;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals(2, $result);
        }

        //test if divisible by 3
        function test_forDivisibleByThree()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 6;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals("ping", $result);
        }

        //test if divisible by 5
        function test_forDivisibleByFive()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 10;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals("pong", $result);
        }

        //test if divisible by both 5 and 3
        function test_forDivisibleByThreeFive()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $this->assertEquals("ping-pong", $result);
        }
    }
?>
