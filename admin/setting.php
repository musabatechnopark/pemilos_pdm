<?php

include '../database/koneksi.php';

if ($_SESSION['role'] != 'admin') return redirect_back();

include 'header.php';
include 'sidebar.php';

?>

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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <h5 class="card-title">Auto Start Pemilos</h5>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" style="margin-top: 25px !important;" <?= ($data->on_datetime == 1) ? 'checked' : ''; ?>>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10">
                                <input class="form-control" value="<?= $data->start_pemilos ?>" disabled>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#edit">
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
                                                <input type="hidden" name="id" value="<?= $data->id ?>">
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

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    async function switchonof() 
    {
        
    }
</script>

<?php include 'footer.php'; ?>