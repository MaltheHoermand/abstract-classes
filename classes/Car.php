<?php
require_once "Vehicle.php";
class Car extends Vehicle {

    /**
     * @return String
     */
    function get_name()
    {
        return $this->name;
    }
}