<?php

$title = 'Home';


require '../../layouts/header.php';

require '../layouts/navUser.php';

?>

<div class="row py-5">
  <div class="col-6 py-5 mt-3">
    <div class="mt-lg-5 pt-lg-3 ml-5 pl-lg-3">
      <h4 class="text-dark" data-aos="fade-down" data-aos-duration="900">Selamat datang di website Pengaduan Masyarakat</h4>
      <p data-aos="fade-down" data-aos-duration="900">Website ini dibuat untuk melaporkan keluh kesah masyarakat.</p>
      <a href="buatLaporan.php" class="btn btn-primary shadow" data-aos="fade-up" data-aos-duration="900">Buat Laporan</a>
    </div>
  </div>
  <div class="col-6">
    <div class="image" data-aos="fade-left" data-aos-duration="900">
      <img src="../../assets/img/userdsh.png" width="400" alt="">
    </div>
  </div>
</div>



<?php require '../../layouts/footer.php'; ?>