<div class="container">
        <div class="col-md-12">
         <fieldset>
         <legend>Masukkan Data Mahasiswa</legend>
            <table>
              <tr>
                <td>NAMA</td>
                <td><?php echo $query[0]->Nama;?></td>
              </tr>
              <tr>
                <td>NIM</td>
                <td><?php echo $query[0]->NIM;?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $query[0]->Jenis_Kelamin;?></td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td><?php echo $query[0]->Tempat_Lahir;?></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td><?php echo $query[0]->Tanggal_Lahir;?></td>
              </tr>
              <tr>
                <td>Golongan Darah</td>
                <td><?php echo $query[0]->Golongan_Darah;?></td>
              </tr>
              <tr>
                <td>Prodi</td>
                <td><?php echo $query[0]->Prodi;?></td>
              </tr>
              <tr>
                <td>Angkatan</td>
                <td><?php echo $query[0]->Angkatan;?></td>
              </tr>

            </table>
            </fieldset>
            </div>
            </div>