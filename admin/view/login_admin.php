<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../server/login_admin.php';
    Login($_POST['id'], $_POST['password']);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css" type="text/css">
    <link rel="stylesheet" href="../style/login_style.css" type="text/css">
    <title>管理システム ログイン</title>
</head>

<body>
    <header>
        <img src="../images/OCHAZON.png " alt="ロゴ画像" class="OCHAZON">
        <h3>管理システム</h3>
    </header>

    <main>
        <p>ログイン</p>
        <form action="" method="post">
            <div class="input_box">
                <label for="name">管理者ID</label><br>
                <input type="text" name="id" id="name" required><br>
                <label for="password" id="password">パスワード</label><br>
                <input type="password" name="password" id="password" required><br>
            </div>



            <form action="#" method="post">
                <input type="submit" value="ログイン" class="login">
            </form>
        </form>
    </main>

</body>