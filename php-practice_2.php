<?php
// Q1 tic-tac問題
function countTicTac($maxNum) {
  echo '1から' . $maxNum . 'までのカウントを開始します' . "\n";
  for ($i = 0; $i < $maxNum; $i++) {
    $arrayNum[$i] = $i + 1;

    if ($arrayNum[$i] % 4 === 0 && $arrayNum[$i] % 5 === 0) {
      echo 'tic-tac' . "\n";
    } else if ($arrayNum[$i] % 4 === 0) {
      echo 'tic' . "\n";
    } elseif ($arrayNum[$i] % 5 === 0) {
      echo 'tac' . "\n";
    } else {
      echo $arrayNum[$i] . "\n";
    }
  }
}
countTicTac(100);

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

//問題1
echo $personalInfos[1]['name'] . 'の電話番号は'
   . $personalInfos[1]['tel'] . 'です。';

//問題2
foreach ($personalInfos as $index => $val) {
  echo $index + 1 . '番目の' . $val['name']
     . 'のメールアドレスは' . $val['mail'] . 'で、電話番号は'
     . $val['tel'] . 'です。' . "\n";
}

//問題3
$ageList = [25, 30, 18];
foreach ($personalInfos as $index => $_) {
  $personalInfos[$index]['age'] = $ageList[$index];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($sbj)
    {
        echo $this->studentName . 'は' . $sbj
           . 'の授業に参加しました。'
           . '学籍番号：' . $this->studentId;
    }
}
$fujita = new Student(37, '藤田');
echo '学籍番号' . $fujita->studentId . '番の生徒は'
   . $fujita->studentName . 'です。';

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$dateSub1m = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$dateSub1m->modify('-1 month');
echo $dateSub1m->format('Y-m-d');

//問題2
$origin = new DateTimeImmutable('now', new DateTimeZone('Asia/Tokyo'));
$target = new DateTimeImmutable('1992-04-25');
$calcDiff = $origin->diff($target);
echo 'あの日から' . $calcDiff->format('%a日') . '経過しました。';

?>