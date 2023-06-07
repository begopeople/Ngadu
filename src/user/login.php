<?php

$title = 'Login';

require '../../public/app.php';

require '../layouts/header.php';


// logic backend


if (isset($_POST['submit'])) {

  $username = $_POST['username'];

  $result = mysqli_query($conn, "SELECT * FROM masyarakat WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    header("Location: dashboard.php");
  } else {
    $error = true;
  }
}

?>


<div class="d-flex justify-content-center py-5 mt-5">
  <div class="card shadow mt-3 border-bottom-primary bg-gray-100" data-aos="fade-down">
    <div class="card-body">

      <?php if (isset($error)) : ?>

        <div class="alert alert-dismissible fade show" style="background-color: #b52d2d;" role="alert">
          <h6 class="text-gray-100 mt-2">Maaf username atau password anda salah</h6>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="text-light">&times;</span>
          </button>
        </div>

      <?php endif; ?>

      <h3 class="text-center text-primary text-uppercase text-bold">Login</h3>
      <hr class="bg-gradient-primary">
      <div class="row">
        <div class="col-6">
          <div class="image">
            <img src="../../assets/img/forest-amico.svg" width="280" alt="">
          </div>
        </div>
        <div class="col-6">
          <form action="" method="post" class="mt-4">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control shadow" style="border: none;" id="exampleInputEmail1" placeholder="Masukkan Username Kamu" name="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control shadow" style="border: none;" id="exampleInputPassword1" placeholder="Masukkan Password Kamu" name="password">
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary btn-sm shadow-lg px-3">Masuk</button>
              <a href="../petugas/login.php" class="btn btn-outline-primary btn-sm ml-2 px-3">Masuk sebagai petugas</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require '../layouts/footer.php' ?>