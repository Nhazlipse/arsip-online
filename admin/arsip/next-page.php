<style>
  .pagination-wrap1 {
    width: 100%;
    text-align: right;
    display: flex;
    justify-content: flex-end;
    margin-top: 10px;
    margin-right: 10px;
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
      <?php if($i <= 2 || $i == $page || $i == $total_pages) { ?>
      <li class="page-item <?php if($page == $i) {echo "active";} ?>">
        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
      </li>
      <?php } elseif($i == 3) { ?>
      <li class="page-item disabled">
        <a class="page-link" href="#">
          ...
        </a>
      </li>
      <?php } ?>
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
