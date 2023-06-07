<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3 text-center">Pengaduan <br> Masyarakat</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($title === "Laporan Masyarakat") echo "active"; ?>">
      <a class="nav-link" href="dashboard.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
       <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
      </svg>
        <span>Home</span></a>
    </li>

    <!-- Nav Item - Laporan masyarakat -->
    <li class="nav-item <?php if ($title === "Laporan Masyarakat") echo "active"; ?>">
      <a class="nav-link" href="laporan.php">
        <i class="fas fa-book-open"></i>
        <span>Laporan Masyarakat</span></a>
    </li>

    <!-- Nav Item - Laporan masyarakat -->
    <li class="nav-item <?php if ($title === "Laporan Terverifikasi") echo "active"; ?>">
      <a class="nav-link" href="terverify.php">
        <i class="fas fa-check-circle"></i>
        <span>Laporan Terverify</span></a>
    </li>

    <!-- Nav Item - Generate -->
    <li class="nav-item <?php if ($title === "Tanggapan") echo "active"; ?>">
      <a class="nav-link" href="tanggapan.php">
        <i class="fas fa-bookmark"></i>
        <span>Tanggapan</span></a>
    </li>

    <!-- Nav Item - Tanggapan -->
    <li class="nav-item <?php if ($title === "Generate Laporan") echo "active"; ?>">
      <a class="nav-link" href="generate.php">
        <i class="fas fa-folder-open"></i>
        <span>Generate Laporan</span></a>
    </li>

    <!-- Nav Item - Petugas -->
    <li class="nav-item <?php if ($title === "Data Petugas") echo "active"; ?>">
      <a class="nav-link" href="petugas.php">
        <i class="fas fa-user-tie"></i>
        <span>Data Petugas</span></a>
    </li>

    <li class="nav-item <?php if ($title === "Buat Laporan") echo "active"; ?>">
         <a class="nav-link" href="../user/login.php">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
               <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg>
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

      <div class="container">

        <!-- End of Topbar -->