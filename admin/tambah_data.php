<?php 
include './layout/header.php'; 

?>
 <!-- Tambah Data Arsip Modal-->
 <div class="modal fade" id="tambahDataArsipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Arsip</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="noUrut">No. Urut</label>
                            <input type="text" class="form-control" id="noUrut" name="noUrut" required>
                        </div>
                        <div class="form-group">
                            <label for="namaPemilikIMB">Nama Pemilik IMB</label>
                            <input type="text" class="form-control" id="namaPemilikIMB" name="namaPemilikIMB" required>
                        </div>
                        <div class="form-group">
                            <label for="uraianMasalah">Uraian Masalah</label>
                            <input type="text" class="form-control" id="uraianMasalah" name="uraianMasalah" required>
                        </div>
                        <div class="form-group">
                            <label for="jalan">Jalan</label>
                            <input type="text" class="form-control" id="jalan" name="jalan" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                        </div>
                        <div class="form-group">
                            <label for="noRak">No. Rak</label>
                            <input type="text" class="form-control" id="noRak" name="noRak" required>
                        </div>
                        <div class="form-group">
                            <label for="noBox">No. Box</label>
                            <input type="text" class="form-control" id="noBox" name="noBox" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">No. Klas</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">No. Urut</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">NIPA</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Tahun</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Keterangan</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                        </div>
                        <div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
<button class="btn btn-primary" type="submit" form="form-tambah-data-arsip">Simpan</button>
</div>
</div>
</div>
</div>


<?php 
include './layout/footer.php'; 
?>