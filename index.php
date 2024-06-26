<?php
include 'database/koneksi.php';
$sql = "SELECT * FROM setting";

$query = $db->query($sql);

$data = $query->fetch_object();

if ($data->pemilos != 1) return return_url('countdown.php');

if (@!$_SESSION['login']) : ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="assets/css/user.css">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap demo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    </head>


    <body>
        <section class="vh-100">
            <div class="container h-100">
                <div class="row d-flex align-items-center justify-content-center text-center h-100">

                    <!-- card logo Muhammadiyah -->
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="assets/img/logo-musyda.png" class="img w-50" alt="Logo Muhammadiyah" />
                    </div>

                    <!-- card login -->
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <div class="text-center">
                            <h2 class="fw-bold mb-2 ijo">Selamat Datang</h2>
                            <p class="text-break mb-5 ijo">Silahkan Login dengan memasukan Username dan Password</p>
                        </div>

                        <?php
                        if (@$_SESSION['error_login'] || @$_SESSION['error_login_catch']) : ?>
                            <div style="margin-left: -40px;">
                                <ul class="text-danger"> Error :
                                    <li class="ms-4"><?= $_SESSION['error_login'], @$_SESSION['error_login_catch']; ?></li>
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
                                    <input type="number" id="form1Example13" class="form-control form-control-lg name <?php if (@$_SESSION['error_login']) : ?> is-invalid <?php endif; ?>" name="nbm" placeholder="NBM" required autofocus />
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
                            <button type="submit" name="login" value="user" class="btn btn-primary lebar btn-lg btn-block mt-5">
                                LOGIN
                            </button>
                        </form>
                    </div>
                </div>
                <div class="fixed-bottom text-center">
                    <img src="assets/img/musaba.png" class="p-2 p- mb-5" style="height: 100px;" alt="">
                    <img src="assets/img/techno.png" class="p-2 mb-5" style="height: 100px;" alt="">
                </div>
            </div>
        </section>

        <div style="display: none;" id="waktu"></div>
        <input type="hidden" id="id" value="<?= $data->id; ?>">
        <input id="start_time" type="hidden" value="<?= $data->start_pemilos; ?>">

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

    <script type="text/javascript">
        async function tampilkanWaktu() {

            var date = new Date(); // ambil waktu sekarang
            var tahun = date.getFullYear(); // ambil tahun
            var bulan = date.getMonth() + 1; // ambil bulan (di JavaScript, bulan dimulai dari 0)
            var tanggal = date.getDate();
            var jam = date.getHours(); // ambil jam
            var menit = date.getMinutes(); // ambil menit
            var detik = date.getSeconds(); // ambil detik

            var start = document.getElementById("start_time").value;
            var id = document.getElementById("id").value;

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
            }

        }

        setInterval(tampilkanWaktu, 1000); // panggil fungsi tampilkanWaktu setiap 1 detik
    </script>

    </html>
    <?php unset($_SESSION['error_login'], $_SESSION['error_login_catch']); ?>

<?php else :
    return_url('user/pilih.php');
endif; ?>