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
) {
    try {
        $pdo = connectDatabase();

        $sql = $pdo->prepare(
            'INSERT INTO user VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
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
            $building
        ]);
    } catch (Exception $e) {
        header("Location: 2user.php");
        exit('登録エラー: ' . $e->getMessage());
    }
}
