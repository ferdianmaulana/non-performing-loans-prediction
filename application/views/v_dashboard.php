
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

      <?php foreach ($total as $jml)?>
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="d-flex flex-row">
                    <div class="p-10 bg-info">
                        <h3 class="text-white box m-b-0"><i class="fa fa-users fa-2x"></i></h3></div>
                    <div class="align-self-center m-l-20">
                        <h3 class="m-b-0 text-info"><?php echo $jml['jumlah']; ?></h3>
                        <h5 class="text-muted m-b-0">Total Pengajuan</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Time Series Total Pengajuan</h4>
                    <div>
                      <canvas id="series"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Persentase Pengajuan (%)</h4>
                    <canvas id="persentase"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <div class="row">
      <?php if ($this->session->userdata('role') == 'pimpinan'){ ?>
        <!-- Column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Trend Total Pengajuan</h4>
                    <canvas id="line"></canvas>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Pengajuan Per Agen</h4>
                    <canvas id="bar_agen"></canvas>
                </div>
            </div>
        </div>

      <?php }else{ ?>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Trend Total Pengajuan</h4>
                    <canvas id="line"></canvas>
                </div>
            </div>
        </div>

      <?php } ?>
    </div>


    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
<script>
  let series = document.getElementById('series').getContext('2d');

  let serChart = new Chart(series, {
    type:'bar',
    data:{
      labels:[<?php foreach ($perbulan as $barperbulan){
         echo "'".$barperbulan['bulan']."'".",";}?>],
      datasets:[{
        label: 'Diterima',
        data:[<?php foreach ($diterima as $barditerima) {
        					echo $barditerima['diterima'].",";}?>],
        backgroundColor: '#007bff'
      },{
        label: 'Ditolak',
        data:[<?php foreach ($ditolak as $barditolak) {
        					echo $barditolak['ditolak'].",";}?>],
        backgroundColor: '#ffae00'
      }]
    },
    options:{
      scales:{
        yAxes:[{
          display: true,
          ticks:{
            beginAtZero: true
          }
        }]
      }
    }

  });
</script>

<script>
  let line = document.getElementById('line').getContext('2d');

  let lineChart = new Chart(line, {
    type:'line',
    data:{
      labels:[<?php foreach ($perbulan as $perbulan){
         echo "'".$perbulan['bulan']."'".",";}?>],
      datasets:[{
        label: 'Diterima',
        data:[ <?php foreach ($diterima as $diterima) {
        					echo $diterima['diterima'].",";}?>],
        borderColor: '#007bff',
        fill:false
      },{
        label: 'Ditolak',
        data:[<?php foreach ($ditolak as $ditolak) {
        					echo $ditolak['ditolak'].",";}?>],
        borderColor: '#ffae00',
        fill:false
      }]
    },
    options:{
      scales:{
        yAxes:[{
          display: true,
          ticks:{
            beginAtZero: true
          }
        }]
      }
    }

  });
</script>
<script>
  let myChart = document.getElementById('persentase').getContext('2d');

  let pieChart = new Chart(myChart, {
    type:'pie',
    data:{
      labels:['Diterima', 'Ditolak'],
      datasets:[{
        label: 'Persentase Pengajuan',
        data:[<?php foreach ($persentase as $persentase){
          echo $persentase['diterima']/($persentase['diterima']+$persentase['ditolak'])*100 .",";  echo $persentase['ditolak']/($persentase['diterima']+$persentase['ditolak'])*100;}?>],
        backgroundColor: ['#007bff', '#ffae00']
      }]
    },
    options:{
    }

  });
</script>
  <script>
    let agen = document.getElementById('bar_agen').getContext('2d');

    let agenChart = new Chart(agen, {
      type:'bar',
      data:{
        labels:[<?php foreach ($agen as $agent){
           echo "'".$agent['agen']."'".",";}?>],
        datasets:[{
          label: 'Diterima',
          data:[<?php foreach ($agen_diterima as $diterima_agen) {
          					echo $diterima_agen['diterima'].",";}?>],
          backgroundColor: '#007bff'
        },{
          label: 'Ditolak',
          data:[<?php foreach ($agen_ditolak as $ditolak_agen) {
          					echo $ditolak_agen['ditolak'].",";}?>],
          backgroundColor: '#ffae00'
        }]
      },
      options:{
        scales:{
          yAxes:[{
            display: true,
            ticks:{
              beginAtZero: true
            }
          }]
        }
      }

    });
  </script>


<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
