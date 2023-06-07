<?php

$title = 'Home';

require '../../layouts/header.php';

require '../layouts/navPetugas.php';

?>


<div class="d-flex justify-content-center text-center py-5 mt-5" data-aos="zoom-in">
  <div class="content col-8">
    <i class="fas fa-atlas fa-5x mb-2"></i>
    <h2 class="mb-3">Selamat datang kembali<br>Selamat Bekerja dan Beraktivitas
    </h2>
    <a href="laporan.php" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-book-open"></i>
      </span>
      <span class="text">Lihat Laporan</span>
    </a>
  </div>
</div>



<?php require '../../layouts/footer.php'; ?>