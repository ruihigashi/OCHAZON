<?php
include_once 'connect_database.php';

function productList(){
    $pdo = connectDatabase();

    try {

        // 商品データを取得
        $stmt = $pdo->prepare("SELECT image, price, product_name FROM productMg ORDER BY product_id ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "データベース接続エラー: " . $e->getMessage();
        return [];
    }
}
?>
