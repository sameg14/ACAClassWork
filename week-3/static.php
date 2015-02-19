<?php


class DatabaseLayer
{
    public $dbType;

    public static $shouldCache = false;

    public function __construct($dbType)
    {
        $this->dbType = $dbType;
    }

    public function areWePullingFromCache()
    {
        if (self::$shouldCache == true) {

            echo 'Yeah '.$this->dbType.' is being cached'.'<br/>';

        }else{

            echo 'No '.$this->dbType.' is not being cached'.'<br/>';
        }
    }
}


DatabaseLayer::$shouldCache = true;
$mongoDb = new DatabaseLayer('mongoDB');
$mongoDb->areWePullingFromCache();

DatabaseLayer::$shouldCache = false;
$mySQL = new DatabaseLayer('MySQL');
$mySQL->areWePullingFromCache();

DatabaseLayer::$shouldCache = true;
$redis = new DatabaseLayer('redis');
$redis->areWePullingFromCache();

$redis2 = new DatabaseLayer('redis2');
$redis2->areWePullingFromCache();

$redis3 = new DatabaseLayer('redis3');
$redis3->areWePullingFromCache();