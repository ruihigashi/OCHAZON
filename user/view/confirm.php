
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>注文確認</title>
    <link rel="stylesheet" href="/user/style/confirm.css">
</head>
<body>
    <div class="container">
      <div class="header-bar">
        <div class="ocya"><img src="/user/images/Image.png" alt="お茶の画像" class="product-image"></div>
    </div>
        <h2>入力情報確認</h2>

        <!-- お届け先情報 -->
        <section class="section">
            <h3>お届け先情報</h3>
            <p>姓（漢字）：<span id="confirm-last-name"></span></p>
            <p>名（漢字）：<span id="confirm-first-name"></span></p>
            <p>姓（カタカナ）：<span id="confirm-last-name-kana"></span></p>
            <p>名（カタカナ）：<span id="confirm-first-name-kana"></span></p>
            <p>郵便番号：<span id="confirm-postal-code"></span></p>
            <p>住所：<span id="confirm-address"></span></p>
            <p>電話番号：<span id="confirm-phone"></span></p>
        </section>

        <!-- 支払い方法 -->
        <section class="section">
            <h3>お支払い方法</h3>
            <p id="confirm-payment-method"></p>
        </section>

        <!-- 注文内容 -->
        <div class="syousai">
            <img src="/user/images/Image.png" alt="お茶の画像" class="product-image">
            <div class="product-details">
                <p>はーいお茶 600mlペットボトルx24本 (2ケース)</p>
                <p>パターン：ラベルあり サイズ：600ml×48本</p>
                <div class="controls">
                    <label for="quantity">数量：</label>
                    <span id="confirm-quantity"></span>
                </div>
            </div>
        </div>
        <div class="syousai">
          <img src="/user/images/Image.png" alt="お茶の画像" class="product-image">
          <div class="product-details">
              <p>はーいお茶 600mlペットボトルx24本 (2ケース)</p>
              <p>パターン：ラベルあり サイズ：600ml×48本</p>
              <div class="controls">
                  <label for="quantity">数量： 2</label>
                  <span id="confirm-quantity"></span>
              </div>
          </div>
      </div>

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
        }
    </script>
</body>
</html>
