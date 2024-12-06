<?php
include_once 'connect_database.php';

function Login($id, $password)
{

    try {

        $pdo = connectDatabase();

        $sql = $pdo->prepare('SELECT * FROM manager WHERE manager_id=? and password=?');
        $sql->execute([$id, $password]);

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            header("Location: home_admin.html");
        } else {
            header("Location: login_admin.php");
            echo 'ログインに失敗しました<br>';
        }
    } catch (PDOException $e) {
        exit('実行エラー' . $e->getMessage());
    }
}
