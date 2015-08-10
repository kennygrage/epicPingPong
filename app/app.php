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
        $output_array = array();
        for ($i = 1; $i <= $_GET['number']; $i++) {
            $number = new PingPongGenerator;
            array_push($output_array, $number->makePingPong($i));
        }

        return $app['twig']->render('ping-pong-generator.html.twig', array('result' => $output_array));
    });

    return $app;

?>
