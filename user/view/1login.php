<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../server/login_user.php';
    login_user(
        $_POST['email'],
        $_POST['password']
    );
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCHAZON ログイン</title>
    <link rel="stylesheet" href="../style/1login.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>OCHAZON</h1>
        </header>
        <a href="#" class="back-link">＜ 前のページ</a>

        <div class="login-form">
            <h2>ログイン</h2>
            <form action="home.html" method="post">
                <label for="email">メールアドレスまたは携帯電話番号</label>
                <input type="text" id="email" name="email">

                <label for="password">パスワード</label>
                <input type="password" id="password" name="password">

                <p class="forgot-password">※パスワードをお忘れの場合</p>

                <button type="submit">ログイン</button>
            </form>
        </div>

        <form action="2user.php">
        <div class="registration-info">
            <h3>はじめてご利用になる方</h3>
            <p>ユーザー登録は無料です。購入履歴やブックマーク機能など、メンバー限定のサービスをご利用いただけます。</p>
            <button class="register-button">ユーザー登録はこちらから</button>
        </div>
        

        <footer>
            <p>© OCHAZON</p>
        </footer>
    </div>
    <style>
        /* 全体のリセット */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f8f8;
        }

        .container {
            width: 100%;
            max-width: 480px;
            /* PC画面でも中央に収まるように幅を指定 */
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-size: 24px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }

        .back-link {
            color: #333;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }

        .login-form {
            margin-top: 20px;
            text-align: left;
        }

        .login-form h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .login-form label {
            font-size: 14px;
            display: block;
            margin: 10px 0 5px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .forgot-password {
            font-size: 12px;
            color: #888;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .registration-info {
            margin-top: 20px;
            text-align: left;
            font-size: 14px;
            color: #666;
        }

        .registration-info h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .register-button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            color: #333;
            background-color: #e0e0e0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        footer {
            text-align: center;
            font-size: 12px;
            color: #aaa;
            margin-top: 20px;
        }

        /* PCサイズ（幅768px以上） */
        @media (min-width: 768px) {
            .container {
                max-width: 480px;
                /* PC画面の最大幅を指定 */
            }

            header {
                font-size: 28px;
            }

            .login-form h2 {
                font-size: 22px;
            }

            button,
            .register-button {
                font-size: 18px;
            }
        }
    </style>
</body>

</html>