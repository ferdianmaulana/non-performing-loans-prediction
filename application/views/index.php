<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png"> -->
    <title>Kredit KSU Surya Abadi</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.2.45/css/materialdesignicons.min.css">
    <!--alerts CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

</head>

<body class="fix-header fix-sidebar card-no-border">

    <!-- Preloader - style you can find in spinners.css -->

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <!-- Main wrapper - style you can find in pages.scss -->

    <div id="main-wrapper">

        <!-- Topbar header - style you can find in pages.scss -->

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">

                <!-- Logo -->

                <div class="navbar-header">
                  <?php if ($this->session->userdata('role') == 'pimpinan' && 'agen'){ ?>
                    <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>">
                    <?php }else{ ?>
                      <a class="navbar-brand" href="<?php echo base_url('kelolaUser') ?>">
                      <?php } ?>
                         <span><img src="<?php echo base_url('assets/images/surya_abadi.png')?>"></span>
                       </a>
                </div>

                <!-- End Logo -->

                <div class="navbar-collapse">

                    <!-- toggle and nav items -->

                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                    </ul>

                    <!-- User profile and search -->

                    <ul class="navbar-nav my-lg-0">

                        <!-- Profile -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>assets/images/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url() ?>assets/images/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php echo $this->session->userdata('name'); ?></h4>
                                                <p class="text-muted"><?php echo $this->session->userdata('role'); ?></p>
                                        </div>
                                    </li>
                                    <li><a href="<?php echo base_url('gantiPassword') ?>"><i class="ti-settings"></i> Ganti Password</a></li>
                                    <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <!-- End Topbar header -->


        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        <aside class="left-sidebar">


            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"></li>
                        <?php
                        $role = $this->session->userdata('role');
                        if ($role == 'pimpinan' || $role == 'agen'): ?>

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('dashboard') ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('prediksi') ?>" aria-expanded="false"><i class="mdi mdi-refresh"></i><span class="hide-menu">Prediksi</span></a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('dataPengajuan') ?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Data Pengajuan</span></a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('akurasi') ?>" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Akurasi</span></a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('decisionTree') ?>" aria-expanded="false"><i class="mdi mdi-pine-tree"></i><span class="hide-menu">Decision Tree</span></a>
                        </li>

                      <?php else: ?>

                          <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('kelolaUser') ?>" aria-expanded="false"><i class="mdi mdi-account-multiple-plus "></i><span class="hide-menu">Kelola User</span></a>
                          </li>

                          <li>
                              <a class="waves-effect waves-dark" href="<?php echo base_url('kelolaDropdown') ?>" aria-expanded="false"><i class="mdi mdi-chevron-down-circle "></i><span class="hide-menu">Kelola Atribut Prediksi</span></a>
                          </li>

                          <li>
                              <a class="waves-effect waves-dark" href="<?php echo base_url('datasetBaru') ?>" aria-expanded="false"><i class="mdi mdi-file-import"></i><span class="hide-menu">Memasukkan Dataset Baru</span></a>
                          </li>

                          <li>
                              <a class="waves-effect waves-dark" href="<?php echo base_url('akurasi') ?>" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Akurasi</span></a>
                          </li>

                          <li>
                              <a class="waves-effect waves-dark" href="<?php echo base_url('decisionTree') ?>" aria-expanded="false"><i class="mdi mdi-pine-tree"></i><span class="hide-menu">Decision Tree</span></a>
                          </li>

                        <?php endif; ?>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a style="width:50%;" href="<?php echo base_url('gantiPassword') ?>" class="link" data-toggle="tooltip" title="Ganti Password"><i class="ti-settings"></i></a>
                <!-- item-->
                <a style="width:50%;" href="<?php echo base_url('auth/logout') ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->



        </aside>

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->











        <!-- Page wrapper  -->

        <div class="page-wrapper">




        <!-- ==========================Dynamicaly Show Main Page Content============================ -->

            <?php echo $main_content; ?>

        <!-- ==========================Dynamicaly Show Main Page Content============================ -->




            <!-- footer -->

            <footer class="footer">
                © 2020 KSU Surya Abadi
            </footer>

            <!-- End footer -->

        </div>

        <!-- End Page wrapper  -->




    </div>



    <!-- End Wrapper -->





    <!-- All Jquery -->

    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/zoomsl.min.js"></script>
    <script>
      $('#tree').imagezoomsl({
        zoomrange:[1,12],
        zoomstart: 4,
        innerzoom: true,
        magnifierborder: 'none'
      });
    </script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

    <!-- This page plugins -->


    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>



    <!-- Chart JS -->

    <script src="<?php echo base_url() ?>assets/plugins/Chart.js/chartjs.init.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/Chart.js/Chart.min.js"></script>



    <!-- Start Table js -->

    <!-- This is data table js -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="http://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="http://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#data_pengajuan').DataTable({
          buttons: [
          ]
      });
    });

    </script>

    <script>
    $(document).ready(function() {
      $('#kelola_user').DataTable({
          buttons: [
          ]
      });
    });

    </script>

    <script>
    $(document).ready(function() {
      $('#data_pekerjaan').DataTable({
          buttons: [
          ]
      });
    });

    </script>

    <script>
    $(document).ready(function() {
      $('#data_waktuangsuran').DataTable({
          buttons: [
          ]
      });
    });

    </script>
    <!-- Editable datatable-->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });
    </script>

    <!-- End Table js -->


    <!-- Start Forms js -->


    <!-- auto hide message div-->
    <script type="text/javascript">
        $( document ).ready(function(){
           $('.delete_msg').delay(3000).slideUp();
        });
    </script>
    <script type="text/javascript">
        $( document ).ready(function(){
           $('.hide_msg').delay(6000).slideUp();
        });
    </script>



    <!-- Style switcher -->

    <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>


</body>

</html>
