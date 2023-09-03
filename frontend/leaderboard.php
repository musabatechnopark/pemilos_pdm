<!DOCTYPE html>
<html lang="en">

<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZBH40GQH3C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZBH40GQH3C');
</script>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<main class="main container-fluid p-5">


    <section class="section dashboard">
        <div class="row">

            <div class="col-12 text-center pb-3">
                <h1>Jumlah Suara Sementara</h1>
                <p class="lead">Data berikut masih sementara dan belum fix</p>
            </div>

            <!-- Reports -->
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">
                            Leaderboard Suara
                        </h5>

                        <!-- Line Chart -->
                        <canvas id="barChart" style="max-height: 400px;"></canvas>


                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var ctx = document.getElementById('barChart').getContext('2d');
                                var chart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: [],
                                        datasets: [{
                                            label: 'Bar Chart',
                                            data: [],
                                            backgroundColor: [
                                                'rgba(75, 192, 192, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgb(75, 192, 192)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        animation: {
                                            duration: 2000, // durasi animasi dalam milisecond
                                            easing: 'easeOutQuart' // jenis easing animasi
                                        },
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });

                                async function getdata() {
                                    const api = await fetch('https://pemilos.site/sistem/admin/dashboard.php?type=json')
                                    const {
                                        data
                                    } = await api.json()
                                    var hasil = []
                                    var suara = []
                                    for (let i = 0; i < data.length; i++) {
                                        hasil.push(data[i].nama)
                                        suara.push(data[i].total)
                                    }

                                    // console.log(hasil)
                                    // console.log(suara)

                                    chart.data.labels = hasil
                                    chart.data.datasets[0].data = suara
                                    chart.update();
                                };

                                getdata()

                                setInterval(async function() {
                                    const api = await fetch('https://pemilos.site/sistem/admin/dashboard.php?type=json')
                                    const {
                                        data
                                    } = await api.json()
                                    var hasil = []
                                    var suara = []
                                    for (let i = 0; i < data.length; i++) {
                                        hasil.push(data[i].nama)
                                        suara.push(data[i].total)
                                    }

                                    // console.log(hasil)
                                    // console.log(suara)

                                    chart.data.labels = hasil
                                    chart.data.datasets[0].data = suara
                                    chart.update();
                                }, 50000);
                            });
                        </script>
                        <!-- End Line Chart -->
                    </div>
                </div>
            </div>
            <!-- End Reports -->

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">tabel hasil suara</h5>

                        <!-- tabel hasil suara -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nomer Calon</th>
                                    <th scope="col">Cabang</th>
                                    <th scope="col">Jumlah Suara</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- End tabel hasil suara -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function() {
        setInterval(function() {
            getData()
        }, 50000)
    })

    function getData() {
        $.ajax({
            url: 'https://pemilos.site/sistem/admin/dashboard.php?type=html',
            type: 'GET',
            success: function(response) {
                $("tbody").html(response);
            }
        })
    }

    getData();
</script>

<!-- ======= Footer ======= -->
<footer class="footer">
    <div class="copyright">
        &copy; Musaba Technopark
    </div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>