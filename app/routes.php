<?php

use stpaul\SejourDAO;

    $app->get('/', function() use ($app) {
        require '../src/Connection.php';

        $connection = new Connection();

        //$sejours = $model->getAllSejours();

        $sejourDAO = new SejourDAO($connection->getBdd());
        $sejours = $sejourDAO->findAll();


        return $app['twig']->render('index.html.twig', array('sejours' => $sejours));

    });
