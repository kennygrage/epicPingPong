<?php
    class PingPongGenerator
    {
        function makePingPong($input)
        {
            if (is_numeric($input))
            {
                return true;
            } else {
                return "Please enter an integer";
            }
        }
    }
?>
