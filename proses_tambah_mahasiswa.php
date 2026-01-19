<?php
include 'koneksi.php';
nim=$_POST['nim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jkl=$_POST['jkl'];

$sql = "INSERT INTO mahasiswa (NIM, NAMA,ALAMAT,JKL )
VALUES ('$nim', '$nama', '$alamat','$jkl')";

if ($conn->query($sql) === TRUE) {
  
  header('location:form.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>                                