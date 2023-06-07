<?php

$title = 'Home';

require '../../public/app.php';

require '../../layouts/header.php';

require '../layouts/navAdmin.php';


// logic backend


// mengambil angka pengaduan dari database
$pengaduan = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id_pengaduan  DESC LIMIT 1");

// mengambil angka tanggapan dari database
$tanggapan = mysqli_query($conn, "SELECT * FROM tanggapan ORDER BY id_tanggapan DESC LIMIT 1");

// mengambil angka akun masyarakat dari database
$masyarakat = mysqli_query($conn, "SELECT * FROM masyarakat ORDER BY nik  DESC LIMIT 1");

// query untuk menjalankan looping generate
$query = "SELECT * FROM (( tanggapan INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan )
                          INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas )";

$result = mysqli_query($conn, $query);

?>


<!-- Card -->
<?php while ($row = mysqli_fetch_assoc($pengaduan)) : ?>
  <div class="row mb-3">
    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="300">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col ml-3">
              <div class="h5 mb-0 font-weight-bold text-info"><?= $row['id_pengaduan']; ?> Pengaduan</div>
            </div>
            <i class="fas fa-comment fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

  <?php while ($row = mysqli_fetch_assoc($tanggapan)) : ?>
    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col ml-3">
              <div class="h5 mb-0 font-weight-bold text-primary"><?= $row['id_tanggapan']; ?> Tanggapan</div>
            </div>
            <i class="fas fa-comments fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

  <?php while ($row = mysqli_fetch_assoc($masyarakat)) : ?>
    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="700">
      <div class="card border-left-dark shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col ml-3">
              <div class="h5 mb-0 font-weight-bold text-dark">5 Akun masyarakat</div>
            </div>
            <i class="fas fa-users fa-2x text-gray-500"></i>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile ?>

  

  </div>



  <?php require '../../layouts/footer.php'; ?>