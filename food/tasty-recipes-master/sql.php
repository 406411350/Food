<?php




// =============================================================================
// = Users
// =============================================================================

/**
 * 獲取所有欄位名稱
 * 
 * @param  PDO $conn     PDO實體
 * @param  array $data   要新增的使用者資料
 * @return boolean       執行結果
 */
function fetchAllUsersField($conn)
{
    $stmt = $conn->prepare('SHOW COLUMNS FROM `users`');
    $stmt->execute();

    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

    function fieldName($column) {
        return $column['Field'];
    }
    
    return array_map('fieldName', $columns);
}

/**
 * 取得所有使用者
 * 
 * @param  PDO $conn    PDO實體
 * @return object
 */
function fetchAllUser($conn)
{
    $stmt = $conn->prepare('SELECT * FROM `customer`');
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_CLASS, 'Customer');
}

/** < HW ====================================== >
 * 依照給予的帳號，取得使用者
 * 
 * @param  PDO $conn       PDO實體
 * @param  string $account 要搜尋的使用者帳號
 * @return array
 */
function findUserByAccount($conn, $account)
{
    $sql="select * from customer where customer_account = :account";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':account',$account);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    //prepare($sql=搜尋users資料表中 帳號 = :account的使用者)
    //綁定:account 變數

    return $result;//回傳 fetch(搜尋到的使用者 以陣列型態讀取) 
}
function fetchAllUser1($conn)
{
    $stmt = $conn->prepare('SELECT * FROM `manager`');
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_CLASS, 'Manager');
}

/** < HW ====================================== >
 * 依照給予的帳號，取得使用者
 * 
 * @param  PDO $conn       PDO實體
 * @param  string $account 要搜尋的使用者帳號
 * @return array
 */
function findUserByAccount1($conn, $account)
{
    $sql="select * from manager where manager_account = :account";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':account',$account);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    //prepare($sql=搜尋users資料表中 帳號 = :account的使用者)
    //綁定:account 變數

    return $result;//回傳 fetch(搜尋到的使用者 以陣列型態讀取) 
}
