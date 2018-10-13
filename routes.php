<?php
/**
 * GET routes
 */
//$router->get('your_unique_id/P1_OOAPP_Opdracht', 'controllers/index.php');
//$router->get('your_unique_id/P1_OOAPP_Opdracht/home', 'controllers/index.php');
//$router->get('your_unique_id/P1_OOAPP_Opdracht/players', 'controllers/players.php');
//$router->get('your_unique_id/P1_OOAPP_Opdracht/games', 'controllers/games.php');
//$router->get('your_unique_id/P1_OOAPP_Opdracht/users', 'controllers/users.php');
//$router->get('your_unique_id/P1_OOAPP_Opdracht/battles', 'controllers/battles.php');
//$router->get('your_unique_id/P1_OOAPP_Opdracht/excercise', 'controllers/excercise.php');

$router->get('phpoopproject', 'controllers/index.php');
$router->get('phpoopproject/home', 'controllers/index.php');
$router->get('phpoopproject/players', 'controllers/players.php');
$router->get('phpoopproject/games', 'controllers/games.php');
$router->get('phpoopproject/users', 'controllers/users.php');
$router->get('phpoopproject/battles', 'controllers/battles.php');
$router->get('phpoopproject/excercise', 'controllers/excercise.php');
$router->get('phpoopproject/login', 'controllers/login.php');
$router->get('phpoopproject/delete_player', 'controllers/delete_player.php');


/**
 * POST routes
 */
$router->post('phpoopproject/home', 'controllers/add_player.php');
$router->post('phpoopproject/', 'controllers/add_player.php');
$router->post('phpoopproject/login', 'controllers/login.php');
$router->post('phpoopproject/delete_player', 'controllers/delete_player.php');
