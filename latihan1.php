<?php
$a="9";
$b="2.5";
$komentar="selamat datang";
//variabel bertipe interger
echo ("Nilai variabel a adalah = $a <br> ");
//variabel bertipe real
echo ("Nilai variabel b adalah = $b <br> ");
// variabel bertipe string
echo ("Nilai variabel komentar adalah = $komentar<br>");
//=============================================
//rumus penjumlahan 
$tambah= $a + $b;
//rumus pengurangan
$kurang= $a - $b;
//rumus perkalian 
$kali= $a * $b;
//rumus pembagian 
$bagi= $a / $b;

echo ("Hasil penjumlahan a dan b adalah = $tambah <br> ");
echo ("Hasil pengurangan a dan b adalah = $kurang <br> ");
echo ("Hasil perkalian a dan b adalah = $kali <br>");
echo ("Hasil pembagian a dan b adalah = $bagi <br>");
$nama = "RPL";
$garis= "=====================================";
echo "<p>";
echo $garis. "<br>";
echo $komentar. "Di lab ", $nama."<br>Selamat Belajar Pemrograman Web <br>";
echo $garis."<br>";
?>