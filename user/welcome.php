<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/user.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>


<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center text-center h-100">

                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="../assets/img/logo-musyda.png" class="img w-50" alt="Logo Muhammadiyah" />
                </div>

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="text-center">
                        <h2 class="fw-bold ijo">Selamat Datang</h2>
                        <h2 class="fw-bold kuning"><?= $_SESSION['nama']; ?></h2>
                        <h2 class="fw-bold ijo mb-5">PCM <?= $_SESSION['cabang']; ?></h2>

                        <a class="btn btn-primary mb-2 sedang" href="pilih.php">MULAI</a> <br>
                        <a class="btn btn-outline sedang" href="../sistem/auth/logout.php">KELUAR</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const Name = document.querySelector(".name");
        const naMe = document.querySelector(".icon-name");
        Name.addEventListener("focus", () => {
            naMe.classList.add("focus");
        });
        Name.addEventListener("blur", () => {
            naMe.classList.remove("focus");
        });

        const Pass = document.querySelector(".pass");
        const paSs = document.querySelector(".icon-pass");
        Pass.addEventListener("focus", () => {
            paSs.classList.add("focus");
        });
        Pass.addEventListener("blur", () => {
            paSs.classList.remove("focus");
        });
    </script>
    
    <script type="text/javascript">
       async function tampilkanWaktu() {

           var date = new Date(); // ambil waktu sekarang
           var tahun = date.getFullYear(); // ambil tahun
           var bulan = date.getMonth() + 1; // ambil bulan (di JavaScript, bulan dimulai dari 0)
           var tanggal = date.getDate();
           var jam = date.getHours(); // ambil jam
           var menit = date.getMinutes(); // ambil menit
           var detik = date.getSeconds(); // ambil detik

           var start = document.getElementById("start_time").innerHTML
           var id = document.getElementById("id").value

           // tambahkan angka 0 di depan jika angka hanya satu digit
           if (bulan < 10) bulan = "0" + bulan;
           if (jam < 10) jam = "0" + jam;
           if (menit < 10) menit = "0" + menit;
           if (detik < 10) detik = "0" + detik;

           // tampilkan waktu
           var waktu = tahun + "-" + bulan + "-" + tanggal + " " + jam + ":" + menit + ":" + detik;

           if (new Date(waktu) > new Date(start)) {
               var api = await fetch('http://127.0.0.1/pdm/frontend/sistem/admin/setting.php?action=start_otomatis&id=' + id + '&data=1')
               var data = await api.json()

               console.log(data)
           }

           console.log(waktu, '\n', start)
       }

       setInterval(tampilkanWaktu, 1000); // panggil fungsi tampilkanWaktu setiap 1 detik
   </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>