<?php
session_start();
require './vendor/autoload.php';
//$test = new \App\Fram\Factories\PDOFactory();
//$test->getMysqlConnection();


$router = new \App\Fram\Router();
$router->getController();
