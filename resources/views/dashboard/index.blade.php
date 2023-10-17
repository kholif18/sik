@extends('partial.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">
        <a href="{{ url()->current() }}">
            Dashboard
        </a>
    </li>
@endsection

@section('content')
    <div class="row">
      <div class="col-xxl-4 col-md-4">
          <div class="card card-primary">

              <div class="card-body ">
                  <h5 class="card-title">Saldo Akhir</span></h5>

                  <div class="d-flex align-items-center">
                      <div class="card-icon d-flex align-items-center justify-content-center">
                          <i class="bi bi-wallet"></i>
                      </div>
                      <div class="ps-3">
                          <h6>Rp 89.545.000</h6>
                          <span class="small pt-2 ps-1">Total saldo bulan ini</span>
                      </div>
                  </div>
              </div>

          </div>
      </div>

      <div class="col-xxl-4 col-md-4">
          <div class="card card-success">

              <div class="card-body ">
                  <h5 class="card-title">Pemasukan</span></h5>

                  <div class="d-flex align-items-center">
                      <div class="card-icon d-flex align-items-center justify-content-center">
                          <i class="bi bi-box-arrow-down"></i>
                      </div>
                      <div class="ps-3">
                          <h6>Rp 50.545.000</h6>
                          <span class="small pt-2 ps-1">Total pemasukan bulan ini</span>
                      </div>
                  </div>
              </div>

          </div>
      </div>

      <div class="col-xxl-4 col-md-4">
          <div class="card card-danger">

              <div class="card-body ">
                  <h5 class="card-title">Pengeluaran</span></h5>

                  <div class="d-flex align-items-center">
                      <div class="card-icon d-flex align-items-center justify-content-center">
                          <i class="bi bi-box-arrow-up"></i>
                      </div>
                      <div class="ps-3">
                          <h6>Rp 12.240.000</h6>
                          <span class="small pt-2 ps-1">Total pengeluaran bulan ini</span>
                      </div>
                  </div>
              </div>

          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Grafik Keuangan Bulanan</h5>

            <!-- Line Chart -->
            <div id="reportsChart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#reportsChart"), {
                  series: [{
                    name: 'Saldo',
                    data: [31, 40, 28, 51, 42, 82, 56],
                  }, {
                    name: 'Pemasukan',
                    data: [11, 32, 45, 32, 34, 52, 41]
                  }, {
                    name: 'Pengeluaran',
                    data: [15, 11, 32, 18, 9, 24, 11]
                  }],
                  chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                      show: false
                    },
                  },
                  markers: {
                    size: 4
                  },
                  colors: ['#4154f1', '#2eca6a', '#ee6666'],
                  fill: {
                    type: "gradient",
                    gradient: {
                      shadeIntensity: 1,
                      opacityFrom: 0.3,
                      opacityTo: 0.4,
                      stops: [0, 90, 100]
                    }
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    curve: 'smooth',
                    width: 2
                  },
                  xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                  },
                  tooltip: {
                    x: {
                      format: 'dd/MM/yy HH:mm'
                    },
                  }
                }).render();
              });
            </script>
            <!-- End Line Chart -->

          </div>

        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grafik Bar Pengeluaran Bulanan</h5>
    
            <!-- Bar Chart -->
            <canvas id="barChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#barChart'), {
                  type: 'bar',
                  data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                      label: 'Pemasukan',
                      data: [65, 59, 80, 81, 56, 55, 40],
                      backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                      ],
                      borderColor: [
                        'rgb(75, 192, 192)',
                      ],
                      borderWidth: 1
                    },{
                      label: 'Pengeluaran',
                      data: [23, 45, 50, 30, 20, 25, 10],
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                      ],
                      borderColor: [
                        'rgb(255, 99, 132)',
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
            <!-- End Bar CHart -->
    
          </div>
        </div>
      </div>
    </div>
@endsection
