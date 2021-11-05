<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>STAF - Sistem Informasi Peminjaman Barang Jurusan Tik</title>
</head>

<body>
  <div class="container-fluid">
    <!-- HEADER -->
    <?php
    require "header.php"
    ?>

    <!-- AKHIR HEADER -->


  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-3">
        <!-- SIDEBAR -->
        <?php
        require "sidebar.php";
        ?>
      </div>
      <!-- AKHIR SIDBAR -->

      <!-- CONTENT -->

      <div class="card col-8 ms-0 mt-6">
        <div class="card-header">
          STAF ADMINISTRASI
        </div>
      </div>
      <!-- AKHIR CONTENT -->
    </div>
  </div>


  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js"></script>

</body>

</html>