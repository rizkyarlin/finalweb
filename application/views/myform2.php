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
                <label for="lastName" class="col-md-3 control-label">Alamat</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat'); ?>"/>
                  <?php echo form_error('alamat', '<div style="color:red"  class="error">', '</div>'); ?>
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
              <div class="col-md-offset-3 col-md-10">
                <button type="submit" class="btn btn-success">Masukkan</button> 
              </div>
            </div>
            </form>
            </fieldset>
            </div>
            </div>