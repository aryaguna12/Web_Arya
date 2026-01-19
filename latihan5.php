<?php
$bln = date ("M");
switch($bln)
{
    case "jan" : $namaBln = "januari";
    break;
    case "feb" : $namaBln = "Februari";
    break;
    case "Mar" : $namaBln = "Maret";
    break;
    case "Apr" : $namaBln = "April";
    break;
    case "May" : $namaBln = "Mai";
    break;
    case "Jun" : $namaBln = "Juni";
    break;
    case "Jul" : $namaBln = "Juli";
    break;
    case "Aug" : $namaBln = "Agustus";
    break;
    case "Oct" : $namaBln = "Oktober"
    break;
    case "Nov" : $namaBln = "November";
    break;
    case "Dec" : $namaBln = "Desember";
    break;
}
 echo "Nama Bulan Sekarang adalah :".$namaBln;    
 ?>