<?php
/**
 * Created by PhpStorm.
 * User: mha
 * Date: 11/03/19
 * Time: 21:02
 */
$array = [
     "Last",
     "first",
     "second",
    "Three"
];
list(,$val) = $array;
print "La valeur est $val \n";

$arr = array(3 => “First”, 2=>“Second“, 1=>“Third“);
list (, $result) = $arr;
print "la valeur est $result ";

