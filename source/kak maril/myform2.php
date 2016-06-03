<div class="container">
        <div class="col-md-12">
         <fieldset>
         <legend>Masukkan Data Mahasiswa</legend>
            <form action="<?php echo base_url(); ?>index.php/Table/post" class="form-horizontal" role="form" method="post">
             <div class="form-group">
                <label class="col-md-3 control-label">Nama</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>"/>
                  <?php echo form_error('name', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div> 

              <div class="form-group">
                <label  class="col-md-3 control-label">NIM</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="nim" value="<?php echo set_value('nim'); ?>"/>
                  <?php echo form_error('nim', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Jenis Kelamin</label>
                <div class="col-md-6">
                  <label class="radio-inline"><input type="radio" name="gender" value="Laki-Laki" <?php echo set_radio('gender', 'Laki-Laki', TRUE); ?> />Laki-Laki</label>
                  <label class="radio-inline"><input type="radio" name="gender" value="Perempuan" <?php echo set_radio('gender', 'Perempuan'); ?> />Perempuan</label>
                  <?php echo form_error('gender', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Provinsi Tempat Lahir</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="provinsi_tempatlahir" value="<?php echo set_value('provinsi_tempatlahir'); ?>"/>
                  <?php echo form_error('provinsi_tempatlahir', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Kota Tempat Lahir</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="kota_tempatlahir" value="<?php echo set_value('kota_tempatlahir'); ?>"/>
                  <?php echo form_error('kota_tempatlahir', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Tempat Lahir</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="place" value="<?php echo set_value('place'); ?>"/>
                  <?php echo form_error('place', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label for="lastName" class="col-md-3 control-label">Tanggal Lahir</label>
                <div class="col-md-6">
                <input type="text" id="datepicker" class="form-control" name="date" value="<?php echo set_value('date'); ?>"/>
                <?php echo form_error('date', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Golongan Darah</label>
                <div class="col-md-6">
                  <select class="form-control" name="goldar">
                       <option value="O" <?php echo set_select('goldar', 'O', TRUE);?> >O</option>
                       <option value="A" <?php echo set_select('goldar', 'A');?> >A</option>
                       <option value="B" <?php echo set_select('goldar', 'B');?> >B</option>
                       <option value="AB" <?php echo set_select('goldar', 'AB');?> >AB</option>
                  </select>
                  <?php echo form_error('goldar', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label for="lastName" class="col-md-3 control-label">Program Studi</label>
                <div class="col-md-6">
                  <select class="form-control" name="prodi">
                      <option value="Elektro" <?php echo  set_select('prodi', 'Elektro', TRUE); ?> >Elektro</option>
                      <option value="Mesin" <?php echo  set_select('prodi', 'Mesin'); ?> >Mesin</option>
                      <option value="Sipil" <?php echo  set_select('prodi', 'Sipil'); ?> >Sipil</option>
                      <option value="Arsitektur" <?php echo  set_select('prodi', 'Arsitektur'); ?> >Arsitektur</option>
                      <option value="Industri" <?php echo  set_select('prodi', 'Industri'); ?> >Industri</option>
                      <option value="Pertambangan" <?php echo  set_select('prodi', 'Pertambangan'); ?> >Pertambangan</option>
                      <option value="Geologi" <?php echo  set_select('prodi', 'Geologi'); ?> >Geologi</option>
                      <option value="PWK" <?php echo  set_select('prodi', 'PWK'); ?> >PWK</option>
                      <option value="Perkapalan" <?php echo  set_select('prodi', 'Perkapalan'); ?> >Perkapalan</option>
                      <option value="Kelautan" <?php echo  set_select('prodi', 'Kelautan'); ?> >Kelautan</option>
                      <option value="Sistem Perkapalan" <?php echo  set_select('prodi', 'Sistem Perkapalan'); ?> >Sistem Perkapalan</option>
                      <option value="Lingkungan" <?php echo  set_select('prodi', 'Lingkungan'); ?> >Lingkungan</option>
                      <option value="Informatika" <?php echo  set_select('prodi', 'Informatika'); ?> >Informatika</option>
                  </select>
                  <?php echo form_error('prodi', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label for="lastName" class="col-md-3 control-label">Angkatan</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="datepicker1" name="angkatan" value="<?php echo set_value('angkatan'); ?>"/>
                  <?php echo form_error('angkatan', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Periode Masuk</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="periode" value="<?php echo set_value('periode'); ?>"/>
                  <?php echo form_error('periode', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">No. Test</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="notest" value="<?php echo set_value('notest'); ?>"/>
                  <?php echo form_error('notest', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Jalur Masuk</label>
                <div class="col-md-6">
                  <select class="form-control" name="jalur">
                       <option value="SNMPTN" <?php echo set_select('jalur', 'SNMPTN
                       ', TRUE);?> >SNMPTN</option>
                       <option value="SBMPTN" <?php echo set_select('jalur', 'SBMPTN');?> >SBMPTN</option>
                       <option value="JALUR MANDIRI" <?php echo set_select('jalur', 'JALUR MANDIRI');?> >JALUR MANDIRI</option>
                  </select>
                  <?php echo form_error('jalur', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>              

              <div class="form-group">
                <label class="col-md-3 control-label">Tanggal Daftar</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="tgl_daftar" value="<?php echo set_value('tgl_daftar'); ?>"/>
                  <?php echo form_error('tgl_daftar', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Gelombang Pendaftaran</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="gel_pendaftaran" value="<?php echo set_value('gel_pendaftaran'); ?>"/>
                  <?php echo form_error('gel_pendaftaran', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Status Masuk</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="status_masuk" value="<?php echo set_value('status_masuk'); ?>"/>
                  <?php echo form_error('status_masuk', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Agama</label>
                <div class="col-md-6">
                  <select class="form-control" name="agama">
                       <option value="ISLAM" <?php echo set_select('agama', 'ISLAM
                       ', TRUE);?> >ISLAM</option>
                       <option value="KATHOLIK" <?php echo set_select('agama', 'KATHOLIK');?> >KATHOLIK</option>
                       <option value="PROTESTAN" <?php echo set_select('agama', 'PROTESTAN');?> >PROTESTAN</option>
                       <option value="HINDU" <?php echo set_select('agama', 'HINDU');?> >HINDU</option>
                       <option value="BUDHA" <?php echo set_select('agama', 'BUDHA');?> >BUDHA</option>
                       <option value="LAIN-LAIN" <?php echo set_select('agama', 'LAIN-LAIN');?> >LAIN-LAIN</option>
                  </select>
                  <?php echo form_error('agama', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>              

              <div class="form-group">
                <label class="col-md-3 control-label">Status Nikah</label>
                <div class="col-md-6">
                  <select class="form-control" name="status_nikah">
                       <option value="Belum Kawin" <?php echo set_select('status_nikah', 'Belum Kawin', TRUE);?> >Belum Kawin</option>
                       <option value="Sudah Kawin" <?php echo set_select('status_nikah', 'Sudah Kawin');?> >Sudah Kawin</option>
                       <option value="Duda / Janda" <?php echo set_select('status_nikah', 'Duda / Janda');?> >Duda / Janda</option>
                       <option value="Suami / Istri Meninggal" <?php echo set_select('status_nikah', 'Suami / Istri Meninggal');?> >Suami / Istri Meninggal</option>
                  </select>
                  <?php echo form_error('status_nikah', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>              

              <div class="form-group">
                <label class="col-md-3 control-label">Kewarganegaraan</label>
                <div class="col-md-6">
                  <select class="form-control" name="kewarganegaraan">
                       <option value="WNI" <?php echo set_select('kewarganegaraan', 'WNI', TRUE);?> >WNI</option>
                       <option value="WNA" <?php echo set_select('kewarganegaraan', 'WNA');?> >WNA</option>
                       <option value="TIDAK PUNYA WN" <?php echo set_select('kewarganegaraan', 'TIDAK PUNYA WN');?> >TIDAK PUNYA WN</option>
                  </select>
                  <?php echo form_error('kewarganegaraan', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>              

              <div class="form-group">
                <label class="col-md-3 control-label">Status Rumah</label>
                <div class="col-md-6">
                  <select class="form-control" name="status_rumah">
                       <option value="Rumah Orang Tua" <?php echo set_select('status_rumah', 'Rumah Orang Tua', TRUE);?> >Rumah Orang Tua</option>
                       <option value="Rumah Saudara" <?php echo set_select('status_rumah', 'Rumah Saudara');?> >Rumah Saudara</option>
                       <option value="Asrama" <?php echo set_select('status_rumah', 'Asrama');?> >Asrama</option>
                       <option value="Pondokan" <?php echo set_select('status_rumah', 'Pondokan');?> >Pondokan</option>
                       <option value="Rumah Sendiri" <?php echo set_select('status_rumah', 'Rumah Sendiri');?> >Rumah Sendiri</option>
                       <option value="Lain-Lain" <?php echo set_select('status_rumah', 'Lain-Lain');?> >Lain-Lain</option>
                  </select>
                  <?php echo form_error('status_rumah', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>              

              <div class="form-group">
                <label class="col-md-3 control-label">Provinsi Tempat Tinggal</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="provinsi_tempattinggal" value="<?php echo set_value('provinsi_tempattinggal'); ?>"/>
                  <?php echo form_error('provinsi_tempattinggal', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Kota Tempat Tinggal</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="kota_tempattinggal" value="<?php echo set_value('kota_tempattinggal'); ?>"/>
                  <?php echo form_error('kota_tempattinggal', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label for="lastName" class="col-md-3 control-label">Alamat</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat'); ?>"/>
                  <?php echo form_error('alamat', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Kelurahan</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="kelurahan" value="<?php echo set_value('kelurahan'); ?>"/>
                  <?php echo form_error('kelurahan', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Kecamatan</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="kecamatan" value="<?php echo set_value('kecamatan'); ?>"/>
                  <?php echo form_error('kecamatan', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Kode Pos</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="kode_pos" value="<?php echo set_value('kode_pos'); ?>"/>
                  <?php echo form_error('kode_pos', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Negara</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="negara" value="<?php echo set_value('negara'); ?>"/>
                  <?php echo form_error('negara', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">No Telepon / Hp</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="no_telepon" value="<?php echo set_value('no_telepon'); ?>"/>
                  <?php echo form_error('no_telepon', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Email</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>"/>
                  <?php echo form_error('email', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Hubungan Biaya</label>
                <div class="col-md-6">
                  <select class="form-control" name="hubungan_biaya">
                       <option value="Orang Tua Kandung" <?php echo set_select('hubungan_biaya', 'Orang Tua Kandung', TRUE);?> >Orang Tua Kandung</option>
                       <option value="Orang Tua Angkat" <?php echo set_select('hubungan_biaya', 'Orang Tua Angkat');?> >Orang Tua Angkat</option>
                       <option value="Orang Tua Asuh" <?php echo set_select('hubungan_biaya', 'Orang Tua Asuh');?> >Orang Tua Asuh</option>
                       <option value="Saudara Kandung" <?php echo set_select('hubungan_biaya', 'Saudara Kandung');?> >Saudara Kandung</option>
                       <option value="Saudara Bukan Kandung" <?php echo set_select('hubungan_biaya', 'Saudara Bukan Kandung');?> >Saudara Bukan Kandung</option>
                       <option value="Calon Mertua" <?php echo set_select('hubungan_biaya', 'Calon Mertua');?> >Calon Mertua</option>
                       <option value="Lain-Lain" <?php echo set_select('hubungan_biaya', 'Lain-Lain');?> >Lain-Lain</option>
                  </select>
                  <?php echo form_error('hubungan_biaya', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>  
              
              <div class="form-group">
                <label class="col-md-3 control-label">Sumber Dana</label>
                <div class="col-md-6">
                  <select class="form-control" name="sumber_dana">
                       <option value="Orang Tua / Wali" <?php echo set_select('sumber_dana', 'Orang Tua / Wali', TRUE);?> >Orang Tua / Wali</option>
                       <option value="Orang Tua Asuh" <?php echo set_select('sumber_dana', 'Orang Tua Asuh');?> >Orang Tua Asuh</option>
                       <option value="Beasiswa" <?php echo set_select('sumber_dana', 'Beasiswa');?> >Beasiswa</option>
                       <option value="ID" <?php echo set_select('sumber_dana', 'ID');?> >ID</option>
                       <option value="TB" <?php echo set_select('sumber_dana', 'TB');?> >TB</option>
                       <option value="Sendiri" <?php echo set_select('sumber_dana', 'Sendiri');?> >Sendiri</option>
                       <option value="Lain-Lain" <?php echo set_select('sumber_dana', 'Lain-Lain');?> >Lain-Lain</option>
                  </select>
                  <?php echo form_error('sumber_dana', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>  
              
              <div class="form-group">
                <label class="col-md-3 control-label">Sumber Dana Beasiswa</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="sumber_dana_beasiswa" value="<?php echo set_value('sumber_dana_beasiswa'); ?>"/>
                  <?php echo form_error('sumber_dana_beasiswa', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Jumlah Saudara</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="jumlah_saudara" value="<?php echo set_value('jumlah_saudara'); ?>"/>
                  <?php echo form_error('jumlah_saudara', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Status Bekerja</label>
                <div class="col-md-6">
                  <select class="form-control" name="status_bekerja">
                       <option value="Ya" <?php echo set_select('status_bekerja', 'Ya', TRUE);?> >Ya</option>
                       <option value="Tidak" <?php echo set_select('status_bekerja', 'Tidak');?> >Tidak</option>
                  </select>
                  <?php echo form_error('status_bekerja', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>  
              
              <div class="form-group">
                <label class="col-md-3 control-label">No. Asuransi</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="no_asuransi" value="<?php echo set_value('no_asuransi'); ?>"/>
                  <?php echo form_error('no_asuransi', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Mengenal Kampus</label>
                <div class="col-md-6">
                  <select class="form-control" name="mengenal_kampus">
                       <option value="Brosur" <?php echo set_select('mengenal_kampus', 'Brosur', TRUE);?> >Brosur</option>
                       <option value="Mahasiswa" <?php echo set_select('mengenal_kampus', 'Mahasiswa');?> >Mahasiswa</option>
                       <option value="Dosen / Guru" <?php echo set_select('mengenal_kampus', 'Dosen / Guru');?> >Dosen / Guru</option>
                       <option value="Alumni" <?php echo set_select('mengenal_kampus', 'Alumni');?> >Alumni</option>
                       <option value="Internet" <?php echo set_select('mengenal_kampus', 'Internet');?> >Internet</option>
                       <option value="Iklan" <?php echo set_select('mengenal_kampus', 'Rumah Sendiri');?> >Iklan</option>
                       <option value="Lain-Lain" <?php echo set_select('mengenal_kampus', 'Lain-Lain');?> >Lain-Lain</option>
                  </select>
                  <?php echo form_error('mengenal_kampus', '<div style="color:red"  class="error">', '</div>'); ?>
                </div>
              </div>  
              
            
            <div class="form-group">
              <div class="col-md-offset-3 col-md-10">
                <button type="submit" class="btn btn-success">Masukkan</button> 
              </div>
            </div>
            </form>
            </fieldset>
            </div>
            </div>