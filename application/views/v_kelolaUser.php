<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Kelola User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Kelola User</li>
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
                    <h4 class="m-b-0 text-white">Data User</h4>
                </div>
                <div class="card-body">
                  <?php if (isset($alert) && $alert == "hapus"){ ?>
                      <div class="alert alert-success hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> User Berhasil Dihapus &nbsp;
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                      </div>
                  <?php }elseif (isset($alert) && $alert == "edit") {?>
                    <div class="alert alert-success hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Data User Berhasil Diperbarui &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                  </div>
                <?php }elseif (isset($alert) && $alert == "tambah") {?>
                  <div class="alert alert-success hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Berhasil Menambah User &nbsp;
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
                  <?php  } ?>
                  <form class="" action="<?php echo base_url();?>kelolaUser/tambahUser" method="post">
                    <button class="btn btn-primary active" type="submit" name="submit"> <i class="fa fa-plus"></i> Tambahkan User</button>
                  </form>
                  <div class="table-responsive">
                    <table id="kelola_user" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <td>No.</td>
                          <td style="display:none;">id</td>
                          <td>Nama</td>
                          <td>Username</td>
                          <td>Role</td>
                          <td>Action</td>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $counter = 1;
                      foreach ($data_user as $kelola_user):?>
                            <tr>
                              <td><?php echo $counter;?></td>
                              <td style="display:none;"><?php echo $kelola_user["id"]; ?></td>
                              <td><?php echo $kelola_user["nama"];?></td>
                              <td><?php echo $kelola_user["username"];?></td>
                              <td><?php echo $kelola_user["role"];?></td>
                              <td>
                              <div class="btn-group " role="group" aria-label="Basic example">
                                <button type="button" class="editbtn btn btn-primary btn-sm" data-toggle="modal" data-target="#editmodal<?php echo $counter?>">
                                <a data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </button>
                                <button type="button" class="hapusbtn btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusmodal<?php echo $counter?>">
                                  <a title="Hapus" data-toggle="tooltip"><i class="fa fa-close"></i></a>
                                </button>
                              </div>
                              </td>
                              <!-- modal hapus -->
                              <div class="Container">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="modal fade" id="hapusmodal<?php echo $counter; ?>" tabindex="-1">
                                      <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                          <h3>Apakah Anda ingin Menghapus User ini?</h3>
                                        </div>
                                        <div class="modal-body">
                                          <form class="" action="<?php echo base_url();?>kelolaUser/hapusUser" method="post">
                                            <input class="form-control" name="id" type="hidden" value="<?php echo $kelola_user["id"]; ?>">
                                            <div class="form-group row">
                                              <label class="col-md-6">Nama</label>
                                              <div class="col-md-6">
                                                <input class="form-control" name="nama" type="text" value="<?php echo $kelola_user["nama"]; ?>" disabled>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label class="col-md-6">Username</label>
                                              <div class="col-md-6">
                                                <input class="form-control" name="username" type="text" value="<?php echo $kelola_user["username"]; ?>" disabled>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <label class="col-md-6">Role</label>
                                              <div class="col-md-6">
                                                <input class="form-control" name="role" type="text" value="<?php echo $kelola_user["role"]; ?>" disabled>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" name="submit" value="submit" class="btn btn-primary active">Yakin</button>
                                          <button type="button" class="btn btn-danger active" data-dismiss="modal">Tidak</button>
                                        </form>
                                        </div>
                                      </div>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                              <!-- akhir modal hapus -->
                              <!-- modal edit -->
                              <div class="Container">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="modal fade" id="editmodal<?php echo $counter; ?>">
                                      <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                          <h3>Edit User</h3>
                                        </div>
                                        <div class="modal-body">
                                          <?php if (isset($alert) && $alert == "terpakai"){ ?>
                                              <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Username Sudah Terpakai &nbsp;
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                              </div>
                                            <?php } ?>
                                          <form class="" action="<?php echo base_url();?>kelolaUser/editUser" method="post">
                                            <input class="form-control" name="id" type="hidden" value="<?php echo $kelola_user["id"]; ?>">
                                            <input class="form-control" name="counter" type="hidden" value="<?php echo $counter ?>">
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
                              <!-- akhir modal edit -->
                            </tr>

                            <?php $counter++; endforeach; ?>
                     </tbody>
                    </table>

                  </div>

                </div>
            </div>
        </div>
    </div>
  </div>
  <?php if (isset($index)) {?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#editmodal<?php echo $index ?>").modal('show');
        });
    </script>
  <?php  } ?>
