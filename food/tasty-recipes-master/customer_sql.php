<?php

$queryAllCustomer  = "SELECT * FROM customer";

$queryAllCustomer = "";
$insertCustomer = "INSERT INTO `customer` (customer_name, customer_account, customer_password, customer_phone, customer_cardnumber) values (:customer_name, :customer_account, :customer_password, :customer_phone, :customer_cardnumber)";

function fetchClass($conn, $sql, $class){
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
}

function insertAccount($conn, $sql, $post){
    try {
        $ucustomer_name = $_POST["customer_name"] ?? "";
        $ucustomer_account = $_POST["customer_account"] ?? "";
        $ucustomer_password = $_POST["customer_password"] ?? "";
        $ucustomer_phone = $_POST["customer_phone"] ?? "";
        $ucustomer_cardnumber = $_POST["customer_cardnumber"] ?? "";

        $stmt = $conn->prepare($sql);
            
        $stmt->execute([
            'customer_name' => $ucustomer_name,
            'customer_account' => $ucustomer_account,
            'customer_password' => $ucustomer_password,
            'customer_phone' => $ucustomer_phone,
            'customer_cardnumber' => $ucustomer_cardnumber,
        ]);
        $conn = null;
        return '1';
    } catch (Exception $e) {
        return '0';
    }
}


?>