<h4>menghitung nilai</h2>
<h5>
<form method="post">
<input type ="number" name="r" placeholder= "masukan nilain R"> <br> <br>
<input type ="number" name="s" placeholder= "Masukan Nilai S"> <br> <br>
<label for ="operasi"> Pilih Operasi Yang Diinginkan :</label> <br>
<select name="operasi" id="operas">
    <option value="luasalas"> Luas Alas </option>
    <option value="luaspermukaan"> Luas Permukaan </option>
</select> <br> <br>
<input type ="submit" name="submit" value= "Tampilkan Hasil"> 
</form>
<?php
if(isset($_POST['submit'])){

$s=$_POST['s'];
$r=$_POST['r'];
$luasalas1=pi()*pow($r,2);
$luasalas =pi()*$r*$r;
    
$luaspermukaan= $luasalas1+pi()*$r*$s;
echo "Panjang S =", $s, "<br>";
echo "Panjang R =", $r, "<br>";
echo "Phi =", pi(), "<br>"; 
echo "==================== <br>";
echo "Luas Alas = ", $luasalas,"<br>";
    
echo "===================== <br>";
echo "Luas Permukaan = ", $luaspermukaan;


}
?>