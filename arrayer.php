<?php

$cars = array("Volvo", "BMW", "Toyota");

//eller nedanstående

$cars = array();

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

echo "<p>I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "</p>";

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

//eller nedanstående

$age = array();

$age['Peter'] = 35;
$age['Ben'] = 37;
$age['Joe'] = 43;

echo "<p>Peter is " . $age['Peter'] . " years old.</p>";




?>