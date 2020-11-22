<?php

$queryAllUser  = "SELECT * FROM member";

$queryAllUser = "";
$insertUser = "INSERT INTO `member` (member_id, member_name, member_date, member_phone) values (:member_id, :member_name, :member_date, :member_phone)";

function fetchClass($conn, $sql, $class){
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
}

function insertAccount($conn, $sql, $post){
    try {
        $uMember_id = $_POST["member_id"] ?? "";
        $uMember_name = $_POST["member_name"] ?? "";
        $uMember_date = $_POST["member_date"] ?? "";
        $uMember_phone = $_POST["member_phone"] ?? "";

        $stmt = $conn->prepare($sql);
            
        $stmt->execute([
            'member_id' => $uMember_id,
            'member_name' => $uMember_name,
            'member_date' => $uMember_date,
            'member_phone' => $uMember_phone,
        ]);
        $conn = null;
        return '1';
    } catch (Exception $e) {
        return '0';
    }
}

function fetchAllMemberField($conn){
    $stmt = $conn->prepare('SHOW COLUMNS FROM `member`');
    $stmt->execute();

    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

    function fieldName($column) {
        return $column['Field'];
    }
    
    return array_map('fieldName', $columns);
}

function findMemberLikeSearch($conn, $search, $sort){
    if ($search == ""){
        $sql="SELECT * FROM `member`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,'members');
    } else {
        $sql = "SELECT * FROM `member` WHERE `member_id` LIKE :search OR `member_name` LIKE :search ORDER BY `{$sort}` ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':search', '%'.$search.'%');
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS,'members');
    }
}

?>