<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Prediksi</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Prediksi</li>
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
                    <h4 class="m-b-0 text-white">Prediksi Kredit</h4>
                </div>
                <div class="card-body">
                  <?php if (isset($alert) && $alert == "tersimpan"){ ?>
                      <div class="alert alert-success hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Data Pengajuan Tersimpan &nbsp;
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                      </div>
                    <?php } ?>
                    <form method="post" action="<?php echo base_url();?>prediksi/insert">
                        <div class="form-body">
                            <h3 class="card-title">Data Diri Peminjam</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama Lengkap</label>
                                        <input name="nama" type="text" class="form-control" placeholder="Nama" required>
                                      </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status Pernikahan</label>
                                        <select name="pernikahan" class="form-control custom-select" required>
                                            <option  value="" disabled selected>Pernikahan</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Menikah">Menikah</option>
                                        </select>
                                      </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <select name="jk" class="form-control custom-select" required>
                                          <option  value="" disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                      </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tanggal Lahir</label>
                                        <input name="usia" type="date" class="form-control" placeholder="dd/mm/yyyy" required>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Pekerjaan</label>
                                        <select name="pekerjaan" class="form-control custom-select" required>
                                          <option  value="" disabled selected>Pekerjaan</option>
                                          <?php foreach ($pekerjaan as $work) {
                                            echo '<option value="'.$work["pekerjaan"].'">'.$work["pekerjaan"].'</option>';
                                          } ?>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Pendapatan Per Bulan (Rupiah)</label>
                                        <input name="pendapatan" type="number" class="form-control" placeholder="Pendapatan" required>
                                    </div>
                                </div>

                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Jumlah Pinjaman</label>
                                        <input name="pinjaman" type="number" class="form-control" placeholder="Pinjaman" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Jangka Waktu Pengembalian</label>
                                        <select name="pengembalian" class="form-control custom-select" required>
                                            <option  value="" disabled selected>Pengembalian</option>
                                            <?php foreach ($waktu_angsuran as $time) {
                                              echo '<option value="'.$time["waktu_angsuran"].'">'.$time["waktu_angsuran"].'</option>';
                                            } ?>
                                        </select>
                                    </div>
                                </div>

                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary active"> <i class="fa fa-check"></i> Prediksi dan Simpan</button>
                        </div>
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
