<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
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
                <h2>商品管理</h2>
                <div class="stock-container">
                    <div class="list">

                        <div class="stock-list">
                            <div class="stock-list2">
                                <label for="select">商品一覧</label>
                            </div>
                        </div>

                        <div class="select">
                            <select name="stocks" id="stock">
                                <option value="">すべて</option>
                            </select><br>
                        </div>
                    </div>

                    <div class="search-box">
                        <div class="search-but">
                            <form action="goods_search.php" method="get">
                            <input type="text" id="name" name="search" class="site-search" placeholder="商品名で検索" />
                            <input type="submit" value="検索" class="search">

                            <input type="text" id="number" name="search" class="site-search" placeholder="商品番号で検索" />
                            <input type="submit" value="検索" class="search">
                            </form>
                        </div>

                        <input type="submit" value="リセット" class="reset">

                        <div class="btn-click">
                            <a href="javascript:location.reload()" rel="nofollow">
                                <img src="../images/reload.png" alt="再読み込み" id="reload">
                            </a>

                            <a href="goods_registration.php">
                                <img src="../images/plus.png" alt="クリックで遷移" id="plus">
                            </a>
                            <img src="../images/choice.png" alt="選択" id="choice">
                        </div>
                    </div>
                    <?php

                    // データベース接続
                    $pdo = new PDO(
                        'mysql:host=mysql309.phy.lolipop.lan; dbname=LAA1553843-ochazon;charset=utf8',
                        'LAA1553843',
                        'pass0421'
                    );

                    // SQLクエリ
                    $stmt1 = "SELECT product_name, product_id, category, price, product_overview FROM productMg";
                    $result2 = $pdo->query($stmt1);
                    $productList = $result2->fetchAll(PDO::FETCH_ASSOC);

                    if (!$result2) {
                        echo "SQL実行エラー: " . implode(", ", $pdo->errorInfo());
                        exit;
                    }

                    // データが存在するか確認
                    if (count($productList) > 0) {
                        echo '<table class="table">'; // 表の開始
                        echo '<tr><th>商品名</th><th>商品番号</th><th>分類</th><th>値段</th><th>商品詳細</th></tr>';

                        foreach ($productList as $product) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($product["product_name"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($product["product_id"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($product["category"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($product["price"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($product["product_overview"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>'; // 表の終了
                    } else {
                        echo '<p>商品が見つかりません。</p>';
                    }

                    ?>
                    <div class="time">
                        <div class="time2">
                            <label for="current-date">最終更新日</label>
                        </div>
                        <div class="time4">
                            <input type="text" id="current-date" readonly class="time5" />
                        </div>
                    </div>
                </div>
            </div>


        </main>
        <script src="../script/date_display.js"></script>
        <script src="../script/reload.js/"></script>
</body>

</php>