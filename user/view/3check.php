<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once '../server/user_input.php';
        Input(
            $_POST['username'],
            $_POST['email'],
            $_POST['password'],
            $_POST['last-name'],
            $_POST['first-name'],
            $_POST['last-name-kana'],
            $_POST['first-name-kana'],
            $_POST['postal-code'],
            $_POST['prefecture'],
            $_POST['city'],
            $_POST['address'],
            $_POST['building']
        );
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
    <link rel="stylesheet" href="../style/3check.css">
</head>

<body>
    <form action="4loginok.html" method="post"></form>

    <div class="container">
        <div class="header">
            <p>OCHAZON</p>
        </div>
        <div class="back-link">
            <a href="2user.php">＜ 前のページ</a>
        </div>
        <div class="confirmation-section">
            <h2>入力情報確認</h2>

            <?php
            echo '<p><strong>ユーザー名</strong><br>', $_POST['username'], '</p><br>';
            echo '<p><strong>メールアドレスまたは携帯電話番号</strong><br>', $_POST['email'], '</p><br>';
            echo '<p><strong>パスワードの設定（必須）</strong><br>', $_POST['password'], '</p><br>';
            echo '<p><strong>氏名（漢字）</strong><br>', $_POST['last-name'], $_POST['first-name'], '</p><br>';
            echo '<p><strong>氏名（カタカナ）</strong><br>', $_POST['last-name-kana'], $_POST['first-name-kana'], '</p>';
            echo '<p><strong>住所</strong><br>', $_POST['postal-code'], $_POST['prefecture'], $_POST['city'], $_POST['address'], $_POST['building'], '</p>';
            ?>
        </div>

        <div class="registration-button">
            <form action="1login.php" method="post" class="con-button">
                <button class="confirm-button">ユーザーを登録する</button>
            </form>
        </div>
    </div>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            margin: 0 auto;
            text-align: center;
            width: 100vw;
            border: 2px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #ffffff;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            font-size: 1.2em;
        }

        .back-link {
            padding: 10px;
            font-size: 0.9em;
            color: #555;
        }

        .back-link a {
            color: #555;
            text-decoration: none;
        }

        .confirmation-section {
            padding: 20px;
            font-size: 0.9em;
            color: #333;
        }

        .confirmation-section h2 {
            margin: 0 0 15px;
            font-size: 1.1em;
            color: #333;
        }

        .confirmation-section p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .confirmation-section strong {
            display: block;
            color: #333;
            font-weight: bold;
        }

        .confirm-button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            margin-bottom: 20px;
        }
    </style>

</body>

</html>