<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Tambahkan User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola User</a></li>
                <li class="breadcrumb-item active">Tambahkan User</li>
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
                    <h4 class="m-b-0 text-white">Tambah User</h4>
                </div>
                <div class="card-body">
                  <?php if (isset($alert) && $alert == 'terpakai'): ?>
                    <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Username Sudah Terpakai &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                  <?php endif; ?>
                  <form class="" action="<?php echo base_url();?>kelolaUser/addUser" method="post">
                    <div class="form-group row">
                      <label class="col-md-6">Nama</label>
                      <div class="col-md-6">
                        <input class="form-control" name="nama" type="text" value="<?php echo $user['nama'] ?>" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-6">Username</label>
                      <div class="col-md-6">
                        <input class="form-control" name="username" type="text" value="<?php echo $user['username'] ?>" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-6">Role</label>
                      <div class="col-md-6">
                        <select name="role" class="form-control custom-select" required>
                          <option value="" disabled selected>Pilih Role</option>
                          <option value="pimpinan">Pimpinan</option>
                          <option value="admin">Admin</option>
                          <option value="agen">Agen</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-6">Password</label>
                      <div class="col-md-6">
                        <input class="form-control" name="password" type="password" value="" required>
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
