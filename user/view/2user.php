
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="../style/2user.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>OCHAZON</h1>
        </div>
        <div class="content">
            <a href="1login.php" class="back-link">＜ 前のページ</a>
            <h2>ユーザー登録</h2>

            <form action="3check.php" method="post" class="registration-form">
                <label for="username">ユーザー名</label>
                <input type="text" id="username" name="username">

                <label for="email">メールアドレスまたは携帯電話番号</label>
                <input type="email" id="email" name="email">

                <label for="password">パスワードの設定</label>
                <input type="password" id="password" name="password">

                <label for="last-name">姓（漢字）</label>
                <input type="text" id="last-name" name="last-name">

                <label for="first-name">名（漢字）</label>
                <input type="text" id="first-name" name="first-name">

                <label for="last-name-kana">姓（カタカナ）</label>
                <input type="text" id="last-name-kana" name="last-name-kana">

                <label for="first-name-kana">名（カタカナ）</label>
                <input type="text" id="first-name-kana" name="first-name-kana">

                <label for="postal-code">郵便番号（半角数字）</label>
                <input type="text" id="postal-code" name="postal-code">

                <label for="prefecture">都道府県</label>
                <select id="prefecture" name="prefecture">
                    <option value="">選択してください</option>
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
                    <option value="沖縄県">沖縄県</option><br><br>
                    <!-- 他の都道府県を追加 -->
                </select>

                <label for="city">市区町村</label>
                <input type="text" id="city" name="city">

                <label for="address">丁目・番地・号（数字は半角）</label>
                <input type="text" id="address" name="address">

                <label for="building">建物名／部屋番号</label>
                <input type="text" id="building" name="building">

                <button class="submit-button">確認に進む</button>
            </form>
        </div>
    </div>
</body>
</html>
