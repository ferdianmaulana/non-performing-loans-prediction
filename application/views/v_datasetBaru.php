<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dataset Baru</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dataset Baru</li>
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
          <div class="alert alert-danger description pull" style="width: 100%">
            <p style="font-weight: bold;">PERHATIKAN!</p>
            Pastikan isi dalam file CSV <strong>berisi</strong>, <strong>berurutan</strong>, dan memiliki <strong>header</strong> seperti sebagai berikut: <br>
            <p style="font-weight: bold;">status_pernikahan,jenis_kelamin,usia,pendapatan,pekerjaan,jumlah_pinjaman,waktu_angsuran,status_kredit</p>
            atau bisa download template-nya di <a href="<?php echo base_url() ?>assets/template/template_dataset.csv" download="template_dataset.csv"> sini
                                      </a>
          </div>

            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Unggah Dataset Baru</h4>
                </div>
                <div class="card-body">
                  <?php if (isset($alert) && $alert == 'berhasil'){ ?>
                    <div class="alert alert-success hide_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> Dataset Berhasil Diunggah &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                  <?php }elseif (isset($alert) && $alert == 'salah') { ?>
                    <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-times-circle"></i> Format File Salah, Dataset Gagal Diunggah &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                  <?php }elseif (isset($alert) && $alert == 'kurang') { ?>
                    <div class="alert alert-danger hide_msg pull" style="width: 100%"> <i class="fa fa-times-circle"></i> Jumlah Kolom Data dan Atribut Tidak Sesuai, Dataset Gagal Diunggah &nbsp;
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                  <?php } ?>
                  <form action="<?php echo base_url();?>datasetBaru/uploadCsv" method="post" enctype="multipart/form-data">
                    Pilih file .csv untuk diunggah:
                    <input type="file" name="namafile" class="" accept=".csv" required>
                    <input class="btn btn-primary active" type="submit" name="submit">
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
