  <div class="col-md-4">

        <h1 class="my-4">Tambah
          <small>Data</small>
        </h1>
  
  <form action="add" method="post">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama"class="form-control" id="nama" >
  </div>
  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir"class="form-control" id="tanggal_lahir">
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">jenis kelamin</label>
    <select name="jenis_kelamin" id="" class="form-control" id="jenis_kelamin">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat">
  </div>
  <div class="form-group">
    <label for="no_hp">No Hp</label>
    <input type="text" name="no_hp" class="form-control" >
  </div>
  <div class="form-group">
    <label for="id_jabatan">ID Jabatan</label>
    <select name="id_jabatan" id="" class="form-control" id="id_jabatan">
        <?php foreach ($jbt as $key) { ?>
            <option value="<?php echo $key->id_jabatan; ?>"><?php echo $key->nama; ?></option>
            <?php }?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
  </form>

</div>