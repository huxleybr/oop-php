<?php

class Cars {

function greeting(){

}

function greeting2(){

}


}


$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method){
echo $method . "<br>";
}

//$my_classes = get_declared_classes();
//foreach ($my_classes as $class) {
//echo $class . "<br>";
//}

?>