<?php

$queryAllCustomer  = "SELECT * FROM theorder";

$queryAllCustomer = "";
$insertCustomer = "INSERT INTO `theorder` (theorder_id, , theorder_total, theorder_payment, theorder_time, theorder_date, note, customer_id) values (:theorder_id, :theorder_total, :theorder_payment, :theorder_time, :theorder_date, :theorder_note, :custome_id)";

function fetchClass($conn, $sql, $class){
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
}

function insertAccounttheorder($conn, $sql, $post){
    try {
        $theorder_id = 1;
        $theorder_total = 100;
        $theorder_payment = "線上支付";
        $theorder_time = "12:15:00";
        $theorder_date = "2020:06:10";
        $theorder_note = "無";
        $customer_id = 1;

        $stmt = $conn->prepare($sql);
            
        $stmt->execute([
            'theorder_id' => $theorder_id,
            'theorder_total' => $theorder_total,
            'theorder_payment' => $theorder_payment,
            'theorder_time' => $theorder_time,
            'theorder_date' => $theorder_date,
            'theorder_note' => $theorder_note,
            'customer_id' => $customer_id,
        ]);
        $conn = null;
        return '1';
    } catch (Exception $e) {
        return '0';
    }
}


?>