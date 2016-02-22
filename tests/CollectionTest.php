<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once 'src/Collection.php';

    $server = 'mysql:host=localhost;dbname=collection_inventory';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class CollectionTest extends PHPUnit_Framework_TestCase
    {
        
    }
?>
