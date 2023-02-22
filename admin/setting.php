<?php

include '../database/koneksi.php';

if ($_SESSION['role'] != 'admin') return redirect_back();

include 'header.php';
include 'sidebar.php';

?>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Setting</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <p>Home</p>
                </li>
                <li class="breadcrumb-item active">Setting</li>
            </ol>
        </nav>
    </div>
    <?php

    $sql = "SELECT * FROM setting";

    $query = $db->query($sql);

    $data = $query->fetch_object();

    ?>
    <section class="section">
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    if (@$_SESSION['message']) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= @$_SESSION['message']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php else : ?>
                    <?php endif;
                    if (@$_SESSION['message_error']) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= @$_SESSION['message_error']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php else : ?>
                    <?php endif;
                    unset($_SESSION['message'], $_SESSION['message_error']); ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <h5 class="card-title">Auto Start Pemilos</h5>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" onclick="switchonof()" role="switch" id="switch" style="margin-top: 25px !important;" <?= ($data->on_datetime == 1) ? 'checked' : ''; ?> data-bs-target="#alert">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <input class="form-control" value="<?= $data->start_pemilos ?>" disabled>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#edit">
                                    Edit
                                </button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal modal-lg fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form action="../sistem/admin/setting.php" method="post">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tanggal Pemilos</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Masukan tanggal dan waktu dengan format mm/dd/yy hh/mm dan AM atau PM</p>
                                            <div class="col-sm-12">
                                                <input type="hidden" id="id" name="id" value="<?= $data->id ?>">
                                                <input type="datetime-local" name="tanggal" class="form-control" id="staticEmail" value="<?= $data->start_pemilos ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="action" value="edit">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myInput" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <h5 class="card-title">Start Pemilos</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <select class="form-select" onchange="start_pemilos()" aria-label="Default select example" id="start_pemilos" <?= ($data->on_datetime == 1) ? 'disabled' : ''; ?>>

                                    <?php

                                    $switch = ['on' => '1', 'off' => '0'];

                                    foreach ($switch as $key => $value) :
                                    ?>
                                        <option value="<?= $value; ?>" <?= ($value == $data->pemilos) ? 'selected' : '' ?>><?= $key; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <h5 class="card-title">Maks Pilihan</h5>
                        </div>
                        <form action="../sistem/admin/setting.php" method="POST">
                            <div class="row">
                                <div class="col-lg-10">
                                    <input type="text" name="data" class="form-control" value="<?= $data->max_pilih ?>">
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" name="action" value="max_pilih" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    async function switchonof() {

        var value = document.querySelector('#switch')
        var endpoint = 'http://127.0.0.1/pdm/frontend/sistem/admin/setting.php?action=auto_start'
        var id = document.querySelector('#id').value;
        var start_pemilos = document.querySelector('#start_pemilos')

        if (value.checked) {

            var api = await fetch(endpoint + '&id=' + id + '&data=1')
            var data = await api.json();
            if (data.status = 'success') {
                swal(data.message);
                start_pemilos.disabled = true
            } else {
                swal(data.message);
            }
        } else {
            var api = await fetch(endpoint + '&id=' + id + '&data=0')
            var data = await api.json();
            if (data.status = 'success') {
                swal(data.message);
                start_pemilos.disabled = false
            } else {
                swal(data.message);
            }
        }

    }
    async function start_pemilos() {

        var endpoint = 'http://127.0.0.1/pdm/frontend/sistem/admin/setting.php?action=start_pemilos'
        var id = document.querySelector('#id').value;
        var start_pemilos = document.querySelector('#start_pemilos')

        if (start_pemilos.value == 1) {

            var api = await fetch(endpoint + '&id=' + id + '&data=1')
            var data = await api.json();
            if (data.status = 'success') {
                swal(data.message);
            } else {
                swal(data.message);
            }
        } else {
            var api = await fetch(endpoint + '&id=' + id + '&data=0')
            var data = await api.json();
            if (data.status = 'success') {
                swal(data.message);
            } else {
                swal(data.message);
            }
        }

    }
</script>

<?php include 'footer.php'; ?>