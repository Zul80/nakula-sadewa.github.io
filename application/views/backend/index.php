<div class="col-12">
    <div class="row">
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <a href="<?=base_url('admin')?>"><i
                                class="mdi mdi-account-multiple icon-lg text-primary"></i></a>
                        <div class="ml-3">
                            <p class="mb-0">Jumlah Pelanggan</p>
                            <h6><?=count($pelanggan)?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <a href="<?=base_url('admin')?>"><i class="mdi mdi-cart icon-lg text-danger"></i></a>
                        <div class="ml-3">
                            <p class="mb-0">Transaksi Belum Bayar</p>
                            <h6><?php
								$total = 0;
								foreach ($transaksi as $value){
									if ($value['faktur_status'] == 'belum'){
										$total++;
									}
								}
								echo $total;
								?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <a href="<?=base_url('admin')?>"><i class="mdi mdi-cart icon-lg text-warning"></i></a>
                        <div class="ml-3">
                            <p class="mb-0">Transaksi Menunggu</p>
                            <h6>
                                <?php
								$total = 0;
								foreach ($transaksi as $value){
									if ($value['faktur_status'] == 'tunggu'){
										$total++;
									}
								}
								echo $total;
								?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-md-center">
                        <a href="<?=base_url('admin')?>"><i class="mdi mdi-cart icon-lg text-success"></i></a>
                        <div class="ml-3">
                            <p class="mb-0">Transaksi Selesai</p>
                            <h6>
                                <?php
								$total = 0;
								foreach ($transaksi as $value){
									if ($value['faktur_status'] == 'sudah'){
										$total++;
									}
								}
								echo $total;
								?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="barChart" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="lineChart" width="400" height="400"></canvas>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <canvas id="pieChart" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-6">
                        <canvas id="doughnutChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>


        </div>


    </div>
</body>
<footer>
    <script>
    var ctxBar = document.getElementById('barChart').getContext('2d');
    var barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['A', 'B', 'C', 'D', 'E'],
            datasets: [{
                label: 'Bar Chart',
                data: [10, 20, 30, 40, 50],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        }
    });

    var ctxLine = document.getElementById('lineChart').getContext('2d');
    var lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Line Chart',
                data: [50, 30, 40, 20, 60],
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        }
    });

    var ctxPie = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
            datasets: [{
                data: [10, 20, 30, 40, 50],
                backgroundColor: ['red', 'blue', 'yellow', 'green', 'purple']
            }]
        }
    });

    var ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
    var doughnutChart = new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: ['A', 'B', 'C'],
            datasets: [{
                data: [30, 50, 20],
                backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)'
                ]
            }]
        }
    });
    </script>


</footer>

</html>