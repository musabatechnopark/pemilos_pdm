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
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Calon</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                            Tambah
                        </button>
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
                                    <th scope="col">Cabang</th>
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
                                        <td><?= $row['cabang']; ?></td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-<?= $row['id'] ?>">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-<?= $row['id'] ?>">
                                                Delete
                                            </button>

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
                                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Cabang</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="cabang" class="form-control" id="inputPassword" value="<?= $row['cabang']; ?>">
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
                                                                <div class="mb-3 row">
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
                                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Cabang</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="cabang" class="form-control" id="inputPassword">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary" name="action" value="add">Tambah</button>
                                                            </div>
                                                        </form>
                                                    </div>
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