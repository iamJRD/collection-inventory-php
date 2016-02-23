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

    }
?>
