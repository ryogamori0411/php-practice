<?php
// Q1 変数と文字列

$Name = '森';
echo('私の名前は「' . $Name . '」です。');

// Q2 四則演算


$Num = 5*4;
echo($Num. "\n".$Num/2);

// Q3 日付操作


date_default_timezone_set('Asia/Tokyo');
echo('現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。');

// Q4 条件分岐-1 if文


$device = 'pasokon';

if ($device === 'mac' || $device === 'windows'){
  echo ('使用OSは、' . $device . 'です。');
  } else {
      echo 'どちらでもありません。';
    }



// Q5 条件分岐-2 三項演算子

$age = 20;
echo ($age < 18) ? "未成年です。" : "成人です。";

// Q6 配列

$prefecture = ['東京都', '神奈川県', '栃木県', '千葉県'];

echo $prefecture[2] . "と" . $prefecture[3] . "は" . "関東地方の都道府県です。";






// Q7 連想配列-1

$kanto_kencho = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県'=> 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    ];
    
   
foreach ($kanto_kencho as $kencho) {
    echo $kencho . "\n";
}



// Q8 連想配列-2
foreach ($kanto_kencho as $kanto => $kencho) {
  if ($kanto === '埼玉県'){
    echo $kanto . 'の県庁所在地は、' . $kencho . 'です。';
  }


}

// Q9 連想配列-3

$kanto_kencho['北海道'] = '札幌市';
$kanto_kencho['沖縄県'] = '那覇市';

foreach ($kanto_kencho as $kanto => $kencho) {
    if ($kanto === '北海道' || $kanto === '沖縄県'){
        echo $kanto . 'は関東地方ではありません' . "\n" ;
    }else{
        echo $kanto . 'の県庁所在地は、' . $kencho . 'です。' . "\n";
    }
};

// Q10 関数-1
function hello($name)
    {
        echo $name . 'さん、こんにちは。'. "\n" ;
    }
    

hello('森');
hello('林');

// Q11 関数-2
function calcTaxInPrice($price)
    {
        $taxInPrice = ($price * 1.1);
       echo $price . '円の商品の税込み価格は'. $taxInPrice . '円です。';
    };
    
    calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($num)
    {
        $remainder = ($num % 2);
        if ($remainder === 1) {
            echo $num . 'は奇数です。';
        }else{
            echo $num . 'は偶数です。';
        }
    };
    
    distinguishNum(5);

    distinguishNum(10);
    

// Q13 関数とswitch文
function evaluateGrade($Grade){
    switch ($Grade) {
        case 'A':
        case 'B':    
            return '合格です。';
            break;
        
        case 'C':
            return '合格ですが追加課題があります。';
            break;
            
            
        case 'D':
            return '不合格です。';
            break;    
            
            
        default :
            return '判定不明です。講師に問い合わせてください。';
            break;
            
        }
};

echo evaluateGrade('A');

echo evaluateGrade('森');

?>