<?php

include '../database/koneksi.php';

include 'header.php';
include 'sidebar.php';

?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Calon</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <p>Home</p>
                </li>
                <li class="breadcrumb-item active">Calon</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row card-title">
                            <h5 class="col-9">Data Calon</h5>
                            <div class="col">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pilihan">
                                    Tambah
                                </button>
                                <a href="../sistem/admin/recapcalon.php" class="btn btn-secondary">
                                    Rekap data calon
                                </a>
                            </div>
                        </div>
                        <?= @$_SESSION['error_logut'];
                        unset($_SESSION['error_logut']) ?>
                        <table class="table datatable">
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
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NBM</th>
                                    <th scope="col">Nomor Calon</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $sql = "SELECT * FROM tb_calon";
                                $query = $db->query($sql);

                                $i = 1;

                                while ($row = $query->fetch_array()) :
                                ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $row['nbm']; ?></td>
                                        <td><?= $row['calon_no']; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td><?= $row['keterangan']; ?></td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-<?= $row['id'] ?>">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-<?= $row['id'] ?>">
                                                Delete
                                            </button>

                                            <div class="modal modal fade" id="pilihan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="../sistem/admin/user.php" method="post">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Metode</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Pilih metode untuk menambah data user : </p>
                                                                <div class="text-center">
                                                                    <a href="" data-bs-toggle="modal" data-bs-target="#file2">File</a>
                                                                    <hr>
                                                                    <a href="" data-bs-toggle="modal" data-bs-target="#add">Manual</a>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal modal-lg fade" id="file2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="../sistem/admin/calon.php" method="post" enctype="multipart/form-data">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Calon</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row mb-3"> <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                                                    <div class="col-sm-10"> <input class="form-control" name="file" type="file" id="formFile"></div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#pilihan">Back</button>
                                                                <button type="submit" class="btn btn-primary" name="action" value="xlsx">Tambah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal modal-lg fade" id="delete-<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="../sistem/admin/calon.php" method="post">
                                                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data <?= $row['nama']; ?></h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Anda yakin ingin menghapus data berikut? <br><span class="small">Ketik confirm untuk melanjutkan.</span></p>
                                                                <input type="text" name="verif" class="form-control" placeholder="confirm" id="verif">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" name="action" value="delete" class="btn btn-primary">Send</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal modal-lg fade" id="edit-<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="../sistem/admin/calon.php" method="post">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data <?= $row['nama']; ?></h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                                <div class="mb-3 row">
                                                                    <label for="staticEmail" class="col-sm-2 col-form-label">NBM</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="nbm" class="form-control" id="staticEmail" value="<?= $row['nbm']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="staticEmail" class="col-sm-2 col-form-label">No Calon</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="nomor_calon" class="form-control" id="staticEmail" value="<?= $row['calon_no']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="nama" class="form-control" id="staticEmail" value="<?= $row['nama']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="keterangan" class="form-control" id="inputPassword" value="<?= $row['keterangan']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" name="action" value="edit">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal modal-lg fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <form action="../sistem/admin/calon.php" method="post">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nama</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="hidden" name="id"">
                                                                <div class=" mb-3 row">
                                                                <label for="staticEmail" class="col-sm-2 col-form-label">NBM</label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" name="nbm" class="form-control" id="staticEmail">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="staticEmail" class="col-sm-2 col-form-label">No Calon</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="nomor_calon" class="form-control" id="staticEmail">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="nama" class="form-control" id="staticEmail">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 row">
                                                                <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" name="keterangan" class="form-control" id="inputPassword">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#pilihan">Back</button>
                                                        <button type="submit" class="btn btn-primary" name="action" value="add">Tambah</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>