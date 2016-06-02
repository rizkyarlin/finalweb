<table id="data-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NAMA</th>  
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal</th>
                <th>Golongan Darah</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Action</th>
            
            </tr>
        </thead>
        <tbody>
<?php
    foreach ($query as $r) {
?>
            <tr>
                <td><?php echo $r->Nama; ?></td>
                <td><?php echo $r->NIM; ?></td>
                <td><?php echo $r->Jenis_Kelamin; ?></td>
                <td><?php echo $r->Tempat_Lahir; ?></td>
                <td><?php echo $r->Tanggal; ?></td>
                <td><?php echo $r->Golongan_Darah; ?></td>
                <td><?php echo $r->Prodi; ?></td>
                <td><?php echo $r->Angkatan; ?></td>
                <td>
                    <i class="fa fa-eye"></i>
                    <i class="fa fa-pencil"></i>
                    <i class="fa fa-trash"></i>
                </td>

            </tr>
<?php
    }
?>
        </tbody>
    </table>