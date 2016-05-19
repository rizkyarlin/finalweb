<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form and Validation</title>
</head>
<body>
	<?php echo form_open('Post'); ?>
	<h5>Name</h5>
	<?php echo form_error('name', '<div style="color:red"  class="error">', '</div>'); ?>
	<input type="text" name="name" value="<?php echo set_value('name'); ?>" size="50" />

	<h5>NIM</h5>
	<?php echo form_error('nim', '<div style="color:red"  class="error">', '</div>'); ?>
	<input type="text" name="nim" value="<?php echo set_value('nim'); ?>" size="50" />

	<h5>Jenis Kelamin</h5>
	<?php echo form_error('gender', '<div style="color:red"  class="error">', '</div>'); ?>
	<input type="radio" name="gender" value="Laki-Laki" <?php echo set_radio('gender', 'Laki-Laki', TRUE); ?> /> Laki-laki
	<input type="radio" name="gender" value="Perempuan" <?php echo set_radio('gender', 'Perempuan'); ?> /> Perempuan

	<h5>Tempat Lahir</h5>
	<?php echo form_error('place', '<div style="color:red"  class="error">', '</div>'); ?>
	<input type="text" name="place" value="<?php echo set_value('place'); ?>" size="50" />

	<h5>Tanggal Lahir</h5>
	<?php echo form_error('date', '<div style="color:red"  class="error">', '</div>'); ?>
	<input type="date" name="date" value="<?php echo set_value('date'); ?>" size="50" />

	<h5>Golongan Darah</h5>
	<?php echo form_error('goldar', '<div style="color:red"  class="error">', '</div>'); ?>
	<input type="radio" name="goldar" value="O" <?php echo set_radio('goldar', 'O', TRUE); ?> /> O
	<input type="radio" name="goldar" value="A" <?php echo set_radio('goldar', 'A'); ?> /> A
	<input type="radio" name="goldar" value="B" <?php echo set_radio('goldar', 'B'); ?> /> B
	<input type="radio" name="goldar" value="AB" <?php echo set_radio('goldar', 'AB'); ?> /> AB

	<h5>Program Studi</h5>
	<?php echo form_error('prodi', '<div style="color:red"  class="error">', '</div>'); ?>	
	<select name="prodi">
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

	<h5>Angkatan</h5>
	<?php echo form_error('angkatan', '<div style="color:red"  class="error">', '</div>'); ?>
	<input type="number" name="angkatan" value="<?php echo set_value('angkatan'); ?>" size="50" />


	<div><input type="submit" value="Submit" /></div>

</form>
</body>
</html>