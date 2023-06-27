<?php

// string
echo gettype("isso é uma string");
// integers
echo gettype(123);
// floats(double)
echo gettype(1.23);
// bools
echo gettype(true);
// arrays
echo gettype([1, 2, 3, 4, 5]);
// objects
class Person{public function teste(){}};
echo gettype(new Person);
// null
echo gettype(null);

$name = "Eric";
$num = 20;
$height = 1.76;
