<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit mahasiswa</title>
</head>
<body>

<?php
include 'koneksi.php';
$nim=$_GET['nim'];
$sql = "SELECT * FROM mahasiswa WHERE NIM ='$nim'";
$hasil= mysqli_query($conn,$sql);
$data= mysqli_fetch_assoc($hasil);
?>
<h2>Edit data mahasiswa</h2>
<form action="proses_edit.php" METHOD ="POST">

  <label for="nama"> nim :</label><br>
  <input type="number" id="nim" name="nim" value="<?php echo $data['NIM']; ?>"> <br>

  <label for="alamat"> nama:</label><br>
  <input type="text" id="nama" name="nama" value="<?php echo $data['NAMA']; ?>"> <br> <br>

  <label for="alamat">alamat :</label><br>
  <input type="text" id="alamat " name="alamat" value="<?php echo $data['ALAMAT']; ?>"> <br> <br>

  <label for="nama">jenis kelamin :</label><br>
  <select id ="jkl" name ="jkl">

  <option value ="<?php echo $data['JKL']; ?>"><?php echo $data['JKL']; ?> </option>
  <option value ="laki-laki">laki - laki</option>
  <option value ="perempuan">perempuan</option>
</select>
<br><br>


  <input type="submit" value="simpan data">
</form>        
</body>
</html>