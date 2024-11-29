// 日時を表示する関数
function displayCurrentDateTime() {
    const weeks = ['日', '月', '火', '水', '木', '金', '土'];
    const now = new Date();

    let year = now.getFullYear(); // 年
    let month = now.getMonth() + 1; // 月
    let day = now.getDate(); // 日
    let week = weeks[now.getDay()]; // 曜日
    let hour = now.getHours(); // 時
    let min = now.getMinutes(); // 分
    let sec = now.getSeconds(); // 秒

    // 数値が1桁の場合、頭に0を付ける
    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;
    if (hour < 10) hour = "0" + hour;
    if (min < 10) min = "0" + min;
    if (sec < 10) sec = "0" + sec;

    // 日時の文字列を生成
    const formattedDateTime = `${year}年${month}月${day}日（${week}） ${hour}時${min}分${sec}秒`;
    
    // 指定された要素に日時を表示
    const dateElement = document.getElementById('current-date');
    if (dateElement) {
        dateElement.value = formattedDateTime; // inputのvalueに設定
    }
}

// ページロード時に日時を表示
window.onload = function() {
    displayCurrentDateTime();
};
