<?php

require_once 'food.php';
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
function fetchAllFoodField($conn)
{
    $stmt = $conn->prepare('SHOW COLUMNS FROM `food`');
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
function fetchAllFood($conn)
{
    $stmt = $conn->prepare('SELECT * FROM `food`');
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_CLASS, 'food');
}

/** < HW ====================================== >
 * 依照給予的帳號，取得使用者
 * 
 * @param  PDO $conn       PDO實體
 * @param  string $account 要搜尋的使用者帳號
 * @return array
 */





/** < ====================================== HW >

/** < HW ====================================== >
/**
 * 依照給予的欄位與關鍵字，取得符合的使用者
 * 
 * @param  PDO $conn       PDO實體
 * @param  string $search  要搜尋的關鍵字
 * @param  string $field   要依此搜尋關鍵字的欄位
 * @param  string $sort    要依此排序結果的欄位
 * @return object
 */
function findFoodLikeSearch($conn, $search, $field, $sort)
{
   $sql = "SELECT * FROM `food` WHERE `{$field}` LIKE :search ORDER BY `{$sort}` ASC";
    $stmt = $conn->prepare($sql);
    //prepare(搜尋users資料表中 $field 含有 $search 關鍵字的使用者 且依 $sort 欄位排序)
    
    $stmt->bindValue(':search', "%".$search."%");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS,'food');
    //回傳 以User物件型態fetch(搜尋到的使用者資訊) 
    return $result; 

}
/** < ====================================== HW >

/** < HW ====================================== >
 * 新增使用者
 * 
 * @param  PDO $conn     PDO實體
 * @param  array $data   要新增的使用者資料
 * @return boolean       執行結果
 */





/** < ====================================== HW >

/** < HW ====================================== >
 * 修改使用者資料
 * 
 * @param  PDO $conn     PDO實體
 * @param  string $id    要修改的使用者編號
 * @param  array $data   要修改的使用者資料
 * @return boolean       執行結果
 */






/** < ====================================== HW >

// =============================================================================
// = Stickers
// =============================================================================

/**
 * 取得所有貼圖
 * 
 * @param  PDO $conn    PDO實體
 * @return array
 */
function fetchAllFood1($conn)
{
    $stmt = $conn->prepare('SELECT * FROM `food`');
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_CLASS, 'food');
}
