<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../server/authority_input.php';
    Input(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['birthday'],
        $_POST['address'],
        $_POST['mail'],
        $_POST['phone'],
        $_POST['password']
    );
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <link rel="stylesheet" href="../style/authority_plus.css" type="text/css">
    <title>管理システム ログイン</title>
</head>

<body>
    <di class="app">
        <header>
            <div class="title">
                <a href="home_admin.php"><img src="../images/OCHAZON.png" alt="ロゴ画像" class="OCHAZON"></a>
                <h1>管理システム</h1>
            </div>

            <input type="search" id="site-search" name="site-search" class="title-search" placeholder=" search" />
            <img src="../images/notice.png" alt="通知画像" class="notice">
            <img src="../images/user.png" alt="ユーザー画像" class="user">
        </header>
        <main>
            <nav>
                <form action="home_admin.php">
                    <input type="submit" value="ホーム" class="home"><br>
                </form>

                <form action="stock_management.php">
                    <input type="submit" value="在庫管理" class="stock"><br>
                </form>

                <form action="goods_management.php">
                    <input type="submit" value="商品管理" class="goods"><br>
                </form>

                <form action="member_management.php">
                    <input type="submit" value="会員管理" class="member"><br>
                </form>

                <form action="authority_management.php">
                    <input type="submit" value="権限管理" class="authority"><br>
                </form>
            </nav>

            <form action="#" method="post">
            <div class="flex-content">
                <div class="flex">
                    <a href="stock_management.php">
                        <img src="../images/back.png" alt="戻るボタン" id="back-btn">
                    </a>
                    <h2>管理者登録</h2>
                </div>
                <div class="stock-container">

                    <div class="category">
                        <div class="category2">
                            <label for="category3">姓</label>
                        </div>
                        <div class="category6">
                            <input type="text" name="first_name" id="category4" class="category5" />
                        </div>
                    </div>

                    <div class="number">
                        <div class="number2">
                            <label for="number3">名</label>
                        </div>
                        <div class="number6">
                            <input type="text" name="last_name" id="number4" class="number5" />
                        </div>
                    </div>

                    <div class="name">
                        <div class="name2">
                            <label for="name3">生年月日</label>
                        </div>
                        <div class="name6">
                            <input type="date" name="birthday" id="name4" class="name5" />
                        </div>
                    </div>

                    <div class="Supplier">
                        <div class="Supplier2">
                            <label for="Supplier3">住所</label>
                        </div>
                        <div class="Supplier6">
                            <input type="text" name="address" id="Supplier4" class="Supplier5" />
                        </div>
                    </div>

                    <div class="manager">
                        <div class="manager2">
                            <label for="manager3">メールアドレス</label>
                        </div>
                        <div class="manager6">
                            <input type="text" name="mail" id="manager4" class="manager5" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="有効なメールアドレスを入力してください" />
                        </div>
                    </div>

                    <div class="stock1">
                        <div class="stock2">
                            <label for="stock3">電話番号</label>
                        </div>
                        <div class="stock6">
                            <input type="text" name="phone" id="stock4" class="stock5" pattern="^\d{2,4}-\d{2,4}-\d{4}$" title="例: 03-1234-5678 または 090-1234-5678" />
                        </div>
                    </div>

                    <div class="remarks">
                        <div class="remarks2">
                            <label for="remarks3">パスワード</label>
                        </div>
                        <div class="remarks6">
                            <input type="text" name="password" id="remarks4" class="remarks5" pattern="[a-zA-Z0-9]{5,}" title="5文字以上の英数字を入力してください" />
                        </div>
                    </div>

                    <div class="Registration">
                            <input type="submit" value="登録" class="Registration2"><br>
                        </form>
                    </div>

        </main>
        <script src="../script/reload.js/"></script>
</body>

</php>