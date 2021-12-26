<?php 
require "proses/session.php";
if (empty ($_GET['x'])){
  echo "<script>window.location ='home';</script>";
}elseif($_GET['x']=='home'){
  require "home.php";
}elseif($_GET['x']=='manajemen'){
  require "manajemen.php";
}elseif($_GET['x']=='kasmasuk'){
    require "kasmasuk.php";
}elseif($_GET['x']=='kaskeluar'){
  require "kaskeluar.php";
}elseif($_GET['x']=='rekapkas'){
  require "rekapkas.php";
}else{
  echo "<script>window.location ='home';</script>";
}
?>