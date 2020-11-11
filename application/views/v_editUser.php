<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Edit User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kelola User</a></li>
                <li class="breadcrumb-item active">Edit User</li>
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
                    <h4 class="m-b-0 text-white">Edit User</h4>
                </div>
                <div class="card-body">
                  <form class="" action="<?php echo base_url();?>kelolaUser/editUser" method="post">
                    <input class="form-control" name="id" type="hidden" value="<?php echo $kelola_user["id"]; ?>">
                    <div class="form-group row">
                      <label class="col-md-6">Nama</label>
                      <div class="col-md-6">
                        <input class="form-control" name="nama" type="text" value="<?php echo $kelola_user["nama"]; ?>" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-6">Username</label>
                      <div class="col-md-6">
                        <input class="form-control" name="username" type="text" value="<?php echo $kelola_user["username"]; ?>" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-md-6">Role</label>
                      <div class="col-md-6">
                        <select name="role" class="form-control custom-select" required>
                            <?php if ($kelola_user["role"] == 'admin'){
                              echo  '
                                <option  value="'.$kelola_user["role"].'">Admin</option>
                                <option value="pimpinan">Pimpinan</option>
                                <option value="agen">Agen</option>';
                                ?>
                            <?php }elseif($kelola_user["role"] == 'pimpinan'){
                              echo '
                                <option  value="'.$kelola_user["role"].'">Pimpinan</option>
                                <option value="admin">Admin</option>
                                <option value="agen">Agen</option>' ;
                              ?>
                            <?php }else{
                              echo '
                                <option  value="'.$kelola_user["role"].'">Agen</option>
                                <option value="admin">Admin</option>
                                <option value="pimpinan">Pimpinan</option>' ;
                            }; ?>
                        </select>
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
