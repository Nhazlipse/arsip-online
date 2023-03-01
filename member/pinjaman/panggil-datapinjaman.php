      <!-- deklarasikan dan panggil koneksi database -->
      <?php

        $record_per_page = 10;
        if(isset($_GET["page"])) {
          $page = $_GET["page"];
        } else {
          $page = 1;
        }
        $start_from = ($page-1) * $record_per_page;
        $query = "SELECT * FROM tb_transaksi ORDER BY id_transaksi DESC LIMIT $start_from, $record_per_page";
        $tampil = $koneksi->query($query);
        $no = $start_from + 1;
        while ($data = mysqli_fetch_array($tampil)) {
          $status = $data['status'];
        ?>
        <tr>
          <td class="text-center"><?= $no++ ?></td>
          <td><?= $data['nama_pemilik'] ?></td>
          <td><?= $data['keterangan_pinjam'] ?></td>
          <td><?= $data['peminjam'] ?></td>
          <td><?= $data['no_identitas'] ?></td>
          <td><?= $data['tanggal_pinjam'] ?></td>
          <td><?= $data['tanggal_dikembalikan'] ?></td>
          <td><?= $data['jumlah'] ?></td>
          <td>
            <?php if ($status == 'dipinjam') { ?>
            <button type="button" class="btn btn-danger btn-sm d-sm-inline-block mb-3 mb-sm-1" disabled>Dipinjam</button>
            <?php } else { ?>
            <button type="button" class="btn btn-success btn-sm d-sm-inline-block mb-3 mb-sm-1" disabled>Tersedia</button>
            <?php } ?>
      </tr>
        <?php } ?>