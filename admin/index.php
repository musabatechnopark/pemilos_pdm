<?php
include 'header.php';
include 'sidebar.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Reports -->
            <div class="col-12">
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">Today</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">This Month</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">This Year</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">
                            Leadeerboard Suara
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

                                setInterval(async function() {
                                    const api = await fetch('http://127.0.0.1/pemilos_pdm/sistem/admin/dashboard.php?type=json')
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
                                }, 1000);
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
                        <h5 class="card-title">Table with hoverable rows</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nomer Calon</th>
                                    <th scope="col">Jumlah Suara</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

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
        }, 1000)
    })

    function getData() {
        $.ajax({
            url: 'http://127.0.0.1/pemilos_pdm/sistem/admin/dashboard.php?type=html',
            type: 'GET',
            success: function(response) {
                $("tbody").html(response);
            }
        })
    }
</script>
<!-- End #main -->
<?php include 'footer.php'; ?>
