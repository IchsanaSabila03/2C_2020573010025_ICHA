<?php 
require "proses/koneksi.php";
  $query = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE username = '$_SESSION[username]'");
  $data = mysqli_fetch_array($query);
  if($data['level'] != 'admin' && $data['level'] != 'customer') 
  //exit();
   echo "<script>window.location='home';</script>";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CASHBOOK</title>
  </head>

  <body>
        <!--Header-->
        <?php
        require "header.php";
        ?>
        <!--Akhir Header-->

        <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <?php
            require "sidebar.php";
            ?>
          </div>
          <!--Akhir Sidebar-->
          <!--Content-->
          <div class="col-9">
            <hr>
          <h2>MANAJEMEN USER 👤</h2>
          <div class="card">
            <div class="card-header">
              Profile
            </div>
            <div class="card-body">
          <form>
          <div class="mb-3">
              <label class="form-label">ID User</label>
              <input type="text" class="form-control"
              value="<?php echo $data['id'];?>"
              disabled>
            </div>  
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control"
              value="<?php echo $data['username'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="text" class="form-control"
              value="<?php echo $data['password'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Level</label>
              <input type="email" class="form-control"
              value="<?php echo $data['level'];?>"
              disabled>
            </div>
            
            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
            <div class="card mt-4">
                            <form action="proses/proses_ganti_password.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">username</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" name="username" value="<?= $_SESSION['username'] ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" value="<?= $data['password']; ?>" readonly>
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Ganti Password
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword2" class="form-label">Password Lama</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" name="passwordlama" autofocus required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" name="passwordbaru" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn "style="background-color:#E0FFFF;" name="simpan">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir isi konten -->
          </div>
          </form>
        </div>
      </div>
    </div>
    <hr>
        </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>