<?php
function isPalindromeInteger(int $n){
  //数値を文字列へ変換
  $numberText = (string)$n;

  //文字列の長さstrlen($numberText)を変数$lenNumberへ代入
  $lenNumber = strlen($numberText);

  //端から文字列のサイズの半分まで調べる
  for($i = 0; $i < floor($lenNumber / 2); $i++) {

    //違う文字が出現したらfalseを返す
    if ($numberText[$i] != $numberText[$lenNumber  - ($i + 1)]) {
        return false;
    }
  }
  return true;
}

echo isPalindromeInteger(12222) . "\n";
echo isPalindromeInteger(12321) . "\n";
echo isPalindromeInteger(22782) . "\n";
echo isPalindromeInteger(189981) . "\n";
echo isPalindromeInteger(1) . "\n";
echo isPalindromeInteger(987823) . "\n";