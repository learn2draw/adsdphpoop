<?php
/**
 * get class
 * @Player
 * @Users
 */
require 'core/Player.php';
require 'core/Users.php';

/**
 * @var $results database query for landing page
 */
$USQ = new UserQueryBuilder();
$resultsUsers = $USQ->SelectAllUsers();



/**
 * @internal view index.php
 */
require 'views/index.view.php';