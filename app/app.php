<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    session_start();

    if (empty($_SESSION['list_of_words'])) {
        $_SESSION['list_of_words'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use($app) {
        return $app['twig']->render('input.html.twig', array('words' => Scrabble::getAll()));
    });

    $app->post("/run", function() use($app) {
        $input = $_POST['word'];    
    })
?>
