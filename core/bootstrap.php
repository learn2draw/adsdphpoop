<?php
/** @var  $app empty variable to store config file */
/**
 *Require several classes
 */
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/database/UserQueryBuilder.php';

/**
 * Get database connection
 */
// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );

if (session_status() == PHP_SESSION_NONE){
    session_start();
}