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
        // function test_forInteger()
        // {
        //     //arrange
        //     $test_PingPongGenerator = new PingPongGenerator;
        //     $input = 1.23;
        //
        //     //Act
        //     $result = $test_PingPongGenerator->makePingPong($input);
        //
        //     //Assert
        //     $this->assertEquals(1, $result);
        // }

        //test if divisible by 3

        //test if divisible by 5

        //test if divisible by both 5 and 3
    }
?>
