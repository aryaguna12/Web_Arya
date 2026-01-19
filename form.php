
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td { border: 1px solid black;
}
</style>
</head>
<body>

<h2>inpu data mahasiswa</h2>

<form action="proses_edit.php" METHOD ="POST">

  <label for="nama"> nim :</label><br>
  <input type="number" id="nim" name="nim" value=""><br>

  <label for="alamat"> nama:</label><br>
  <input type="text" id="nama" name="nama" value=""><br><br>

  <label for="alamat">alamat :</label><br>
  <input type="text" id="alamat " name="alamat" value=""><br><br>

  <label for="nama">jenis kelamin :</label><br>
  <select id ="jkl" name ="jkl">

  <option value ="">pilih</option>
  <option value ="laki-laki">laki - laki</option>
  <option value ="perempuan">perempuan</option>
</select>
<br><br>


  <input type="submit" value="tambah data">
</form>     
<br>
<?php

include'koneksi.php';
$sql = "SELECT  * FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table><tr>
    <th>NIM</th>
    <th>NAMA</th>
    <th>ALAMAT</th>
    <th>JKL</th>
    <th>AKSI</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["NIM"]. "</td>
        <td>" . $row["NAMA"]. "</td>
        <td>" . $row["ALAMAT"]. "</td>
        <td>" . $row["JKL"]. "</td>

        <td>
         <a href='edit.php?nim=". $row['NIM']."'> EDIT </a> |
           <a href='hapus.php?nim=". $row['NIM']."'> HAPUS </a> 
         </td>

        </tr>"; 
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<p>data yang dimasukan akan dikirim ke "proses_tambah_mahasiswa.php"</p>

</body>
</html>