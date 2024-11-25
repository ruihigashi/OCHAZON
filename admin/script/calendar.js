// 曜日の定義
const week = ["日", "月", "火", "水", "木", "金", "土"];

// 今日の日付
var today = new Date();

// 表示用の日付
var showDate = new Date(today.getFullYear(), today.getMonth(), 1);

// 表示された時
window.onload = function () {
  // カレンダーの表示（引数には表示用の日付を設定）
  showCalendar(showDate);
};

/**
 * カレンダーの表示
 */
function showCalendar(date) {
  // 年
  var year = date.getFullYear();
  // 月
  var month = date.getMonth() + 1;
  
  // ヘッダーの年月に表示する文字列
  var showDateStr = year + "年 " + month + "月";
  
  // ヘッダーの年月部分に埋め込み
  document.querySelector('#year_month_label').innerHTML = showDateStr;
  
  // カレンダーテーブルを作成する（HTMLが返却される）
  var calendarTable = createCalendarTable(year, month);
  
  // カレンダー表示部分に埋め込み
  document.querySelector('#calendar_body').innerHTML = calendarTable;
}

/**
 * カレンダーテーブルの作成
 */
function createCalendarTable(year, month) {
  // HTML用の変数
  var _html = '';
  
  // tableタグ
  _html += '<table class="calendar_tbl">';
  
  // テーブルのヘッダー（曜日）
  _html += '<tr>';
  for (var i = 0; i < week.length; i++) {
    _html += "<th>" + week[i] + "</th>";
  }
  _html += '</tr>';
  
  // ---------------------
  
  // 表示するカレンダー年月の1日の曜日を取得
  var startDayOfWeek = new Date(year, month - 1, 1).getDay();
  
  // 日付
  var countDay = 0;
  
  // 月の末日
  var monthOfEndDay = new Date(year, month, 0).getDate()
  
  // 6行分繰り返し
  for (var i = 0; i < 6; i++) {
    _html += '<tr>';
    
    // 7列（曜日の数）分繰り返し
    for (var j = 0; j < week.length; j++) {
      // １行目で開始曜日と同じ場合
      if (i == 0 && j == startDayOfWeek) {
        // 日付+1
        countDay++;
        // tdタグ（日付有りが分かるようにクラス属性に"with_date"を設定）
        _html += '<td class="with_date">' + countDay + '</td>';
      }
      // 日付が0以外で、日付が末日より小さい場合
      else if (countDay != 0 && countDay < monthOfEndDay) {
        // 日付+1
        countDay++;
        // tdタグ（日付有りが分かるようにクラス属性に"with_date"を設定）
        _html += '<td class="with_date">' + countDay + '</td>';
      }
      else {
        // tdタグ（日付無しが分かるようにクラス属性に"no_date"を設定）
        _html += '<td class="no_date"></td>';
      }
    }
    _html += '</tr>';
  }
  _html += '</table>';
  
  // 組み立てたHTMLを返却
  return _html;
}