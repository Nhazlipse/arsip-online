<?php 
include './layout/header.php'; 
?>

<form action="proses_tambah_data.php" method="post">
  <div class="form-group">
    <label for="input_nama">Nama</label>
    <input type="text" class="form-control" id="input_nama" name="nama" required>
  </div>
  <div class="form-group">
    <label for="input_alamat">Alamat</label>
    <textarea class="form-control" id="input_alamat" rows="3" name="alamat" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?php 
include './layout/footer.php'; 
?>