<?php
$app->get('/', function() {

    require '../src/model.php';
    $sejours = getSejours();

    ob_start();                 // start buffering HTML output
    require '../views/vue.php';
    $view = ob_get_clean();      // assign HTML output to $view
    return $view;
});
