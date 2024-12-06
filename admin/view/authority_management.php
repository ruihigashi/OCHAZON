<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css" type="text/css">
    <link rel="stylesheet" href="../style/authority_style.css" type="text/css">
    <title>管理システム ログイン</title>
</head>

<body>
    <di class="app">
        <header>
            <div class="title">
                <img src="../images/OCHAZON.png" alt="ロゴ画像" class="OCHAZON">
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
                <h2>権限管理</h2>
            <div class="stock-container">
                <div class="list">

                    <div class="stock-list">
                        <div class="stock-list2">
                            <label for="select">一般管理者</label>
                        </div>
                    </div>

                    <div class="btn-click">
                        <a href="authority_registration.php">
                            <img src="../images/plus.png" alt="クリックで遷移" id="plus">
                        </a>
                        <img src="../images/choice.png" alt="選択" id="choice">
                    </div>
                </div>

                </div>
            </div>


        </main>
        <script src="../script/reload.js/"></script>
</body>

</php>