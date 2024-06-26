<?php
session_start();
// if ($_SESSION['status_login'] != 'success') {
//   header('Location: ../login/login.php'); // ส่งไปยังหน้าหลัก
//   exit;
// }
?>

<!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fe9f60;">
  <a class="navbar-brand" href="#">หน้าจัดการระบบ1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <i class="fa-solid fa-right-to-bracket"></i>
      <?php
      if (isset($_SESSION['ad_name'])) {
        echo '<span class="navbar-text mr-3" style="font-size: 18px; color: #333333;"> :' . $_SESSION['ad_name'] . '</span>';
        echo '<a href="../login/logout.php" class="navbar-text mr-3" style="font-size: 14px; color: #333333;">Logout</a>';
      }
      ?>
      </li>
    </ul>
  </div>
</nav> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fe9f60 !important">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">โปรแกรมจัดการระบบ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <?php
        if (isset($_SESSION['ad_name'])) {
          echo '<a href="#" class="navbar-brand" style="cursor: default;">'. $_SESSION['ad_name'] .'</a>';
          echo '<a href="../login/logout.php" class="btn btn-danger " style="font-size: 18px; ">Logout</a>';
        }
        ?>
      </div>
    </div>
  </div>
</nav>
<style>
  #map {
    height: 30vh;
  }

  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  #description {
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
  }

  #infowindow-content .title {
    font-weight: bold;
  }

  #infowindow-content {
    display: none;
  }

  #map #infowindow-content {
    display: inline;
  }

  .pac-card {
    background-color: #fff;
    border: 0;
    border-radius: 2px;
    box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
    margin: 10px;
    padding: 0 0.5em;
    font: 400 18px Roboto, Arial, sans-serif;
    overflow: hidden;
    font-family: Roboto;
    padding: 0;
  }

  #pac-container {
    padding-bottom: 12px;
    margin-right: 12px;
  }

  .pac-controls {
    display: inline-block;
    padding: 5px 11px;
  }

  .pac-controls label {
    font-family: Roboto;
    font-size: 13px;
    font-weight: 300;
  }

  #pac-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 400px;
  }

  #pac-input:focus {
    border-color: #4d90fe;
  }

  #title {
    color: #fff;
    background-color: #4d90fe;
    font-size: 25px;
    font-weight: 500;
    padding: 6px 12px;
  }

  #target {
    width: 345px;
  }
</style>