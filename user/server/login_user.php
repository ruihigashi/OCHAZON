<?php
session_start();
require 'connect_database.php';

function login_user($email, $password)
{
    $pdo = connectDatabase();
    $stmt = $pdo->prepare('SELECT * FROM user WHERE email=? AND password=?');
    $stmt->execute([$email, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $pdo = NULL;


    if ($user) {
        $_SESSION['user_id'] = $user['user_id'];
        return true;
    } else {
        return false;
    }
}
