<?php
$bln = date("M");
$hari = 31;
$hari1 =30;
$hari2 =28;
switch($bln)
{
case "Jan" : $namaBln = "januari";
$hari;
break;
case "Feb" : $namaBln = "Februari";
$hari2;
break;
case "Mar" : $namaBln = "Maret";
$hari;
break;
case "Apr" : $namaBln = "April";
$hari1;
break;
case "May" : $namaBln = "Mei";
$hari;
break;
case "Jun" : $namaBln = "Juni";
$hari1;
break;
case "Jul" : $namaBln = "Juli";
$hari;
break;
case "Agu" : $namaBln = "Agustus";
$hari1;
break;
case "Sep" : $namaBln = "Semptember";
$hari;
break;
case "Oct" : $namaBln = "oktober";
$hari;
break;
case "Nov" : $namaBln = "November";
$hari1;
break;
case "Des" : $namaBln = "Desmber";
$hari;
break;
}
echo "Nama bulan sekarang adalah :". $namaBln;
echo "dan ada ". $hari1;
echo "hari";
?>