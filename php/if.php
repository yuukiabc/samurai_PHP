<?php
$even_num array();
$odd_num array();

function sort_number($num){
    
global $even_num,$odd_num;

if($num%2==0){
    array_push($even_num,$num);
}else{
    array_push($odd_num,$num);
}
}
?>