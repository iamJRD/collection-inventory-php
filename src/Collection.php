<?php
    class Collection
    {
        private $name;
        private $description;
        private $quantity;
        private $id;

        function __construct($name, $description, $quantity, $id = null)
        {
            $this->name = $name;
            $this->description = $description;
            $this->quantity = $quantity;
            $this->id = $id;
        }
// SETTERS
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function setDescription($new_description)
        {
            $this->description = (string) $new_description;
        }

        function setQuantity($new_quantity)
        {
            $this->quantity = (int) $new_quantity;
        }
// GETTERS
        function getName()
        {
            return $this->name;
        }

        function getDescription()
        {
            return $this->description;
        }

        function getQuantity()
        {
            return $this->quantity;
        }

        function getId()
        {
            return $this->id;
        }
// FUNCTIONS
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO collections (name, description, quantity) VALUES ('{$this->getName()}, {$this->getDescription()}, {$this->getQuantity()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll()
        {
            $returned_collections = $GLOBALS['DB']->query("SELECT * FROM collections;");
            $collections = array();
            foreach($returned_collections as $collection) {
                $name = $collection['name'];
                $description = $collection['description'];
                $quantity = $collection['quantity'];
                $id = $collection['id'];
                $new_collection = new Collection($name, $description, $quantity, $id);
                array_push($collections, $new_collection);
            }
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM collections");
        }

    }
?>
