<?php
include_once 'connect_database.php';

function Input($category, $product_id, $product_name, $supplier_name, $manager_name, $stock_quantity, $remarks, $registration_date)
{
    try {
        $pdo = connectDatabase();

        $sql = $pdo->prepare(
            'INSERT INTO product(category, product_id, product_name, supplier_name, manager_name, stock, remarks, registration_date)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        );
        $sql->execute([$category, $product_id, $product_name, $supplier_name, $manager_name, $stock_quantity, $remarks, $registration_date]);

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            header("Location: stock_management.php");
            echo '登録に成功しました<br>';
        } else {
            header("Location: stock_management.php");
            echo '登録に失敗しました<br>';
        }
    } catch (PDOException $e) {
        exit('登録エラー: ' . $e->getMessage());
    }
}
