<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>
<style>
    body {
        background-image: url("img/Vector\ 3.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .ijo {
        color: #076132;
    }

    .kuning {
        color: #BE810A;
    }

    .btn-primary {
        background-color: #076132;
        width: 40%;
        font-weight: 700;
        border: none;
    }

    .btn-primary:hover {
        background-color: #118549;
        box-shadow: none;
    }

    .btn-outline {
        border-color: #076132;
        color: #076132;
        width: 40%;
        font-weight: 700;
        border-width: 3px !important;

    }

    .btn-outline:hover {
        background-color: #076132;
        color: white;
        box-shadow: none;
    }

    .form-control {
        display: block;
        width: 100%;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        border-color: #a5a5a5 !important;
        border-style: solid !important;
        border-width: 0 0 3px 0 !important;
        padding: 0px !important;
        height: auto;
        border-radius: 0;
        background-clip: padding-box;
    }

    .form-control:focus {
        border-color: #076132 !important;
        outline: 0;
        box-shadow: none;
    }

    .input-group-text {
        line-height: 1.5;
        border-color: #a5a5a5;
        color: #a5a5a5;
        border-width: 0 0 3px 0 !important;
        height: auto;
        border-radius: 0;
        background: none;
    }

    .input-group-text.focus {
        border-color: #076132 !important;
        color: #076132 !important;
    }
</style>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-5">
                    <div class="text-center">
                        <h2 class="fw-bold ijo">Trimakasih sudah memilih</h2>
                        <h2 class="fw-bold kuning"><?= $_SESSION['nama']; ?></h2>
                        <h2 class="fw-bold ijo mb-5">PCM <?= $_SESSION['cabang']; ?></h2>

                        <p class="ijo">silahkan keluar</p>

                        <a class="btn btn-outline" href="../sistem/auth/logout.php">KELUAR</a>
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