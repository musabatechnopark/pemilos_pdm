<?php

include '../database/koneksi.php';

if (empty($_SESSION['login'])) return return_url('../');
if ($_SESSION['role'] == 'admin') return redirect_back();

?>
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
        <div class="container py-5">
            <div class="row d-flex align-items-center justify-content-center text-center">

                <div class="col-12 pb-5 ">
                    <h1 class="fw-bold ijo">APLIKASI E-VOTING MUSABA</h1>
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <img src="../assets/img/welcome.png" class="img w-75 pb-3" alt="Logo Muhammadiyah" />
                    <div class="text-center">
                        <h2 class="fw-bold ijo">Anda sudah memilih
                            <span class="fw-bold kuning"><?= $_SESSION['nama']; ?></span>
                        </h2>
                        <h2 class="fw-bold ijo mb-5">PCM <?= $_SESSION['cabang']; ?></h2>

                        <p class="ijo">silahkan keluar</p>

                        <a class="btn btn-outline lebar p-3" href="../sistem/auth/logout.php">KELUAR</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>