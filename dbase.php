<?php
//データを格納する
 $alleq = $db->collection("all_eq");

   $alleq->doc("NO1")->set({
   "name"=>"zon",
   "num"=> "1",
   "eqimg"=> "iiih",
   "field" => "A.1"

 })


//格納したデータを取得する　　　連想配列
$No1 = $db->collection("all_eq")->doc("NO1");



 ?>
