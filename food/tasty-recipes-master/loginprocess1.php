<?php

require 'bootstrap.php';

$uAccount = $_POST["account"] ?? "";
$uPassword = $_POST["password"] ?? "";

//以帳號搜尋使用者，如果帳號存在回傳該使用者資料
$user = findUserByAccount1($conn, $uAccount);

//確認 User存在以及密碼符合該帳號
if ($user && $uPassword==$user["manager_password"]/*HW--> 完成驗證登入帳號是否符合資料庫使用者 HW*/)
{
  $_SESSION["account"] = $uAccount;
  $_SESSION["name"] = $user["manager_name"];
  //if($user["role"] == 'M'){
    //$_SESSION["authority"] = 'M';
  //}
}
else
{
  $msg = 'failed';
  header("Location:mg_login.php?msg=" . $msg);
  die();
}

header("Location:mg_meal_situation.php");

?>