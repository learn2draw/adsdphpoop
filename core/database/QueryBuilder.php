<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

class QueryBuilder
{

    protected $pdo;

    public function __construct()
    {
        $app = require 'config.php';
        $this->pdo = new PDO($app['database']['connection'] . ";dbname=" . $app['database']['name'] ,
            $app['database']['username'] , $app['database']['password']);
        $this->pdo->setAttribute($app['database']['option1'],$app['database']['option2']);
        //var_dump($this->pdo);
    }

    public function selectAll($table, $intoClass)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define class for output
         */
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }

    function uniqidReal() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,

            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }








}
