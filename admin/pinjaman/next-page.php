<!-- INI BUAT NEXT PAGE -->
<br>
<style>
  .pagination-wrap1 {
    width: 100%;
    text-align: right;
    display: flex;
    justify-content: flex-end;
  }
</style>
<div class="pagination-wrap1" >
  <?php
  $query = "SELECT * FROM tb_transaksi";
  $result = $koneksi->query($query);
  $total_records = mysqli_num_rows($result);
  $total_pages = ceil($total_records / $record_per_page);
  ?>
  <nav>
    <ul class="pagination">
      <?php if($page > 1) { ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?= $page - 1 ?>">
          <i class="fa fa-angle-left"></i>
        </a>
      </li>
      <?php } ?>
      <?php for($i=1; $i<=$total_pages; $i++) { ?>
      <li class="page-item <?php if($page == $i) {echo "active";} ?>">
        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
      </li>
      <?php } ?>
      <?php if($page < $total_pages) { ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?= $page + 1 ?>">
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>