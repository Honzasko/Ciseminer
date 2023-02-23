<?php
include 'app/router.php';

//set up and start router
$controllerManager = new Router();
$controllerManager->register_error("error");
$controllerManager->register("/","home");
$controllerManager->register("group","group");
$controllerManager->register("exercise","exercise");
$controllerManager->default = "/";
$controllerManager->execute();

?>