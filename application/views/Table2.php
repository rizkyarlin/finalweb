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
                <div class="list-group">
                    <a class="list-group-item " href=<?php echo base_url() . "index.php/Detail/nim/" . $r->NIM;?> > <i class="fa fa-eye" ></i> </a>
                    <a class="list-group-item" href=<?php echo base_url(); ?>index.php/Table><i class="fa fa-pencil"></i></a>
                    <a class="list-group-item" href=<?php echo base_url(); ?>index.php/Table><i class="fa fa-trash"></i></a>
                </div>
                </td>

            </tr>
<?php
    }
?>
        </tbody>
    </table>