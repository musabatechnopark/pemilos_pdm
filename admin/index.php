<?php
require 'header.php';
require 'sidebar.php';
?>
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
                            Reports <span>/Today</span>
                        </h5>

                        <!-- Line Chart -->
                        <canvas id="barChart" style="max-height: 400px;"></canvas>


                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#barChart'), {
                                    type: 'bar',
                                    data: {
                                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'February', 'March', 'April', 'May', 'June', 'July'],
                                        datasets: [{
                                            label: 'Bar Chart',
                                            data: [65, 59, 80, 81, 56, 55, 40, 59, 80, 81, 56, 55, 40],
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
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
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
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Asal Cabang</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
<?php require 'footer.php'; ?>