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

        <!-- awal tempat pilih -->
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">

            <!-- card pilihan -->
            <div class="col">
                <div class="card pilih">
                    <div class="card-body">
                        <table>
                            <tr>
                                <th rowspan="2" class="px-3">
                                    <h2>1</h2>
                                </th>
                                <td class="ps-3 fw-bold"><a class="stretched-link" href=""></a>Alip Jamaludin</td>
                            </tr>
                            <tr>
                                <td class="ps-3 fw-bold">091783481</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="d-grid col-2 ms-auto mt-3">
            <p class="ijo fw-bold text-end">Anda sudah memilih 6/13</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#pilihmodal">Konfirmasi</button>
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
                        <div class="d-grid col-12 mt-3">
                            <div class="card card-modal">
                                <div class="card-body">
                                    <div class="row">
                                        <span class="col-md-4 px-5 fw-bold">1</span>
                                        <span class="col-md-4 px-5 fw-bold">Alip</span>
                                        <span class="col-md-4 px-5 fw-bold">09808</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <div class="row mt-3 ms-auto">
                            <div class="col-md-4"></div>
                            <div class="col-md-2">
                                <button class="btn btn-outline">batal</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary">lanjut</button>
                            </div>
                            <div class="col-md-4"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>