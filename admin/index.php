<?php
require 'header.php';
require 'sidebar.php';
?>
<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h5 class="card-category">Total Shipments</h5>
                                <h2 class="card-title">Performance</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="chartsuara"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>