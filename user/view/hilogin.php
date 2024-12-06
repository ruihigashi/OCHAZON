<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文フォーム</title>
    <link rel="stylesheet" href="../style/hilogin.css">
</head>

<body>
    <div class="container">
        <!-- 緑のヘッダーバー -->
        <div class="header-bar">
            <img src="../images/Image.png" alt="お茶の画像" class="product-image">
        </div>

        <a href="1login.php" class="back-link">＜ 前のページ</a>

        <h2>ご注文手続き</h2>
        <form action="confirm.php" method="post">
            <!-- お届け先 -->
            <section class="section">
                <h3>お届け先</h3>

                <div class="input-group">
                    <label for="last-name">姓（漢字）</label>
                    <input type="text" id="last-name" name="last-name" placeholder="例：田中" required>
                </div>
                <div class="input-group">
                    <label for="first-name">名（漢字）</label>
                    <input type="text" id="first-name" name="first-name" placeholder="例：太郎" required>
                </div>
                <div class="input-group">
                    <label for="last-name-kana">姓（カタカナ）</label>
                    <input type="text" id="last-name-kana" name="last-name-kana" placeholder="例：タナカ" required>
                </div>
                <div class="input-group">
                    <label for="first-name-kana">名（カタカナ）</label>
                    <input type="text" id="first-name-kana" name="first-name-kana" placeholder="例：タロウ" required>
                </div>
                <div class="input-group">
                    <label for="postal-code">郵便番号（半角数字）</label>
                    <input type="number" id="postal-code" name="postal-code" placeholder="例：123" required>-<input type="number" id="postal-code2" name="postalCode2" placeholder="4567" required>
                </div>
                <div class="input-group">
                    <label for="prefecture">都道府県</label>
                    <select id="prefecture" name="prefecture" required>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                        <!-- 省略：都道府県リスト -->
                    </select>
                </div>
                <div class="input-group">
                    <label for="address">住所</label>
                    <input type="text" id="address" name="address" placeholder="例：新宿区西新宿1-1-1" required>
                </div>
                <div class="input-group">
                    <label for="street">丁目・番地・号（数字は半角）</label>
                    <input type="text" id="street" name="street" required>
                </div>
                <div class="input-group">
                    <label for="building">建物名 / 部屋番号</label>
                    <input type="text" id="building" name="building">
                </div>
                <div class="input-group">
                    <label for="phone">電話番号</label>
                    <input type="tel" id="phone" name="phone" pattern="^\d{2,4}-\d{2,4}-\d{4}$" required>
                </div>
            </section>

            <!-- お支払い方法 -->
            <section class="section">
                <h3>お支払い方法</h3>
                <div class="payment-method">
                    <label><input type="radio" name="payment" value="クレジットカード" checked> クレジットカード</label>
                    <div class="card-inputs">
                        <!-- クレジットカード番号 -->
                        <input
                            type="text"
                            name="cardNumber"
                            placeholder="カード番号"
                            pattern="\d{13,16}"
                            title="13〜16桁の数字を入力してください"
                            required>

                        <!-- 有効期限 (MM/YY) -->
                        <input
                            type="text"
                            name="expiryDate"
                            placeholder="有効期限 (MM/YY)"
                            pattern="(0[1-9]|1[0-2])\/\d{2}"
                            title="MM/YY形式で入力してください (例: 12/34)"
                            required>

                        <!-- セキュリティコード -->
                        <input
                            type="text"
                            name="securityCode"
                            placeholder="セキュリティコード"
                            pattern="\d{3,4}"
                            title="3〜4桁の数字を入力してください"
                            required>
                    </div>
                    <label><input type="radio" name="payment" value="ソフトバンク・ワイモバイルまとめて支払い"> ソフトバンク・ワイモバイルまとめて支払い</label>
                </div>
            </section>

            <?php
            try {
                $pdo = new PDO(
                    'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553843-ochazon;charset=utf8',
                    'LAA1553843',
                    'pass0421'
                );

                $stmt3 = "SELECT image, product_name, price, size FROM productMg WHERE product_name = '玉露' and price = '740'";
                $result3 = $pdo->query($stmt3);
                $teaList3 = $result3->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo '<p>データベースエラー: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</p>';
                exit;
            }

            if (count($teaList3) > 0) {
                foreach ($teaList3 as $item2) {
                    echo '<div class="syousai">';
                    echo '<img src="' . htmlspecialchars($item2['image'], ENT_QUOTES, 'UTF-8') . '" alt="商品画像" class="gyokuro">';
                    echo '<div class="product-details">';
                    echo htmlspecialchars($item2['product_name'], ENT_QUOTES, 'UTF-8');
                    echo '<p>', htmlspecialchars($item2['product_name'], ENT_QUOTES, 'UTF-8'), " ", htmlspecialchars($item2['size'], ENT_QUOTES, 'UTF-8'), '</p>';
                    echo '<p>￥', htmlspecialchars($item2['price'], ENT_QUOTES, 'UTF-8'), '</p>';
                    echo '<div class="controls">';
                    echo '<label for="quantity">数量：</label>';
                    echo '<select id="quantity" name="quantity">';
                    echo '<option value="1">1</option>';
                    echo '<option value="2">2</option>';
                    echo '<option value="3">3</option>';
                    echo '<option value="4">4</option>';
                    echo '<option value="5">5</option>';
                    echo '</select>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>商品が見つかりません。</p>';
            }
            ?>


            <div class="submit">
                <button type="submit" class="submit-button">確認画面へ</button>
            </div>

        </form>
    </div>
</body>

</html>