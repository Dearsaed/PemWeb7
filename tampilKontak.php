<!DOCTYPE html>
<html>
  <head>
    <title>Tampil Data</title>
  </head>
  <body>
    <h2>List Mahasiswa</h2>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>KOTA</th>
        <th>PESAN</th>
      </tr>
      <?php
        include 'koneksi.php';
        $data_kontak = mysqli_query($koneksi, "SELECT * FROM data_kontak");
        $no = 1;
        foreach ($data_kontak as $row) {
          echo "<tr>
          <td>$no</td>
          <td>".$row['nama']."</td>
          <td>".$row['jkel']."</td>
          <td>".$row['email']."</td>
          <td>".$row['alamat']."</td>
          <td>".$row['kota']."</td>
          <td>".$row['pesan']."</td>
          </tr>";
          $no++;
        }
      ?>
    </table>
  </body>
</html>
