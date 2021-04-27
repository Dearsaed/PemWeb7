<?php
  include 'koneksi.php';
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $kota = $_POST['kota'];
  $pesan = $_POST['pesan'];
// perintah untuk memasukkan data ke database
  $query="INSERT INTO data_kontak SET nama='$nama', jkel='$jenis_kelamin', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";

  mysqli_query($koneksi, $query);
  // menuju ke file tampilKontak.php
  header("location:tampilKontak.php");
?>
