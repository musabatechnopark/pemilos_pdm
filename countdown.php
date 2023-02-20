<?php 

include 'database/koneksi.php';

$sql = "SELECT * FROM setting";

$query = $db->query($sql);

$data = $query->fetch_object();

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Countdown Clock Website Page  Final Countdown Timer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <style>
        /* Start Main Rule */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
* {
  margin:0;
  padding:0;
  box-sizing:border-box;
}
body {
  background-image:url("images/bg.jpg");
  background-repeat: no-repeat;
  background-size:cover;
  background-position:top;
  min-height:100vh;
  display:flex;
  flex-direction:column;
  align-items:center;
  font-family: 'Poppins', sans-serif;
  position: relative;
}   
.overlay{
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  background:rgba(0,0,0,0.4);
  width:100%;
  height:100%;
  z-index:-1;
}
.countdown-container{
  display:flex;
}
.big-text{
  font-size:4rem;
}
.title{
  margin:10px;
  text-align:center;
  color:#fff;
  width:100%;
  letter-spacing:2px;
  font-size: 3rem;
  line-height: 5.5rem;
}
.title span{
  display:block;
  font-size:6rem;
  letter-spacing:2rem;
}
.wrapper{
  display:flex;
  align-items:center;
  justify-content:center;
  flex-wrap: wrap;
  min-height:100vh;
}
.countdown-container > div{
  margin:0 2rem;
  text-align: center;
  border:2px solid #fff;
  padding:0px 20px;
  border-radius: 12px;
  box-shadow: 0px 2px 10px rgba(0,0,0,0.5);
  box-sizing: border-box;
  color:#fff;
  min-width:150px;
}
@media (max-width:992px){
  .countdown-container > div{
    margin:0 1rem;
  }
}
@media (max-width:767px){
  .countdown-container{
    flex-wrap: wrap;
  }
  .countdown-container > div{
    margin:1rem auto;
    max-width:150px;
  }
  .title{
    font-size: 1.5rem;
    line-height: 3.5rem;
    margin:10px 0px;
  }
  .title span{
    font-size: 2rem;
    letter-spacing: 1rem;
  }
}

  
    </style>
 <div class="overlay"></div>
 <div class="wrapper">
   <div class="">
     <h1 class="title"><span></span> COUNTDOWN PEMILOS</h1>
     <div class="countdown-container">
       <div>
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
      </div>
     </div>
   </div>
   <a href="index.php" type="button" class="btn btn-primary">KEMBALI</a>
 </div>
<script src="main.js"></script>
<script>
     let daysItem = document.querySelector("#days");
 let hoursItem = document.querySelector("#hours");
 let minItem = document.querySelector("#min");
 let secItem = document.querySelector("#sec");


 let countDown = () => {
   let futureDate = new Date("<?= $data->start_pemilos ; ?>");
   let currentDate = new Date();
   let myDate = futureDate - currentDate;
   //console.log(myDate);

   let days = Math.floor(myDate / 1000 / 60 / 60 / 24);

   let hours = Math.floor(myDate / 1000 / 60 / 60) % 24;

   let min = Math.floor(myDate / 1000 / 60) % 60;

   let sec = Math.floor(myDate / 1000) % 60;

   if (new Date(futureDate) > new Date()){
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

