

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
    <?php foreach ($data_nasabah as $nasabah)?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Hasil Prediksi Kredit</h4>
                </div>
                <div class="card-body">
                  <div class="form-body">
                      <h3 class="card-title">Data Diri Peminjam</h3>
                      <hr>
                      <div class="row p-t-20">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Nama Lengkap</label>
                                  <input disabled name="nama" type="text" class="form-control" value="<?php echo $nasabah['nama'];?>">
                                </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Status Pernikahan</label>
                                  <input disabled name="pernikahan" type="text" class="form-control" value="<?php echo $nasabah['status_nikah'];?>">
                                </div>
                          </div>
                          <!--/span-->
                      </div>
                      <!--/row-->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Jenis Kelamin</label>
                                  <input disabled name="jk" type="text" class="form-control" value="<?php echo $nasabah['jenis_kelamin'];?>">
                                </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Tanggal Lahir</label>
                                  <input disabled name="usia" type="text" class="form-control" value="<?php echo $nasabah['tgl_lahir'];?>">
                              </div>
                          </div>
                          <!--/span-->
                      </div>
                      <!--/row-->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Pekerjaan</label>
                                  <input disabled name="pekerjaan" type="text" class="form-control" value="<?php echo $nasabah['pekerjaan'];?>">
                              </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Pendapatan Per Bulan (Rupiah)</label>
                                  <input disabled name="pendapatan" type="number" class="form-control" value="<?php echo $nasabah['pendapatan'];?>">
                              </div>
                          </div>

                          <!--/span-->
                      </div>
                      <!--/row-->
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Jumlah Pinjaman</label>
                                  <input disabled name="pinjaman" type="number" class="form-control" value="<?php echo $nasabah['pinjaman'];?>">
                              </div>
                          </div>
                          <!--/span-->
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label">Jangka Waktu Pengembalian</label>
                                  <input disabled name="pengembalian" type="text" class="form-control" value="<?php echo $nasabah['waktu_pengembalian'];?>">
                              </div>
                          </div>

                          <!--/span-->
                      </div>
                      <!--/row-->
                  </div>
                  <div align="center" class="">
                  <label class="control-label">Hasil Prediksi</label>
                  <div class="">
                    <button type="button" class="btn btn-success active" name=""><?php echo $hasil;?></button>
                  </div>
                  <h4 style="margin-top:2%; color:black;">Apakah Pengajuan Diterima?</h4>
                  <div class="">
                    <form class="" action="<?php echo base_url();?>prediksi/insertKeputusan" method="post">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="keputusan" id="inlineRadio1" value="Diterima" required>
                        <label class="form-check-label" for="inlineRadio1">Diterima</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="keputusan" id="inlineRadio2" value="Ditolak">
                        <label class="form-check-label" for="inlineRadio2">Ditolak</label>
                      </div>
                      <div class="">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary active"> <i class="fa fa-check"></i>Simpan</button>
                      </div>
                    </form>
                  </div>
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
