<?php

$title = 'Laporan Masyarakat';

require '../../public/app.php';

require '../../layouts/header.php';

require '../layouts/navAdmin.php';


// logic backend

$result = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status = 'proses' ORDER BY id_pengaduan DESC");

?>

<div data-aos="fade-up">
    <h4 class="text-center">Daftar Laporan Masyarakat</h4>
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
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <th scope="row"><?= $i; ?>.</th>
        <td><?= $row["tgl_pengaduan"]; ?></td>
        <td><?= $row["nik"]; ?></td>
        <td><?= $row["isi_laporan"]; ?></td>
        <td><img src="../../assets/img/<?= $row["foto"]; ?>" width="50"></td>
        <td>
          <a href="verify.php?id_pengaduan=<?= $row["id_pengaduan"]; ?>" class="btn btn-success">Verify</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endwhile; ?>
  </tbody>
</table>




<?php require '../../layouts/footer.php'; ?>