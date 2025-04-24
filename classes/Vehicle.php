<?php

abstract class Vehicle{
    /**
     * @var String $name
     */
    public $name;

    /**
     * @param $name
     * @return void
     */
    public function set_name($name){
        $this->name = $name;
    }


    abstract function get_name();
}