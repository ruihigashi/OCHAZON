<?php
include_once 'connect_database.php';

function Input(
    $username,
    $email,
    $password,
    $lastName,
    $firstName,
    $lastNameKana,
    $firstNameKana,
    $postalCode,
    $prefecture,
    $city,
    $address,
    $building,
    $defaultAddress
)
{
    try {
        $pdo = connectDatabase();

        $sql = $pdo->prepare(
            'INSERT INTO user(username, email, password, last_name, first_name, last_name_kana, first_name_kana, postal_code, prefecture, city, address, building, defaultAddress)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
        );
        $sql->execute([
        $username,
        $email,
        $password,
        $lastName,
        $firstName,
        $lastNameKana,
        $firstNameKana,
        $postalCode,
        $prefecture,
        $city,
        $address,
        $building,
        $defaultAddress]);

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            header("Location: 3check.php");
            echo '登録に成功しました<br>';
        } else {
            header("Location: 2user.php");
            echo '登録に失敗しました<br>';
        }
    } catch (PDOException $e) {
        exit('登録エラー: ' . $e->getMessage());
    }
}
