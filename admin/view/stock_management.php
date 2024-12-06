<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css" type="text/css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <link rel="stylesheet" href="../style/stock_style.css" type="text/css">
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
                <h2>在庫管理</h2>
                <div class="stock-container">
                    <div class="list">

                        <div class="stock-list">
                            <div class="stock-list2">
                                <label for="select">在庫一覧</label>
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
                            <form action="stock_search.php" method="get">
                                <input type="text" id="name" name="search" class="site-search" placeholder="製品名で検索" />
                                <input type="submit" value="検索" class="search">

                                <input type="text" id="number" name="search" class="site-search" placeholder="製品番号で検索" />
                                <input type="submit" value="検索" class="search">
                            </form>
                        </div>
                        <input type="submit" value="リセット" class="reset">

                        <div class="btn-click">
                            <a href="javascript:location.reload()" rel="nofollow">
                                <img src="../images/reload.png" alt="再読み込み" id="reload">
                            </a>

                            <a href="stock_registration.php">
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
                    $stmt = "SELECT category, product_id, product_name, stock, supplier_name FROM product";
                    $result1 = $pdo->query($stmt);

                    // SQL実行エラーのチェック
                    if (!$result1) {
                        echo "SQL実行エラー: " . implode(", ", $pdo->errorInfo());
                        exit;
                    }

                    $stockList = $result1->fetchAll(PDO::FETCH_ASSOC);

                    // データが存在するか確認
                    if (count($stockList) > 0) {
                        echo '<table class="table">'; // 表の開始
                        echo '<tr><th>分類</th><th>品番号</th><th>品名</th><th>在庫</th><th>事業者名</th></tr>';

                        foreach ($stockList as $stock) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($stock["category"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($stock["product_id"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($stock["product_name"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($stock["stock"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($stock["supplier_name"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>'; // 表の終了
                    } else {
                        echo '<p>在庫が見つかりません。</p>';
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
                    <div>

                    </div>
                </div>

            </div>


        </main>
        <script src="../script/date_display.js"></script>
        <script src="../script/reload.js/"></script>
</body>