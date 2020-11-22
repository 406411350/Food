<?php
 
require 'db.php';
require 'customer_sql.php';
require 'customers.php';

if (!empty($_POST)) {

    $ucustomer_name= $_POST["customer_name"] ?? "";
    $ucustomer_account= $_POST["customer_account"] ?? "";
    $ucustomer_password = $_POST["customer_password"] ?? "";
	$ucustomer_phone = $_POST["customer_phone"] ?? "";
    $ucustomer_cardnumber = $_POST["customer_cardnumber"] ?? "";


    $query = $conn->prepare('SELECT * FROM `customer` WHERE `customer_account`=:customer_account');
    $query->execute(['customer_account' => $ucustomer_account]);

    $customer = $query->fetch();
    if($customer){
        $msg = 'ucustomer_account_existed';
        header("Location:register.php?customerExisted=" . $msg);
        die();
    } else {
        $sql="insert into `customer` (customer_name, customer_account, customer_password, customer_phone, customer_cardnumber) values (:customer_name, :customer_account, :customer_password, :customer_phone, :customer_cardnumber)";
        $stmt = $conn->prepare($sql);
        var_dump($_POST);
        $customers = new customers($_POST);
        $customerArray= $customers->toArrayInsert();
        $stmt->execute($customerArray);
        $conn = null;
        $addResult = '1';
        
        header("Location:register.php?addCustomer=".$addResult);
        die();
    }

header("Location:register.php");
}
?>