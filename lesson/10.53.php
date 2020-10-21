<?php
date_default_timezone_set('Asia/Tokyo');
$date=date("G");
if($date<12){
    print "おはようございます。";
}else if($date<18){
    print "こんにちは。";
}else{
    print "こんばんは。";
}
?>
