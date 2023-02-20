<?php

include 'database/koneksi.php';

$sql = "SELECT * FROM setting";

$query = $db->query($sql);

$data = $query->fetch_object();

?>

<!DOCTYPE html>
<html>

<head>
  <title>E-Voting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/user.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
  <div class="container align-items-center">
    <h1 class="row text-center justify-content-center fw-bold p-5 ijo">COUNTDOWN PEMILOS</h1>
    <div class="text-center">
      <br>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col">
          <p class="display-3 fw-bold ijo" id="days">0</p>
          <p class="lead ijo">Days</p>
        </div>
        <div class="col">
          <p class="display-3 fw-bold ijo" id="hours">0</p>
          <p class="lead ijo">Hours</p>
        </div>
        <div class="col">
          <p class="display-3 fw-bold ijo" id="min">0</p>
          <p class="lead ijo">Min</p>
        </div>
        <div class="col">
          <p class="display-3 fw-bold ijo" id="sec">0</p>
          <p class="lead ijo">Sec</p>
        </div>
        <!-- <div>
          <p id="days" class="big-text">0</p>
          <span>Days</span>
        </div>
        <div>
          <p id="hours" class="big-text">0</p>
          <span>Hours</span>
        </div>
        <div>
          <p id="min" class="big-text">0</p>
          <span>Min</span>
        </div>
        <div>
          <p id="sec" class="big-text">0</p>
          <span>Sec</span>
        </div> -->
      </div>
    </div>
    <div class="fixed-bottom text-center">
      <img src="assets/img/musaba.png" class="p-2 p- mb-5" style="height: 100px;" alt="">
      <img src="assets/img/techno.png" class="p-2 mb-5" style="height: 100px;" alt="">
    </div>
  </div>
  <script src="main.js"></script>
  <script>
    let daysItem = document.querySelector("#days");
    let hoursItem = document.querySelector("#hours");
    let minItem = document.querySelector("#min");
    let secItem = document.querySelector("#sec");


    let countDown = () => {
      let futureDate = new Date("<?= $data->start_pemilos; ?>");
      let currentDate = new Date();
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
      }

    }

    countDown()

    setInterval(countDown, 1000)
  </script>
</body>

</html>