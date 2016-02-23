<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once 'src/Collection.php';

    $server = 'mysql:host=localhost;dbname=collection';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class CollectionTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Collection::deleteAll();
        }

        function test_save()
        {
            $name = 'Santa Pez Dispenser';
            $description = 'Red and white Santa from 1990';
            $quantity = 1;
            $test_collection = new Collection($name, $description, $quantity);

            $test_collection->save();

            $result = Collection::getAll();
            $this->assertEquals($test_collection, $result[0]);
        }

        function test_getAll()
        {
            $name = 'Santa Pez Dispenser';
            $description = 'Red and white Santa from 1990';
            $quantity = 1;
            $name2 = 'Elf Pez Dispenser';
            $description2 = 'Green and white Elf from 2001';
            $quantity2 = 1;
            $test_collection = new Collection($name, $description, $quantity);
            $test_collection->save();
            $test_collection2 = new Collection($name2, $description2, $quantity2);
            $test_collection2->save();

            $result = Collection::getAll();

            $this->assertEquals([$test_collection, $test_collection2], $result);
        }
    }
?>
