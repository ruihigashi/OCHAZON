<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>注文確認</title>
    <link rel="stylesheet" href="../style/confirm.css">
</head>

<body>
    <div class="container">
        <div class="header-bar">
            <img src="../images/Image.png" alt="お茶の画像" class="product-image">
        </div>

        <a href="hilogin.php" class="back-link">＜ 前のページ</a>

        <h2>入力情報確認</h2>

        <!-- お届け先情報 -->
        <section class="section">
            <h3>お届け先情報</h3>
            <?php
            echo '<p><strong>姓（漢字）：', $_POST['last-name'], '</strong></p>';
            echo '<p><strong>名（漢字）：', $_POST['first-name'], '</strong></p>';
            echo '<p><strong>姓（カタカナ）：', $_POST['last-name-kana'], '</strong></p>';
            echo '<p><strong>名（カタカナ）：', $_POST['first-name-kana'], '</strong></p>';
            echo '<p><strong>郵便番号：', $_POST['postal-code'], '-', $_POST['postal-code2'], '</strong></p>';
            echo '<p><strong>住所：', $_POST['prefecture'], $_POST['address'], $_POST['street'], $_POST['building'], '</strong></p>';
            echo '<p><strong>電話番号：', $_POST['phone'], '</strong></p>';
            ?>
        </section>

        <!-- 支払い方法 -->
        <section class="section">
            <h3>お支払い方法</h3>
            <?php
            echo '<p><strong>クレジットカード番号：', $_POST['cardNumber'], '</strong></p>';
            echo '<p><strong>有効期限：', $_POST['expiryDate'], '</strong></p>';
            echo '<p><strong>セキュリティコード：', $_POST['securityCode'], '</strong></p>';
            ?>
        </section>

        <!-- 注文内容 -->
<?php
try {
    $pdo = new PDO(
        'mysql:host=mysql309.phy.lolipop.lan;dbname=LAA1553843-ochazon;charset=utf8',
        'LAA1553843',
        'pass0421'
    );
    $stmt4 = "SELECT image, product_name, price, size FROM productMg WHERE product_name = '玉露' AND price = '740'";
    $result4 = $pdo->query($stmt4);
    $teaList4 = $result4->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo '<p>データベースエラー: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</p>';
    exit;
}

if ($teaList4 && count($teaList4) > 0) {
    foreach ($teaList4 as $item3) {
        echo '<div class="syousai">';
        echo '<img src="' . htmlspecialchars($item3['image'], ENT_QUOTES, 'UTF-8') . '" alt="商品画像" class="gyokuro">';
        echo '<div class="product-details">';
        echo '<p><strong>' . htmlspecialchars($item3['product_name'], ENT_QUOTES, 'UTF-8') . '</strong></p>';
        echo '<p><strong>' . htmlspecialchars($item3['size'], ENT_QUOTES, 'UTF-8') . ' × ' . htmlspecialchars($_POST['quantity'] ?? '', ENT_QUOTES, 'UTF-8') . '</strong></p>';
        echo '<p>￥' . htmlspecialchars($item3['price'], ENT_QUOTES, 'UTF-8') . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>商品が見つかりません。</p>';
}
?>


    <!-- ボタン -->
    <div class="button-group">
        <button onclick="confirmOrder()">購入を確定する</button>
    </div>
    </div>

    <script>
        // 前のページから入力内容を取得して表示
        window.onload = function() {
            const params = new URLSearchParams(location.search);
            document.getElementById('confirm-last-name').textContent = params.get('lastName');
            document.getElementById('confirm-first-name').textContent = params.get('firstName');
            document.getElementById('confirm-last-name-kana').textContent = params.get('lastNameKana');
            document.getElementById('confirm-first-name-kana').textContent = params.get('firstNameKana');
            document.getElementById('confirm-postal-code').textContent = params.get('postalCode');
            document.getElementById('confirm-address').textContent = params.get('address');
            document.getElementById('confirm-phone').textContent = params.get('phone');
            document.getElementById('confirm-payment-method').textContent = params.get('payment');
            document.getElementById('confirm-quantity').textContent = params.get('quantity');
        };

        // 注文確定アラート
        function confirmOrder() {
            alert('注文が確定しました！');
            window.location.href = 'home.html'; // home.html に遷移
        }
    </script>

</body>


</html>