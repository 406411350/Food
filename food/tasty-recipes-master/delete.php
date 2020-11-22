<?php
session_start();
$data=$_SESSION['data'];
$ida=$_SESSION['id'];
$dc=array();
$dc1=array();
$c=0;
$c1=0;
foreach($data as &$v){
    if($v[0]==$_GET['de']){
        unset($data);
        $c=$c+1;
    }else{
        array_push($dc,array($v[0],$v[1],$v[2],$v[3]));
    }
}
unset($v);
if  ($c==1){
    $data=$dc;
}
unset($dc);
foreach($ida as $v){
    if($v==$_GET['de']){
        unset($ida);
        $c1=$c1+1;
    }else{
        array_push($dc1,$v);
    }
}
if ($c1==1){
    $ida=$dc1;
}
unset($dc1);
$_SESSION['id']=$ida;
$_SESSION['data']=$data;
header("Location:cart.php"); 
?>