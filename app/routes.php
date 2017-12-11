<?php

    $app->get('/', function() use ($app) {
        require '../src/Connection.php';
        require '../src/stpaul/Sejour.php';
        require '../src/stpaul/SejourDAO.php';

        $connection = new Connection();

        //$sejours = $model->getAllSejours();

        $sejourDAO = new SejourDAO($connection->getBdd());
        $sejours = $sejourDAO->findAll();


        return $app['twig']->render('index.html.twig', array('sejours' => $sejours));

    });
