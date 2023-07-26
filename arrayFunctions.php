<?php
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

$map_dizi = array_map(function ($e){
    global $planets;
    if($e == ""){
        return NULL;}
     else{
         return $e;}
     }, $planets);
 $filter_dizi = array_filter($map_dizi, function($e){
     return $e != NULL ? $e : false;
 });

 function randomArr($i){
    global $filter_dizi;
    $result = array_flip($filter_dizi);
    return array_rand($result, $i);
}

print_r(randomArr(2));
print_r(randomArr(3));
print_r(randomArr(2));
print_r(randomArr(4));
print_r(randomArr(5));

?>