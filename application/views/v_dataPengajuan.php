<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Data Pengajuan</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Data Pengajuan</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Data Pengajuan</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="data_pengajuan" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td>Nama</td>
                          <td>Status Pernikahan</td>
                          <td>Jenis Kelamin</td>
                          <td>Tanngal Lahir</td>
                          <td>Pekerjaan</td>
                          <td>Pendapatan</td>
                          <td>Jumlah Pinjaman</td>
                          <td>Waktu Angsuran</td>
                          <td>Prediksi</td>
                          <td>Keputusan</td>
                          <td>Tgl Pengajuan</td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      foreach ($data_pengajuan as $row){
                          echo '
                            <tr>
                              <td>'.$row["nama"].'</td>
                              <td>'.$row["status_nikah"].'</td>
                              <td>'.$row["jenis_kelamin"].'</td>
                              <td>'.$row["tgl_lahir"].'</td>
                              <td>'.$row["pekerjaan"].'</td>
                              <td>'.$row["pendapatan"].'</td>
                              <td>'.$row["pinjaman"].'</td>
                              <td>'.$row["waktu_pengembalian"].'</td>
                              <td>'.$row["hasil_prediksi"].'</td>
                              <td>'.$row["keputusan"].'</td>
                              <td>'.$row["waktu_pengajuan"].'</td>
                            </tr>
                          ';}
                       ?>
                     </tbody>
                    </table>

                  </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Row -->

    <!-- Row -->

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->

    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
