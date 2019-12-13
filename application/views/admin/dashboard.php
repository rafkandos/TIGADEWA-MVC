<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>TigaDewaAdventure - ADMIN</title>
    <link rel="icon" type="text/png" href="<?=base_url()?>assets/images/tigadewa.png">
    
    <link href="<?=base_url()?>assets_admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets_admin/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_admin/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?=base_url()?>assets_admin/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets_admin/plugins/c3-master/c3.min.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets_admin/css/style.css" rel="stylesheet">
    
    <link href="<?=base_url()?>assets_admin/css/colors/blue.css" id="theme" rel="stylesheet">

</head>

<body class="fix-header fix-sidebar card-no-border">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">

        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">

                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=base_url()?>index.php/Admin">
                        <b>
                            <img src="<?=base_url()?>assets_admin/images/tigadewa.png" style="width: 40px; height: 39px;" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="<?=base_url()?>assets_admin/images/tgdwtext.png" style="width: 165px; height: 25px; margin-top: 3px; margin-left: -5px;" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="font-weight-bold nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo
                                    
                                    $this->session->userdata('adminName');
                                    
                                ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav active">
                    <ul id="sidebarnav">
                        <li> 
                            <a class="waves-effect waves-dark active" href="#" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_registration" aria-expanded="false">
                                <i class="mdi mdi-account-circle"></i>
                                <span class="hide-menu">Registration</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_opentrip" aria-expanded="false">     
                                <i class="mdi mdi-lock-open"></i>
                                <span class="hide-menu">Open Trip</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_privatetrip" aria-expanded="false">
                                <i class="mdi mdi-lock"></i>
                                <span class="hide-menu">Private Trip</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_internationaltrip" aria-expanded="false">    <i class="mdi mdi-earth"></i>
                                <span class="hide-menu">International Trip</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_gallery" aria-expanded="false">    
                                <i class="mdi mdi-file-image"></i>
                                <span class="hide-menu">Gallery</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_guides" aria-expanded="false">    
                                <i class="mdi mdi-account-multiple-plus"></i>
                                <span class="hide-menu">Guides</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_partner" aria-expanded="false">    
                                <i class="mdi mdi-pi-box"></i>
                                <span class="hide-menu">Partnership</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_merchantdise" aria-expanded="false">    
                                <i class="mdi mdi-shopping"></i>
                                <span class="hide-menu">Merchantdise</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_testimonials" aria-expanded="false">    
                                <i class="mdi mdi-message-bulleted"></i>
                                <span class="hide-menu">Testimonials</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="sidebar-footer">
                <a href="<?=base_url()?>index.php/Admin/logout" class="link" data-toggle="tooltip" title="Logout">
                    <i class="mdi mdi-power"></i>
                </a>
            </div>

        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #fe6700">TDA Indonesia</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>

                <?php
                            $notifikasi = $this->session->flashdata('notif_gagal');
                            if ($notifikasi != null) {
                                echo '
                                    <div class="alert alert-danger">
                                        '.$notifikasi.'
                                    </div>
                                ';
                            }
                        ?>
                    <?php
                            $notifikasi_sukses = $this->session->flashdata('notif_sukses');
                            if ($notifikasi_sukses != null) {
                                echo '
                                    <div class="alert alert-success">
                                        '.$notifikasi_sukses.'
                                    </div>
                                ';
                            }
                        ?>

                <!-- OPENTRIP -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <h4 class="card-title text-uppercase">Edit About</h4>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <a href="#" data-toggle="modal" data-target="#add" class="btn waves-effect waves-light btn-warning pull-right">
                                            <i class="mdi mdi-library-plus"></i> Add Gallery
                                        </a>
                                        
                                    </div> -->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="dtTables">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Visi</th>
                                                <th>Misi</th>
                                                <th>Layanan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                foreach ($about as $o ) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$o->id_about.'</td>
                                                            <td>'.$o->visi.'</td>
                                                            <td>'.$o->misi.'</td>
                                                            <td>'.$o->layanan.'</td>
                                                            <td align="center">
                                                                <a onclick="edit('.$o->id_about.')" href="#" 
                                                                    data-toggle="modal" data-target="#update" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-primary">
                                                                    <i class="mdi mdi-grease-pencil"></i> Edit
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- POPULAR TRIP -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <h4 class="card-title text-uppercase">Popular Trip</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" data-toggle="modal" data-target="#addpt" class="btn waves-effect waves-light btn-warning pull-right">
                                            <i class="mdi mdi-library-plus"></i> Add Popular Trip
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="dtTables">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Popular Trip</th>
                                                <th>Banner</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                foreach ($poptrip as $o ) {
                                                    if ($o->id_poptrip == 2) {
                                                        echo '
                                                            <tr>
                                                                <td>'.$o->id_poptrip.'</td>
                                                                <td>'.$o->tripName.'</td>
                                                                <td><img src="'.base_url('assets/uploads/'.$o->picture).'" style="width: 100px;" alt="img"></td>
                                                                <td>
                                                                    <a onclick="editpt('.$o->id_poptrip.')" href="#" 
                                                                        data-toggle="modal" data-target="#updatept" 
                                                                        class="m-t-5 waves-effect waves-dark btn btn-primary">
                                                                        <i class="mdi mdi-grease-pencil"></i> Edit
                                                                    </a>
                                                                    
                                                                </td>
                                                            </tr>
                                                        ';
                                                    }
                                                    else{
                                                        echo '
                                                            <tr>
                                                                <td>'.$o->id_poptrip.'</td>
                                                                <td>'.$o->tripName.'</td>
                                                                <td><img src="'.base_url('assets/uploads/'.$o->picture).'" style="width: 100px;" alt="img"></td>
                                                                <td>
                                                                    <a onclick="editpt('.$o->id_poptrip.')" href="#" 
                                                                        data-toggle="modal" data-target="#updatept" 
                                                                        class="m-t-5 waves-effect waves-dark btn btn-primary">
                                                                        <i class="mdi mdi-grease-pencil"></i> Edit
                                                                    </a>
                                                                    <a href="'.base_url('index.php/Admin/delete/'.$o->id_poptrip).'" onclick="return confirm(\'Apakah anda yakin untuk menghapus '.$o->tripName.'\')"
                                                                        class="m-t-5 waves-effect waves-light btn btn-danger">
                                                                        <i class="mdi mdi-delete"></i> Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        ';
                                                    }
                                                    
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer"> ©2019 </footer>
        </div>

    </div>

    <!-- UPDATE ABOUT -->
    <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit About</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>Admin/update" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_about" id="id_about">
                                        <label class="font-weight-bold">Visi</label>
                                        <textarea rows="5" class="form-control form-control-line" id="visi" name="visi"></textarea>
                                        <br><br>
                                        <label class="font-weight-bold">Misi</label>
                                        <textarea rows="5" class="form-control form-control-line" id="misi" name="misi"></textarea>
                                        <br><br>
                                        <label class="font-weight-bold">Layanan</label>
                                        <textarea rows="5" class="form-control form-control-line" id="layanan" name="layanan"></textarea>
                                        <br><br>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="update" class="btn btn-success font-weight-bold" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ADD POPTRIP -->
    <div class="modal fade" id="addpt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Popular Trip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>Admin/addpt" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_opentrip">
                                        <label class="font-weight-bold">Trip Name</label>
                                        <select name="tn" class="form-control form-control-line">
                                            <?php 
                                                foreach ($gallery as $o) {
                                                    echo '
                                                        <option value="'.$o->id_gallery.'">'.$o->tripName.'</option>
                                                    ';
                                                }
                                            ?>
                                        </select>
                                        <!-- <input type="text" class="form-control form-control-line" name="tn"> -->
                                        <!-- <br><br>
                                        <label class="font-weight-bold">Meeting Point</label>
                                        <input type="text" class="form-control form-control-line" name="mp">
                                        <br><br>
                                        <label class="font-weight-bold">Price</label>
                                        <input type="text" class="form-control form-control-line" name="pr"> -->
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="add" class="btn btn-success font-weight-bold" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- EDIT POPTRIP -->
    <div class="modal fade" id="updatept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Popular Trip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>Admin/updatept" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_poptrip" id="id_poptrip">
                                        <label class="font-weight-bold">TripName</label>
                                        <select name="tn" id="tnpt" class="form-control form-control-line">
                                            <?php 
                                                foreach ($gallery as $o) {
                                                    echo '
                                                        <option value="'.$o->id_gallery.'">'.$o->tripName.'</option>
                                                    ';
                                                }
                                            ?>
                                        </select>
                                        <!-- <input type="text" class="form-control form-control-line" name="tn"> -->
                                        <!-- <br><br>
                                        <label class="font-weight-bold">Meeting Point</label>
                                        <input id="mpmp" type="text" class="form-control form-control-line" name="mp">
                                        <br><br>
                                        <label class="font-weight-bold">Price</label>
                                        <input id="prmp" type="text" class="form-control form-control-line" name="pr"> -->
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="update" class="btn btn-success font-weight-bold" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?=base_url()?>assets_admin/plugins/jquery/jquery.min.js"></script>
    
    <script src="<?=base_url()?>assets_admin/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/jquery.slimscroll.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/waves.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/sidebarmenu.js"></script>
    
    <script src="<?=base_url()?>assets_admin/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/custom.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/d3/d3.min.js"></script>
    <script src="<?=base_url()?>assets_admin/plugins/c3-master/c3.min.js"></script>
    
    <script src="<?=base_url()?>assets_admin/js/dashboard1.js"></script>
    <script>
        function edit(id) {
            $('#id_about').val();
            $('#visi').val();
            $('#misi').val();
            $('#layanan').val();

            $.getJSON("<?php echo base_url('index.php/Admin/get_id_ot/') ?>"+ id, function(data){
                $('#id_about').val(data.id_about);
                $('#visi').val(data.visi);
                $('#misi').val(data.misi);
                $('#layanan').val(data.layanan);
            });
        }

        function editpt(id) {
            $('#id_poptrip').val();
            $('#tnpt').val();

            $.getJSON("<?php echo base_url('index.php/Admin/get_id_pt/') ?>"+ id, function(data){
                $('#id_poptrip').val(data.id_poptrip);
                $('#tnpt').val(data.gallery_id);
            });
        }
    </script>

</body>

</html>