<?php

class Cars {

    public $wheel_count = 4;
    Private $door_count = 4;
    Protected $seat_count = 2;

function car_detail(){

   echo $this->wheel_count;
   echo $this->door_count;
   echo $this->seat_count;

    }

}

$bmw = new Cars();

$bmw->car_detail();


?>