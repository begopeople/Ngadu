<?php

$title = 'Laporan Masyarakat';

require '../../public/app.php';

require '../../layouts/header.php';

require '../layouts/navPetugas.php';


// logic backend

$result = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status = 'proses' ORDER BY id_pengaduan DESC");

?>

  <div data-aos="fade-up">
    <h5 class="text-dark text-center">Daftar Laporan Masyarakat</h5>
  </div>

<hr>


<table class="table table-bordered shadow-sm text-center" data-aos="fade-up" data-aos-duration="700">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">NIK</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <th scope="row">1.</th>
        <td><?= $row["tgl_pengaduan"]; ?></td>
        <td><?= $row["nik"]; ?></td>
        <td><?= $row["isi_laporan"]; ?></td>
        <td><?= $row["foto"]; ?></td>
        <td>
          <a href="verify.php?id_pengaduan=<?= $row["id_pengaduan"]; ?>" class="btn btn-success">Verify</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>




<?php require '../../layouts/footer.php'; ?>