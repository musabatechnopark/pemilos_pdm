<?php
include '../database/koneksi.php';

if ($_SESSION['login']) : ?>
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
        .ijo {
            color: #076132;
        }

        .pilih {
            border-color: #076132 !important;
            border-radius: 20px;
            border-width: 2px;
            color: #076132;
        }

        .pilih:hover {
            color: white;
            background-color: #076132;
        }

        .active {
            color: white;
            background-color: #076132;
        }

        .btn-primary {
            border-color: #076132;
            background-color: #076132;
            width: 100%;
            font-weight: 700;
            border-width: 3px !important;
        }

        .btn-primary:hover {
            background-color: #118549;
            box-shadow: none;
            border-color: #118549;

        }

        .btn-primary:active {
            background-color: #118549 !important;
            box-shadow: none;
            border-color: #118549;

        }

        .btn-primary:disabled {
            background-color: #118549 !important;
            box-shadow: none;
            border-color: #118549;

        }

        .btn-outline {
            border-color: #076132;
            color: #076132;
            width: 100%;
            font-weight: 700;
            border-width: 3px !important;
        }

        .card-modal {
            background-color: #076132;
            border: none;
            color: white;
        }

        .btn-outline:hover {
            background-color: #076132;
            color: white;
            box-shadow: none;
        }

        .diem {
            cursor: default;
        }
    </style>

    <body>
        <div class="container">

            <h2 class="mt-5 ijo">Pilihlah 13 dari 80 kandidat di bawah</h2>

            <form action="../sistem/voting/voting.php" method="post">
                <!-- awal tempat pilih -->
                <div id="daftar" class="row row-cols-1 row-cols-md-4 g-4 mt-2">

                    <?php
                    $sql = "SELECT * FROM tb_calon";
                    $query = mysqli_query($db, $sql);

                    while ($row = mysqli_fetch_assoc($query)) :
                    ?>
                        <!-- card pilihan -->
                        <div class="col">
                            <div class="card pilih" id="co<?= $row['id']; ?>">
                                <div class="card-body">
                                    <table>
                                        <input type="hidden" name="<?= $row['id']; ?>" id="<?= $row['id']; ?>">
                                        <p id="suara<?= $row['id']; ?>" style="display: none;">0</p>
                                        <tr>
                                            <th rowspan=" 2" class="px-3">
                                                <h2 id="no-calon"><?= trim($row['calon_no'], "CALON "); ?></h2>
                                            </th>
                                            <td class="ps-3 fw-bold" id="nama-calon"><button type="button" onclick="tc<?= $row['id'] ?>()" class="m-0 p-0 btn stretched-link kandidat"></button><?= $row['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3 nbm fw-bold"><?= $row['nbm']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>

                <div class="d-grid col-2 ms-auto mt-3">
                    <p class="ijo fw-bold text-end">Anda sudah memilih <span id="total-pilih">0</span>/13</p>
                    <button class="btn btn-primary" disabled id="sub" type="button" onclick="selectdata()" data-bs-toggle="modal" data-bs-target="#pilihmodal">Konfirmasi</button>
                </div>

                <!-- modal error -->
                <div id="kakean" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Modal body text goes here.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="pilihmodal" tabindex="-1" aria-labelledby="pilihmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-body">
                                <!-- header -->
                                <div class="text-center ijo">
                                    <h2>13 Calon Pilihan Anda</h2>
                                    <h5>Apakah anda yakin akan memilih kandidat kandidat berikut?</h5>
                                </div>

                                <!-- pilihan pemilih -->
                                <div id="showpilihan">
                                    <div class="d-grid col-12 mt-3">
                                        <div class="card card-modal">
                                            <div class="card-body">
                                                <div class="row">
                                                    <span class="col-md-4 px-5 fw-bold">1</span>
                                                    <span class="col-md-4 px-5 fw-bold">Calon 1</span>
                                                    <span class="col-md-4 px-5 fw-bold">Alip</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- footer -->
                                <div class="row mt-3 ms-auto">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <button class="btn btn-outline" data-bs-dismiss="modal">batal</button>
                                    </div>
                                    <div class=" col-md-2">
                                        <button type="submit" name="voting" value="true" class="btn btn-primary">lanjut</button>
                                    </div>
                                    <div class="col-md-4"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <script>
                function selectdata() {
                    var a = document.getElementById("daftar").textContent.split("\n").map(part => part.trim()).filter(part => part.trim().length > 0);
                    var b = document.getElementsByTagName("input");

                    var datas = [];

                    for (let i = 0; i < a.length; i += 4) {
                        datas.push([a[i], a[i + 1], a[i + 2], a[i + 3]]);
                    }

                    $("#showpilihan").empty();

                    var no = 1;

                    for (let i = 0; i < datas.length; i++) {
                        if (datas[i][0] == 1) {
                            $("#showpilihan").append("<div class='d-grid col-12 mt-3'> <div class = 'card card-modal' > <div class = 'card-body'><div class = 'row' ><span class = 'col-md-2 px-5 fw-bold' > " + (no++) + " </span> <span class = 'col-md-3 px-5 fw-bold' > CALON " + (datas[i][1]) + " </span> <span class = 'col-md-3 px-5 fw-bold' > " + (datas[i][2]) + " </span> <span class = 'col-md-3 px-5 fw-bold' > " + (datas[i][3]) + " </span> </div> </div> </div> </div>");
                        }
                    }

                }
            </script>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php
        $sql = "SELECT * FROM tb_calon";
        $query = mysqli_query($db, $sql);
        while ($row = mysqli_fetch_assoc($query)) :
        ?>
            <script>
                function tc<?= $row['id'] ?>() {
                    var a = document.getElementById("<?= $row['id'] ?>");
                    var b = document.getElementById("co<?= $row['id']; ?>");
                    var suara = document.getElementById("suara<?= $row['id']; ?>");
                    var element = document.getElementById("total-pilih");
                    var number = parseInt(element.textContent);

                    if (a.value == 0) {
                        if (number >= 13) {
                            return Swal.fire('anda sudah memilih 13')
                        } else {
                            b.classList.add("active");
                            element.innerHTML = Number(number) + 1;
                            a.value = Number(a.value) + 1
                            suara.innerHTML = a.value
                        }
                    } else {
                        b.classList.remove("active");
                        element.innerHTML = Number(number) - 1;
                        a.value = Number(a.value) - 1
                        suara.innerHTML = a.value
                    }

                    var sub = document.getElementById("sub");

                    if (Number(number) + 1 == 13) {
                        sub.disabled = false;
                    } else {
                        sub.disabled = true;
                    }

                }
            </script>
        <?php endwhile; ?>
    </body>

    </html>
<?php else :
    return_url('../index.php');
endif; ?>