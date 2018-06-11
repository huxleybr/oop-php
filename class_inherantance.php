<?php

class Cars {

var $wheels = 4;

function greeting(){

    return "hello";

    }

function greeting2(){

    }


}

$bmw = new Cars();

class Trucks extends Cars {

    var $wheels = 10;

}

$tacoma = new Trucks();

echo $tacoma->wheels;

?>