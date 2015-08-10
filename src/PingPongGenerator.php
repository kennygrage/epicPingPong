<?php
    class PingPongGenerator
    {
        function makePingPong($input)
        {
            if (is_numeric($input))
            {
                $input = round($input);
                if (($input % 3 == 0) && ($input % 5 == 0)) {
                    return "ping-pong";
                }
                if ($input % 3 == 0) {
                    return "ping";
                }
                if ($input % 5 == 0) {
                    return "pong";
                }



                return $input;
            } else {
                return "Please enter an integer";
            }
        }
    }
?>
