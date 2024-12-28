<?php 
require_once __DIR__ '/lib/routes.php';
$router = new Router();
$router->add('GET', '/', function() { 
echo 'Hellow World';
});

$router->run();

?>
