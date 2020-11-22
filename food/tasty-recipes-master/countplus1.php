<?php
session_start();
$data=$_SESSION['data'];
foreach ($data as &$v){
    if($v[0]==$_GET['c']){
        $v[2]=$v[2]+1;
    }
}
unset($v);
$_SESSION['data']=$data;
header("Location:cart1.php"); 
?>