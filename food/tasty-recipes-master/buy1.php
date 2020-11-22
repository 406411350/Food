<?php
session_start();
require 'db.php';
require_once 'food.php';
require 'sql2.php';
//if(isset($_GET["id"])){
//$sql="select * from food where food_id=a";
//$stmt=$conn->prepare($sql);
//$stmt->execute();
//$rows=$stmt->fetchAll(PDO::FETCH_CLASS, 'food');
$ids=$_GET['id'];
if (empty($_SESSION['data'])){
                $ida=array($ids);
                $_SESSION['id']=$ida;
                $sql="select * from food where food_id=$ids";
                $stmt=$conn->prepare($sql);
                $stmt->execute();
                $rows=$stmt->fetchAll(PDO::FETCH_CLASS,'food');
    foreach ($rows as $v){
                $id=$v->food_id;
                $name=$v->food_name; 
                $price=$v->food_price; 
                $num=1;
    }
    $data=array(array ($id,$name,$num,$price));
    $_SESSION['data']=$data;
//}else{
  //  $data=$_SESSION['data'];
    //foreach($data as $v){
        
    //}
}else{
    $data=$_SESSION['data'];
    $ida=$_SESSION['id'];
    $chux=false;
    foreach($ida as $v){
        if($v==$_GET['id']){
            $chux=true;
        }
    }
    foreach ($ida as $v){
        echo $v;
    }
    if($chux==true){
        foreach ($data as &$s){
            if ($s[0]==$ids){
                $s[2]=$s[2]+1;
            }
        }
        unset($s);
        $_SESSION['data']=$data;
    }else{
        array_push($ida,$ids);
        $_SESSION['id']=$ida;
        $sql="select * from food where food_id=$ids";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll(PDO::FETCH_CLASS,'food');
        foreach ($rows as $v){
                $id=$v->food_id;
                $name=$v->food_name; 
                $price=$v->food_price; 
                $num=1;
    }
        array_push($data,array($id,$name,$num,$price));
        $_SESSION['data']=$data;
    }
    
}
unset($_GET['id']);
foreach ($data as $v){
    print_r($v);
}
//unset($_SESSION['id']);
//unset($_SESSION['data']);
//$data=array();
//$data[]=array('name'=>$_SESSION['pname'],'num'=>$_SESSION['pnum'],'price'=>$_SESSION['pprice']);
//$_SESSION['data']=$data;


//unset($_SESSION['id']);
//unset($_SESSION['name']);
//unset($_SESSION['price']);
//unset($_SESSION['num']);
//echo $pid;
//echo "hello world";


//if(is_array($arr))

//{


     //if(array_key_exists($pid,$arr))

     //{

  

          //$uu=$arr[$pid]; 

          //$uu["num"]=$uu["num"]+1;

          //$arr[$pid]=$uu; 

    // }

     //else

 //    {   

      //    $arr[$pid]=array("pid"=>$pid,"name"=>$name,"num"=>1);

   //  }

//}

//else

//{

//$arr[$pid]=array("pid"=>$pid,"name"=>$name,"num"=>1);

//}

//$_SESSION["mycar"]=$arr;

//echo $arr;

$referer = "cart1.php";

header("Location:$referer"); 

?>