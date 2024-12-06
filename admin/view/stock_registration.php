<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../server/stock_input.php';
    Input(
        $_POST['category'],
        $_POST['product_number'],
        $_POST['product_name'],
        $_POST['supplier_name'],
        $_POST['manager_name'],
        $_POST['stock_quantity'],
        $_POST['remarks'],
        $_POST['registration_date']
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
    <link rel="stylesheet" href="../style/stock_plus.css" type="text/css">
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

            <div class="flex-content">
                <div class="flex">
                    <a href="stock_management.php">
                        <img src="../images/back.png" alt="戻るボタン" id="back-btn">
                    </a>
                    <h2>製品情報の入力</h2>
                </div>
                <form action="#" method="post">
                <div class="stock-container">

                    <div class="category">
                        <div class="category2">
                            <label for="category4">分類</label>
                        </div>
                        <div class="category6">
                            <input type="text" name="category" id="category4" class="category5" />
                        </div>
                    </div>

                    <div class="number">
                        <div class="number2">
                            <label for="number4">品番号</label>
                        </div>
                        <div class="number6">
                            <input type="text" name="product_number" id="number4" class="number5" />
                        </div>
                    </div>

                    <div class="name">
                        <div class="name2">
                            <label for="name4">品名</label>
                        </div>
                        <div class="name6">
                            <input type="text" name="product_name" id="name4" class="name5" />
                        </div>
                    </div>

                    <div class="Supplier">
                        <div class="Supplier2">
                            <label for="Supplier4">仕入先名</label>
                        </div>
                        <div class="Supplier6">
                            <input type="text" name="supplier_name" id="Supplier4" class="Supplier5" />
                        </div>
                    </div>

                    <div class="manager">
                        <div class="manager2">
                            <label for="manager4">担当者</label>
                        </div>
                        <div class="manager6">
                            <input type="text" name="manager_name" id="manager4" class="manager5" />
                        </div>
                    </div>

                    <div class="stock1">
                        <div class="stock2">
                            <label for="stock4">在庫</label>
                        </div>
                        <div class="stock6">
                            <input type="text" name="stock_quantity" id="stock4" class="stock5" />
                        </div>
                    </div>

                    <div class="remarks">
                        <div class="remarks2">
                            <label for="remarks4">備考</label>
                        </div>
                        <div class="remarks6">
                            <input type="text" name="remarks" id="remarks4" class="remarks5" />
                        </div>
                    </div>

                    <div class="time">
                        <div class="time2">
                            <label for="current-date">登録日時</label>
                        </div>
                        <div class="time4">
                            <input type="text" id="current-date" name="registration_date" readonly class="time5" />
                        </div>
                    </div>

                    <div class="Registration">
                            <input type="submit" value="登録" class="Registration2"><br>
                        </form>
                    </div>

        </main>
        <script src="../script/date_display.js"></script>
</body>

</php>