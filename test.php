<?php

  // 1. FizzBuzz
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
      echo 'FizzBuzz';
      echo '<br>';
    } elseif ($i % 3 === 0) {
      echo 'Fizz';
      echo '<br>';
    } elseif ($i % 5 === 0) {
      echo 'Buzz';
      echo '<br>';
    } else {
      echo $i;
      echo '<br>';
    }
  }

  echo '<br><br>';


  // 2. 素数算出
  for ($i = 1; $i <= 10000; $i++) {
    $point = 0;
    for ($j = 1; $j <= $i; $j++) {
      if($i % $j === 0) {
        $point += 1;
      }
    }
    if ($point === 2) {
      echo $i;
      echo '<br>';
    }
  }

  echo '<br><br>';
  
  
  // 3. 5次元配列
  $fruitsPrice = [
    'orange' => [
      'domestic' => [
        'Wakayama' => [
          'size-s' => ['a-store' => 100, 'b-store' => 120],
          'size-m' => ['a-store' => 200, 'b-store' => 220],
        ],
        'Ehime' => [
          'size-s' => ['a-store' => 150, 'b-store' => 170],
          'size-m' => ['a-store' => 250, 'b-store' => 270],
        ],
      ],
      'foreign' => [
        'Brazil' => [
          'size-s' => ['a-store' => 300, 'b-store' => 320],
          'size-m' => ['a-store' => 350, 'b-store' => 370],
        ],
        'China' => [
          'size-s' => ['a-store' => 350, 'b-store' => 370],
          'size-m' => ['a-store' => 450, 'b-store' => 470],
        ],
      ],
    ],
    'banana' => [
      'domestic' => [
        'Okinawa' => [
          'size-s' => ['a-store' => 100, 'b-store' => 120],
          'size-m' => ['a-store' => 200, 'b-store' => 220],
        ],
        'Kagoshima' => [
          'size-s' => ['a-store' => 150, 'b-store' => 170],
          'size-m' => ['a-store' => 250, 'b-store' => 270],
        ],
      ],
      'foreign' => [
        'Philippines' => [
          'size-s' => ['a-store' => 300, 'b-store' => 320],
          'size-m' => ['a-store' => 350, 'b-store' => 370],
        ],
        'Ecuador' => [
          'size-s' => ['a-store' => 350, 'b-store' => 370],
          'size-m' => ['a-store' => 450, 'b-store' => 470],
        ],
      ],
    ],
  ];

  // ex)国内・和歌山産みかん（Sサイズ）のa店の値段を出力
  echo $fruitsPrice['orange']['domestic']['Wakayama']['size-s']['a-store'];