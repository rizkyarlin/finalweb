<!DOCTYPE html>
<html>
<head>
  <title> Biodata Pribadi </title>
</head>
<body>
<table>
<h1>Tabel Biodata Mahasiswa</h1>
  <tr>
    <th>NAMA</th>  
    <th>NIM</th>
    <th>Jenis Kelamin</th>
    <th>Tempat Lahir</th>
    <th>Tanggal</th>
    <th>Golongan Darah</th>
    <th>Prodi</th>
    <th>Angkatan</th>
  </tr>
  <?php
    foreach ($query as $r) {
        echo "<tr>";
        echo "<td>";
        echo $r->Nama;
        echo "</td>";
        echo "<td>";
        echo $r->NIM;
        echo "</td>";
        echo "<td>";
        echo $r->Jenis_Kelamin;
        echo "</td>";
        echo "<td>";
        echo $r->Tempat_Lahir;
        echo "</td>";
        echo "<td>";
        echo $r->Tanggal;
        echo "</td>";
        echo "<td>";
        echo $r->Golongan_Darah;
        echo "</td>";
        echo "<td>";
        echo $r->Prodi;
        echo "</td>";
        echo "<td>";
        echo $r->Angkatan;
        echo "</td>";
        echo "</tr>";
      }
  ?>
  </tr>
  
  <p><?php echo anchor('Form', 'Registrasi!'); ?></p>
  
</table>
</body>
</html>