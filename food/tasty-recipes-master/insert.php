<?php
require 'db.php';
require_once 'theorders.php';
require 'theorders_sql.php';
$sql="insert into theorder (theorder_id, , theorder_total, theorder_payment, theorder_time, theorder_date, theorder_note, customer_id) values (:theorder_id, :theorder_total, :theorder_payment, :theorder_time, :theorder_date, :theorder_note, :customer_id)";
$stmt=$conn->prepare($sql);
$stmt->execute();
?>