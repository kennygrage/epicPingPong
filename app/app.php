<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/view_ping_pong", function() use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $results_array = $my_PingPongGenerator->makePingPong($_GET['number']);
        return $app['twig']->render('ping-pong-generator.html.twig', array('result' => $results_array));
    });

    return $app;

?>
