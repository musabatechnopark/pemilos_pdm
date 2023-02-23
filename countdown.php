<?php

include 'database/koneksi.php';

$sql = "SELECT * FROM setting";

$query = $db->query($sql);

$data = $query->fetch_object();

if ($data->pemilos == 1) return return_url('index.php');
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="assets/img/techno.png" type="image/x-icon">
  <title>Countdown</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/user.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

  <div class="container">
    <div class="grid text-center">
      <div class="col-12">
        <h1 class="fw-bold py-5 ijo">PEMILOS BELUM DI MULAI</h1>
      </div>
      <div class="col-12">
        <img src="assets/img/countdown.png" class="w-50 mb-5 p-5" alt="">
      </div>
      <div class="col-12 pt-3">
        <?php if ($data->on_datetime == 1) : ?>
          <div class="row">
            <div class="col">
              <p class="display-1 fw-bold ijo" id="days">0</p>
              <span class="ijo">Hari</span>
            </div>
            <div class="col">
              <p class="display-1 fw-bold ijo" id="hours">0</p>
              <span class="ijo">Jam</span>
            </div>
            <div class="col">
              <p class="display-1 fw-bold ijo" id="min">0</p>
              <span class="ijo">Menit</span>
            </div>
            <div class="col">
              <p class="display-1 fw-bold ijo" id="sec">0</p>
              <span class="ijo">Detik</span>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-12 pt-5">
        <?php if (isset($_SESSION['login']) && @$_SESSION['role'] == 'user') : ?>
          <a id="keluar" class="btn btn-primary p-3 w-25 d-none" href="sistem/auth/logout.php">Keluar</a>
          <a id="masuk" class="btn btn-primary p-3 w-25 d-none" href="user/pilih.php">Lanjut</a>
        <?php endif; ?>
        <a id="login" class="btn btn-primary p-3 w-25 d-none" href="index.php">Login</a>
      </div>
    </div>
  </div>

  <script src="main.js"></script>
  <?php if ($data->on_datetime == 1) : ?>
    <script>
      let daysItem = document.querySelector("#days");
      let hoursItem = document.querySelector("#hours");
      let minItem = document.querySelector("#min");
      let secItem = document.querySelector("#sec");
      let keluar = document.querySelector("#keluar");
      let masuk = document.querySelector("#masuk");
      let login = document.querySelector("#login");


      let countDown = async () => {
        let futureDate = new Date("<?= $data->start_pemilos; ?>");
        let currentDate = new Date();
        let pemilos = '<?= $data->pemilos ?>';
        let myDate = futureDate - currentDate;
        //console.log(myDate);

        let days = Math.floor(myDate / 1000 / 60 / 60 / 24);

        let hours = Math.floor(myDate / 1000 / 60 / 60) % 24;

        let min = Math.floor(myDate / 1000 / 60) % 60;

        let sec = Math.floor(myDate / 1000) % 60;

        if (new Date(futureDate) > new Date()) {
          daysItem.innerHTML = days;
          hoursItem.innerHTML = hours;
          minItem.innerHTML = min;
          secItem.innerHTML = sec;

          keluar.classList.remove('d-none');

        } else {
          <?php if (!isset($_SESSION['login']) && @$_SESSION['role'] == 'user') : ?>
            login.classList.remove('d-none');
          <?php endif; ?>
          masuk.classList.remove('d-none');
          var api = await fetch('http://127.0.0.1/pdm/frontend/sistem/admin/setting.php?action=start_otomatis&id=1&data=1')
          var data = await api.json()
        }

      };

      setInterval(countDown, 1000)
    </script>
  <?php endif; ?>
</body>

</html>