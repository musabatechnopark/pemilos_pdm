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
        background-image: url("assets/img/Vector\ 3.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .ijo {
        color: #076132;
    }

    .btn-primary {
        background-color: #076132;
        width: 100%;
        font-weight: 700;
        border: none;
    }

    .btn-primary:hover {
        background-color: #118549;
        box-shadow: none;
    }

    .btn-primary:active {
        background-color: #118549 !important;
        box-shadow: none;
    }

    .form-control {
        display: block;
        width: 100%;
        font-size: 1rem;
        font-weight: 400;
        border-color: #a5a5a5 !important;
        border-style: solid !important;
        border-width: 0 0 3px 0 !important;
        border-radius: 0;
        background-clip: padding-box;
    }

    .form-control:focus {
        outline: 0;
        box-shadow: none !important;
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

    .focus {
        border-color: #076132 !important;
        color: #076132 !important;
    }
</style>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">

                <!-- card logo Muhammadiyah -->
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="assets/img/Union-min.png" class="img-fluid" alt="Logo Muhammadiyah" />
                </div>

                <!-- card login -->
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="text-center">
                        <h2 class="fw-bold mb-2 ijo">Selamat Datang</h2>
                        <p class="text-break mb-5 ijo">Silahkan Login dengan memasukan Username dan Password</p>
                    </div>

                    <?php
                    session_start();
                    if (@$_SESSION['error_login'] || @$_SESSION['error_login_catch']) : ?>
                        <div style="margin-left: -40px;">
                            <ul class="text-danger"> Error :
                                <li class="ms-4"><?= $_SESSION['error_login'] || @$_SESSION['error_login_catch']; ?></li>
                            </ul>
                        </div>
                    <?php
                    endif;
                    ?>

                    <form name="login" action="sistem/auth/login.php" class="mt-2" method="POST">

                        <!-- NBM input -->
                        <div class="input-group mb-4">
                            <span class="input-group-text icon-name"><i class="bi bi-person-fill"></i></span>
                            <div class="form-floating">
                                <input type="text" id="form1Example13" class="form-control form-control-lg name <?php if (@$_SESSION['error_login']) : ?> is-invalid <?php endif; ?>" name="nbm" placeholder="NBM" required autofocus />
                                <label for="form1Example13">NBM</label>
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="input-group mb-4">
                            <span class="input-group-text icon-pass"><i class="bi bi-lock-fill"></i></span>
                            <div class="form-floating">
                                <input type="password" id="form1Example23" class="form-control form-control-lg pass <?php if (@$_SESSION['error_login']) : ?> is-invalid <?php endif; ?>" name="password" placeholder="Password" required />
                                <label for="form1Example23">Password</label>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="login" value="user" class="btn btn-primary btn-lg btn-block mt-5">
                            LOGIN
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        const name = document.querySelector(".name");
        const name1 = document.querySelector(".icon-name");
        name.addEventListener("focus", () => {
            name1.classList.add("focus");
            name.classList.add("focus");
        });
        name.addEventListener("blur", () => {
            name1.classList.remove("focus");
            name.classList.remove("focus");
        });

        const pass = document.querySelector(".pass");
        const pass1 = document.querySelector(".icon-pass");
        pass.addEventListener("focus", () => {
            pass1.classList.add("focus");
            pass.classList.add("focus");
        });
        pass.addEventListener("blur", () => {
            pass1.classList.remove("focus");
            pass.classList.remove("focus");
        });
    </script>
</body>

</html>
<?php unset($_SESSION['error_login'], $_SESSION['error_login_catch']); ?>