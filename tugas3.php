<?php
$nilai =250;
if($nilai <= 100){
  echo "Harga : Rp. 150,-/lembar";
}elseif ($nilai <= 200){
  echo "Harga : Rp. 100,-/lembar";
}else{
  echo "Harga : Rp. 80,-/lembar";
}
?>