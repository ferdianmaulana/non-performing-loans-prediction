<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Ganti Password</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Ganti Password</li>
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
                    <h4 class="m-b-0 text-white">Ganti Password</h4>
                </div>
                <div class="card-body">
                  <?php if (isset($alert) && $alert == "berhasil"){ ?>
                      <div class="alert alert-success hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Ganti Password Berhasil &nbsp;
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                      </div>
                  <?php }elseif (isset($alert) && $alert == "salah") {?>
                    <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-times-circle"></i> Password Lama Salah &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                  </div>
                <?php }elseif (isset($alert) && $alert == "sama") {?>
                  <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-times-circle"></i> Password Baru Sama Dengan Password Lama &nbsp;
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
              <?php }elseif (isset($alert) && $alert == "tidak_cocok") {?>
                <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-times-circle"></i> Konfirmasi Password Baru Tidak Cocok &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
              </div>
                  <?php  } ?>
                  <form class="" action="<?php echo base_url();?>gantiPassword/passBaru" method="post">
                    <div class="form-group row">
                      <label class="col-md-6">Password Lama</label>
                      <div class="col-md-6">
                        <input class="form-control" name="pass_lama" type="password" value="" required>
                      </div>
                    </div>

                    <div class="form-group row pesan_error">
                      <label class="col-md-6">Password Baru</label>
                      <div class="col-md-6">
                        <input class="form-control" name="pass_baru" type="password" value="" required>
                      </div>
                    </div>
                    <div class="form-group row pesan_error">
                      <label class="col-md-6">Konfirmasi Password Baru</label>
                      <div class="col-md-6">
                        <input class="form-control" name="konf_pass_baru" type="password" value="" required>
                      </div>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary active">Simpan</button>
                  </form>
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
