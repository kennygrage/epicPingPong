<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/view_ping_pong", function() use($app) {
        //$my_PingPongGenerator = new PingPongGenerator;
        $output_array = array();
        $result_number = $_GET['number'];
        $counter = 1;
        while ($counter <= $result_number) {
            $number = new PingPongGenerator;
            $number = $number->makePingPong($counter);
            array_push($output_array, $number);
            ++$counter;
        }
        return $app['twig']->render('ping-pong-generator.html.twig', array('result' => $output_array));
    });

    return $app;

?>
