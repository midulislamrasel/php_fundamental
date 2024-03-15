<?php

class personal{
    protected static $name = "yohoo";
    public function show(){
        echo static::$name;
    }
}

class accounts extends personal{
    protected static $name = "Baba";
}

$test = new accounts();
$test-> show();







?>