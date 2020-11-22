<?php
require 'db.php';
require 'theorder_sql.php';
require 'theorder.php';
$sql="insert into theorder (theorder_id, , theorder_total, theorder_payment, theorder_time, theorder_date, theorder_note, customer_id) values (:theorder_id, :theorder_total, :theorder_payment, :theorder_time, :theorder_date, :theorder_note, :customer_id)";
$stmt = $conn->prepare($sql);
$theorder = new theorder();
$theorderArray= $theorder->toArrayInserttheorder();
$stmt->execute($theorderArray);
$conn = null;
//$insertUser = "INSERT INTO theorder (theorder_id, theorder_total,theorder_payment,theorder_time, member_date,theorder_note,costomer_id) values (1,1,1,1,1,1,1)";

?>