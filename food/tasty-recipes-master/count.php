<?php
session_start();
$data=$_SESSION['data'];
$ida=$_SESSION['id'];
$dc=array();
$dc1=array();
$cc=0;
$c1=0;
foreach ($data as &$v){
    if($v[0]==$_GET['c']){
        if($v[2]==1){
            unset($data);
            $cc=$cc+1;
            foreach($ida as $s){
    if($s==$_GET['c']){
        unset($ida);
        $c1=$c1+1;
    }else{
        array_push($dc1,$s);
    }
}
if ($c1==1){
    $ida=$dc1;
}
unset($dc1);
        }else{
            $v[2]=$v[2]-1;
        }
    }else{
        array_push($dc,array($v[0],$v[1],$v[2],$v[3]));
    }
}
unset($v);
if  ($cc==1){
    $data=$dc;
}
unset($dc);
foreach ($ida as $v){
    print_r($v);
}
$_SESSION['id']=$ida;
$_SESSION['data']=$data;
header("Location:cart.php"); 
?>