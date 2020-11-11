<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-8 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Kelola Atribut Prediksi</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Kelola Atribut Prediksi</li>
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
                    <h4 class="m-b-0 text-white">Data Atribut Pekerjaan</h4>
                </div>
                <div class="card-body">
                  <?php if (isset($alert) && $alert == "berhasil"){ ?>
                      <div class="alert alert-success hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Data Atribut Perkejaan Berhasil Ditambahkan &nbsp;
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                      </div>
                  <?php }elseif (isset($alert) && $alert == "sukses") {?>
                    <div class="alert alert-success hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Data Atribut Waktu Angsuran Berhasil Ditambahkan &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                  </div>
                <?php }elseif (isset($alert) && $alert == "gagal") {?>
                  <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-times-circle"></i> Atribut Sudah Tersedia, Gagal Menambah Data Atribut Pekerjaan &nbsp;
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
              <?php }elseif (isset($alert) && $alert == "fail") {?>
                  <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-times-circle"></i> Atribut Sudah Tersedia, Gagal Menambah Data Atribut Waktu Angsuran &nbsp;
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                  </div>
                  <?php  } ?>
                  <button class="btn btn-primary active" type="button" data-toggle="modal" data-target="#pekerjaanmodal"> <i class="fa fa-plus"></i> Tambah Data Atribut Pekerjaan</button>
                  <div class="table-responsive">
                    <table id="data_pekerjaan" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td>No.</td>
                          <td>Pekerjaan</td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      foreach ($pekerjaan as $work){
                          echo '
                            <tr>
                              <td>'.$work["id"].'</td>
                              <td>'.$work["pekerjaan"].'</td>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Data Atribut Waktu Angsuran</h4>
                </div>
                <div class="card-body">
                  <button class="btn btn-primary active" type="button" data-toggle="modal" data-target="#waktuangsuranmodal"> <i class="fa fa-plus"></i> Tambah Data Atribut Waktu Angsuran</button>
                  <div class="table-responsive">
                    <table id="data_waktuangsuran" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td>No.</td>
                          <td>Waktu Angsuran</td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      foreach ($angsuran as $waktu){
                          echo '
                            <tr>
                              <td>'.$waktu["id"].'</td>
                              <td>'.$waktu["waktu_angsuran"].'</td>
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
<!-- modal pekerjaan -->
<div class="Container">
  <div class="row">
    <div class="col-md-12">
      <div class="modal fade" id="pekerjaanmodal">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
          <div class="modal-header">
            <h3>Tambahkan Data Pekerjaan</h3>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url();?>kelolaDropdown/tambahPekerjaan" method="post">
              <div class="form-group row">
                <label class="col-md-6">Pekerjaan</label>
                <div class="col-md-6">
                  <input class="form-control" name="pekerjaan" type="text" value="">
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="submit" value="submit" class="btn btn-primary active">Simpan</button>
            <button type="button" class="btn btn-danger active" data-dismiss="modal">Batal</button>
          </form>
          </div>
        </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- akhir modal pekerjaan -->

<!-- modal waktu angsuran -->
<div class="Container">
  <div class="row">
    <div class="col-md-12">
      <div class="modal fade" id="waktuangsuranmodal">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
          <div class="modal-header">
            <h3>Tambahkan Data Pekerjaan</h3>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url();?>kelolaDropdown/tambahWaktuangsuran" method="post">
              <div class="form-group row">
                <label class="col-md-6">Waktu Angsuran (Bulan)</label>
                <div class=" row col-md-6">
                    <input class="form-control" name="waktu_angsuran" type="number" value="">
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="submit" value="submit" class="btn btn-primary active">Simpan</button>
            <button type="button" class="btn btn-danger active" data-dismiss="modal">Batal</button>
          </form>
          </div>
        </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- akhir modal waktu angsuran -->

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
