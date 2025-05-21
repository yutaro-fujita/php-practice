<?php
// Q1 変数と文字列
$name = '藤田';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num;
$num /= 2;
echo $num;

// Q3 日付操作
date_default_timezone_set("Asia/Tokyo");
echo '現在時刻は、' . date('Y年m月d日 H時m分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device === 'mac') {
  echo '使用OSは、' . $device . 'です。';
} else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 18;
echo $age >= 18 ? '成人です。' : '未成年です。';

// Q6 配列
$prefectures = ['東京都', '神奈川県', '千葉県', '埼玉県', '群馬県', '栃木県', '茨城県'];
echo $prefectures[2] . 'と' . $prefectures[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefAndCity = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '群馬県' => '宇都宮市',
  '栃木県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($prefAndCity as $city) {
  echo $city . "\n";
}

// Q8 連想配列-2
function searchByKey($prefName) {
  global $prefAndCity;
  foreach ($prefAndCity as $key => $val) {
    if ($prefName === $key) {
      echo $key . 'の県庁所在地は、' . $val . 'です。';
      break;
    };
  };
}
searchByKey('埼玉県');

// Q9 連想配列-3
define('KANTO_LIST', $prefAndCity);

$prefAndCity['北海道'] = '札幌市';
$prefAndCity['沖縄県'] = '那覇市';

function checkKanto($prefName) {
  $match = null;

  foreach (KANTO_LIST as $key => $_) {
    if ($prefName === $key) {
      $match = $key;
      break;
    }
  }

  if ($match) {
    echo $match . 'の県庁所在地は、' . KANTO_LIST[$match] . 'です。' . "\n";
  } else {
    echo $prefName . 'は関東地方ではありません。' . "\n";
  }
}

foreach ($prefAndCity as $key => $_) {
  checkKanto($key);
}

// Q10 関数-1
function hello($name) {
  return $name . 'さん、こんにちは。';
}
echo hello('田中');
echo hello('佐藤');

// Q11 関数-2
function calcTaxInPrice($base) {
  return $base * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum ($input) {
  if (get_debug_type($input) !== 'int') {
    return;
  } elseif ($input % 2 === 0) {
    return $input . 'は偶数です。';
  } else {
    return $input . 'は奇数です。';
  }
}
echo distinguishNum(10);
echo distinguishNum(9);

// Q13 関数とswitch文
function evaluateGrade($score) {
  switch ($score) {
    case 'A':
    case 'B':
      return '合格です。';

    case 'C':
      return '合格ですが追加課題があります。';
    
    case 'D':
      return '不合格です。';
    
    default:
      return '判定不明です。講師に問い合わせてください。';
  }
}

echo evaluateGrade('B');
echo evaluateGrade('例外');

?>