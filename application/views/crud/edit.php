<?php echo form_open('crud/update/'.$tmp->id,''); ?>

<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama"class="form-control" id="nama" value="<?php echo $tmp->nama; ?>">
  </div>
  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir"class="form-control" id="tanggal_lahir" value="<?php echo $tmp->tanggal_lahir; ?>">
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">jenis kelamin</label>
    <select name="jenis_kelamin" id="" class="form-control" id="jenis_kelamin" >
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $tmp->alamat; ?>">
  </div>
  <div class="form-group">
    <label for="no_hp">No Hp</label>
    <input type="text" name="no_hp" class="form-control" value="<?php echo $tmp->no_hp; ?>">
  </div>
  <div class="form-group">
    <label for="id_jabatan">ID Jabatan</label>
    <select name="id_jabatan" id="" class="form-control" id="id_jabatan">
         <option value="ini" selected>ini</option>
        <?php foreach ($jbt as $key) { ?>
            <option value="<?php echo $key->id_jabatan; ?>"><?php echo $key->nama; ?></option>
            <?php }?>
    </select>
  </div>
    


  <button type="submit" class="btn btn-primary">Update Now!</button>
<?php echo form_close(); ?>