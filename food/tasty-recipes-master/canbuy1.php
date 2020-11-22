<?php
session_start();
require 'db.php';
require_once 'food.php';
require 'sql2.php';
$sql="select * from food";
$stmt=$conn->prepare($sql);
$stmt->execute();
$rows=$stmt->fetchAll(PDO::FETCH_CLASS,'food');
$cb=array();
$cantb=array();
foreach ($rows as $v){
         $id=$v->food_id;
         $name=$v->food_name; 
         $canbuy=$v->canbuy;
         array_push($cb,array($id,$name,$canbuy));
    }

foreach ($cb as $s){
    if ($s[2]==0){
        array_push($cantb,$s[0]);
    }
}
foreach ($cantb as $v){
    print_r($v);
}
$_SESSION['cb']=$cantb;
header("Location:心園menu.php"); 
?>