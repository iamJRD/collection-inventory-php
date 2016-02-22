<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Collection.php";

    $app = new Silex\Application();

    $server = 'mysql:host=localhost;dbname=collection_inventory';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=>__DIR__.'/../views'
    ));

    
?>
