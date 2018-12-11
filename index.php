<?php
require_once('model.php');
require_once('view.php');
require_once('controller.php');

$controller = new controller();
if (isset($_POST['base']))
{
    $controller->changeBase($_POST['base']);
    unset($_POST['base']);
}

?>
