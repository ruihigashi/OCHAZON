<?php
include_once 'connect_database.php';

function Input($first_name, $last_name, $birthday, $address, $mail, $phone, $password)
{
    try {
        $pdo = connectDatabase();

        $sql = $pdo->prepare(
            'INSERT INTO administrator(first_name, last_name, birthday, address, mail, phone, password) VALUES (?, ?, ?, ?, ?, ?, ?)'
        );
        $sql->execute([$first_name, $last_name, $birthday, $address, $mail, $phone, $password]);

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            header("Location: authority_management.php");
            echo '登録に成功しました<br>';
        } else {
            header("Location: authority_management.php");
            echo '登録に失敗しました<br>';
        }
    } catch (PDOException $e) {
        exit('登録エラー: ' . $e->getMessage());
    }
}
