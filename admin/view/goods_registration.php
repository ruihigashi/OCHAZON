<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../server/goods_input.php';
    Input(
        $_POST['category'],
        $_POST['price'],
        $_POST['product_number'],
        $_POST['product_name'],
        $_POST['product_overview'],
        $_POST['size'],
        $_POST['name'],
        $_POST['ingredients'],
        $_POST['origin'],
        $_POST['expiration_date'],
        $_POST['storage'],
        $_POST['manufacturer'],
        $_POST['business_name'],
        $_POST['contact'],
        $_POST['business_hours'],
        $_POST['holiday'],
        $_POST['image'],
        $_POST['date']
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
    <link rel="stylesheet" href="../style/goods_plus.css" type="text/css">
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
                    <a href="goods_management.php">
                        <img src="../images/back.png" alt="戻るボタン" id="back-btn">
                    </a>
                    <h2>商品情報の入力</h2>
                </div>

                <form action="#" method="post">
                <div class="stock-container">
                    <div class="category">
                        <div class="category2">
                            <label for="category4">分類</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="category4" class="category5" name="category" />
                        </div>

                        <div class="category2">
                            <label for="price">値段</label>
                        </div>
                        <div class="category6">
                            <input type="number" id="price" class="category5" name="price" />
                        </div>
                    </div>

                    <div class="number">
                        <div class="number2">
                            <label for="product_number">商品番号</label>
                        </div>
                        <div class="number6">
                            <input type="text" id="product_number" class="number5" name="product_number" />
                        </div>
                    </div>

                    <div class="name">
                        <div class="name2">
                            <label for="product_name">商品名</label>
                        </div>
                        <div class="name6">
                            <input type="text" id="product_name" class="name5" name="product_name" />
                        </div>
                    </div>

                    <div class="overview">
                        <div class="overview2">
                            <label for="product_overview">商品概要</label>
                        </div>
                        <div class="overview6">
                            <textarea id="product_overview" class="overview5" rows="5" cols="100" name="product_overview"></textarea>
                        </div>
                    </div>

                    <div class="name">
                        <div class="name2">
                            <label for="size">内容量・サイズ</label>
                        </div>
                        <div class="name6">
                            <input type="text" id="size" class="name5" name="size" />
                        </div>
                    </div>

                    <div class="category">
                        <div class="category2">
                            <label for="name">名称</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="name" class="category5" name="name" />
                        </div>

                        <div class="category2">
                            <label for="ingredients">原材料名</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="ingredients" class="category5" name="ingredients" />
                        </div>
                    </div>

                    <div class="category">
                        <div class="category2">
                            <label for="origin">原料原産地</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="origin" class="category5" name="origin" />
                        </div>

                        <div class="category2">
                            <label for="expiration_date">賞味期限</label>
                        </div>
                        <div class="category6">
                            <input type="date" id="expiration_date" class="category5" name="expiration_date" />
                        </div>
                    </div>

                    <div class="category">
                        <div class="category2">
                            <label for="storage">保存方法</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="storage" class="category5" name="storage" />
                        </div>

                        <div class="category2">
                            <label for="manufacturer">製造者</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="manufacturer" class="category5" name="manufacturer" />
                        </div>
                    </div>

                    <div class="category">
                        <div class="category2">
                            <label for="business_name">事業者名</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="business_name" class="category5" name="business_name" />
                        </div>

                        <div class="category2">
                            <label for="contact">連絡先</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="contact" class="category5" name="contact" pattern="^\d{2,4}-\d{2,4}-\d{4}$" title="例: 03-1234-5678 または 090-1234-5678" />
                        </div>
                    </div>

                    <div class="category">
                        <div class="category2">
                            <label for="business_hours">営業時間</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="business_hours" class="category5" name="business_hours" />
                        </div>

                        <div class="category2">
                            <label for="holiday">定休日</label>
                        </div>
                        <div class="category6">
                            <input type="text" id="holiday" class="category5" name="holiday" />
                        </div>
                    </div>

                    <div class="name">
                        <div class="name2">
                            <label for="image">添付画像URL</label>
                        </div>
                        <div class="name6">
                            <input type="text" id="image" name="image" class="name5" />
                        </div>
                    </div>

                    <div class="time">
                        <div class="time2">
                            <label for="current-date">登録日時</label>
                        </div>
                        <div class="time4">
                            <input type="text" id="current-date" name="date" readonly class="time5" />
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