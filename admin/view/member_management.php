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
                <h2>会員管理</h2>
                <div class="stock-container">
                    <div class="list">

                        <div class="stock-list">
                            <div class="stock-list2">
                                <label for="select">会員一覧</label>
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
                            <form action="member_search.php" method="get">
                            <input type="text" id="name" name="search" class="site-search" placeholder="会員名で検索" />
                            <input type="submit" value="検索" class="search">

                            <input type="text" id="number" name="search" class="site-search" placeholder="会員IDで検索" />
                            <input type="submit" value="検索" class="search">
                            </form>
                        </div>

                        <input type="submit" value="リセット" class="reset">

                        <div class="btn-click">
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
                    $stmt1 = "SELECT user_id, first_name, last_name, first_name_kana, last_name_kana, email, postal_code, prefecture, city, address, building FROM user";
                    $result2 = $pdo->query($stmt1);
                    $userList = $result2->fetchAll(PDO::FETCH_ASSOC);

                    if (!$result2) {
                        echo "SQL実行エラー: " . implode(", ", $pdo->errorInfo());
                        exit;
                    }

                    // データが存在するか確認
                    if (count($userList) > 0) {
                        echo '<table class="table">'; // 表の開始
                        echo '<tr><th>会員ID</th><th>会員名</th><th>メールアドレス</th><th>郵便番号</th><th>住所</th></tr>';

                        foreach ($userList as $user) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($user["user_id"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($user["last_name"] . $user["first_name"], ENT_QUOTES, 'UTF-8') . '（' .  htmlspecialchars($user["last_name_kana"] . ' ' . $user["first_name_kana"], ENT_QUOTES, 'UTF-8') . '）' . '</td>';
                            echo '<td>' . htmlspecialchars($user["email"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars($user["postal_code"], ENT_QUOTES, 'UTF-8') . '</td>';
                            echo '<td>' . htmlspecialchars(
                                $user["prefecture"] . $user["city"] . $user["address"] . ' ' . $user["building"],
                                ENT_QUOTES,
                                'UTF-8'
                            ) . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>'; // 表の終了
                    } else {
                        echo '<p>会員が見つかりません。</p>';
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