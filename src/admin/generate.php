<?php

$title = 'Generate Laporan';

require '../../public/app.php';

require '../../layouts/header.php';

require '../layouts/navAdmin.php';


// logic backend

$query = "SELECT * FROM (( tanggapan INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan )
                          INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas )";

$result = mysqli_query($conn, $query);

?>

<div data-aos="fade-up">
    <h4 class="text-center">Generate Laporan Masyarakat</h4>
</div>

<hr>

<div class="row">

  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="col-6">
      <div class="card shadow mb-4" data-aos="fade-up">
        <!-- Card Content - Collapse -->
        <div class="card-header">
          <div class="row">
            <div class="col-6">
              <h6 class="m-0 font-weight-bold text-primary mt-2">NIK : <?= $row['nik']; ?></h6>
            </div>
            <div class="col-6">
              <div class="d-sm-flex align-items-center justify-content-end">
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
              </div>
            </div>
          </div>
        </div>
        <div class="collapse show" id="generate">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <h6 class="text-primary font-weight-bold">Foto : <img src="" width="50" alt=""></h6>
              </div>
              <div class="col-8">
                <h6> <span class="text-primary font-weight-bold">Tanggal Pengaduan :</span> <?= $row['tgl_pengaduan']; ?></h6>
                <h6> <span class="text-primary font-weight-bold">Tanggal Tanggapan :</span> <?= $row['tgl_tanggapan']; ?></h6>
              </div>
            </div>
            <hr class="bg-primary">
            <h6><span class="text-primary font-weight-bold">Laporan :</span> <?= $row['isi_laporan']; ?></h6>
            <h6><span class="text-primary font-weight-bold">Tanggapan :</span> <?= $row['tanggapan']; ?></h6>
            <hr class="bg-primary">
            <div class="row">
              <div class="col-8 mt-2">
                <h5> <span class="text-primary font-weight-bold">Di tanggapi dari :</span> <?= $row['nama_petugas']; ?></h5>
              </div>
              <div class="col-4">
                <div class="d-flex justify-content-end">
                  <a href="preview.php?id_tanggapan=<?= $row['id_tanggapan']; ?>" class="btn btn-outline-primary">Preview</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

</div>


<?php require '../../layouts/footer.php'; ?>