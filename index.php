<?php
class Car{
    Public $name = "BMW";
    Public $model = "r15";
    Public $color = "black";

    function carname($bname){
        return $this->name =$bname;
        return $this->model =$bmodel;
    }
}
$honda = new Car();
echo $honda -> carname("Name: yamaha")."<br>";
echo $honda -> carname("Model: 400")."<br>";


?>