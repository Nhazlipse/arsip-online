<!-- deklarasikan dan panggil koneksi database untuk memanggil data dari tb_dataarsip-->
<tbody>
<?php

// untuk menampilkan data yang di tampilkan pada setiap pagenya adalah 10 data menggunakan fungsi sql (DESC LIMIT)
 $query = "SELECT * FROM tb_dataarsip ORDER BY id_dataarsip";
 $tampil = $koneksi->query($query);
 $no = 1;
while ($data = mysqli_fetch_array($tampil)) {
?>

<!-- mendeskripsikan data sesuai pada kolom yang di perlukan -->
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['masalah'] ?></td>
        <td><?= $data['jalan'] ?></td>
        <td><?= $data['kelurahan'] ?></td>
        <td><?= $data['kecamatan'] ?></td>
        <td><?= $data['unit_pengolah'] ?></td>
        <td><?= $data['no_rak'] ?></td>
        <td><?= $data['no_box'] ?></td>
        <td><?= $data['kode_klas'] ?></td>
        <td><?= $data['no_urut'] ?></td>
        <td><?= $data['nipa'] ?></td>
        <td><?= $data['tahun'] ?></td>
        <td><?= $data['keterangan'] ?></td>
    </tr>
<?php } ?>
</tbody>