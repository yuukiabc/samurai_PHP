# restaurants_searcher.php

<?php
function write_date_to_csv(){
$restaurants = [];
$response = "hugahuga";

if(isset($response["error"])){
    return print("エラーが発生しました！");
}

if(isset($response["rest"])){
    foreach($response["rest"]as&$i){
        $restaurant_name=$i["name"];
        $restaurants[]=$restaurant_name;
    }
}
return print_r($restaurants);
}


write_date_to_csv();
?>

