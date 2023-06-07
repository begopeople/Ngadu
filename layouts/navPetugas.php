<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-dark sidebar accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
      <div class="sidebar-brand-text mx-3">Pengaduan <br> Masyarakat</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($title === "Home") echo "active"; ?>">
      <a class="nav-link" href="../petugas/dashboard.php">
        <i class="fas fa-book-open"></i>
        <span>Home</span></a>
    </li>

    <!-- Nav Item - Laporan masyarakat -->
    <li class="nav-item <?php if ($title === "Laporan Masyarakat") echo "active"; ?>">
      <a class="nav-link" href="../petugas/laporan.php">
        <i class="fas fa-book-open"></i>
        <span>Laporan Masyarakat</span></a>
    </li>

    <!-- Nav Item - Laporan masyarakat -->
    <li class="nav-item <?php if ($title === "Laporan Terverifikasi") echo "active"; ?>">
      <a class="nav-link" href="../petugas/terverify.php">
        <i class="fas fa-check-circle"></i>
        <span>Laporan Terverify</span></a>
    </li>

    <!-- Nav Item - Tanggapan -->
    <li class="nav-item <?php if ($title === "Tanggapan") echo "active"; ?>">
      <a class="nav-link" href="../petugas/tanggapan.php">
        <i class="fas fa-bookmark"></i>
        <span>Tanggapan</span></a>
    </li>

    <li class="nav-item <?php if ($title === "Logout") echo "active"; ?>">
      <a class="nav-link" href="src/user/login,php">
        <i class="fas fa-user-tie"></i>
        <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


  </ul>
  <!-- End of Sidebar -->



  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none ">
          <i class="fa fa-bars"></i>
        </button>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

          

        </ul>

      </nav>

      <!-- End of Topbar -->

      <div class="container">