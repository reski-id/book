<div class="col-md-12">
<h1 class="my-4">Views
          <small>Data sample</small>
        </h1>

<?php echo anchor('crud/form_add', '+ Add data', 'class="btn btn-primary btn-sm"'); ?>
<br><br>
<font color="green"><?php echo $this->session->flashdata('pesan'); ?></font>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Hp</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tmp as $key) { ?>
    <tr>
      <th scope="row"><?php echo $key->id; ?></th>
      <td><?php echo $key->nama; ?></td>
      <td><?php echo $key->tanggal_lahir; ?></td>
      <td><?php 
        if ($key->jenis_kelamin=='L') {
          echo "Laki-Laki";
        } else{
          echo "Perempuan";
        }?></td>
      <td><?php echo $key->alamat; ?></td>
      <td><?php echo $key->no_hp; ?></td>
      <td><?php echo $key->id_jabatan; ?></td>
      <td>
        <?php echo anchor('crud/edit/'.$key->id, 'Edit', 'class="badge badge-info"');  ?>
        /
        <?php echo anchor('crud/del/'.$key->id, 'Delete',array('class'=>'badge badge-danger', 'onclick'=>"return confirmDialog();"));  ?>
     </td>
    </tr>
   <?php }?>
  </tbody>
</table>
</div>

<script type="text/javascript">
function confirmDialog() {
  var x=confirm("Yakin akan di hapus?")
  if (x) {
    return true;
  } else {
    return false;
  } }
</script>