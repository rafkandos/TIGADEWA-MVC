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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Markarn Doe</a>
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
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/Admin" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark active" href="#" aria-expanded="false">
                                <i class="mdi mdi-account-circle"></i>
                                <span class="hide-menu">Registration</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_opentrip" aria-expanded="false">     <i class="mdi mdi-lock-open"></i>
                                <span class="hide-menu">Open Trip</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false">
                                <i class="mdi mdi-lock"></i>
                                <span class="hide-menu">Private Trip</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark" href="icon-material.html" aria-expanded="false">    <i class="mdi mdi-earth"></i>
                                <span class="hide-menu">International Trip</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Detail Registration</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #fe6700">TDA Indonesia</a></li>
                            <li class="breadcrumb-item active">Detail Registration</li>
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

                <?php foreach ( $reg as $r ) { ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
                                    <form method="post" action="<?=base_url()?>index.php/_registration/updatePembayaran" class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Full Name</label>
                                            <div class="col-md-12">
                                                <input type="hidden" value="<?php echo $r->id_register;?>" name="id_register" id="id_register">
                                                <input value="<?php echo $r->name; ?>" type="text" name="fullname" id="fullname" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12 font-weight-bold">Identity Number</label>
                                            <div class="col-md-12">
                                                <input value="<?php echo $r->identityNumber; ?>" type="text" name="idno" id="idno" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Gender</label>
                                            <div class="col-md-12">
                                                <input readonly value="<?php echo $r->gender; ?>" type="text" name="gender" id="gender" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Region</label>
                                            <div class="col-md-12">
                                                <input value="<?php echo $r->region; ?>" type="text" name="region" id="region" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Province / Country</label>
                                            <div class="col-md-12">
                                                <input value="<?php echo $r->province; ?>" type="text" name="province" id="province" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 font-weight-bold">City</label>
                                            <div class="col-sm-12">
                                                <input value="<?php echo $r->city; ?>" type="text" name="city" id="city" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Full Address</label>
                                            <div class="col-md-12">
                                                <input value="<?php echo $r->fullAddress; ?>" type="text" name="address" id="address" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Email</label>
                                            <div class="col-md-12">
                                                <input value="<?php echo $r->email; ?>" type="text" name="email" id="email" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Tees Size</label>
                                            <div class="col-md-12">
                                                <input value="<?php echo $r->teesSize; ?>" type="text" name="email" id="email" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Phone Number</label>
                                            <div class="col-md-12">
                                                <input value="<?php echo $r->phoneNumber; ?>" type="number" name="phoneNumber" id="phoneNumber" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Emergency Contact</label>
                                            <div class="col-md-12">
                                                <input value="<?php echo $r->emergencyContact; ?>" type="number" name="emergencyContact" id="emergencyContact" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Selected Trip</label>
                                            <div class="col-md-12">
                                                <?php 
                                                    if ($r->id_opentrip != 11111 && $r->id_privatetrip == 11111 && $r->id_internationaltrip == 11111) {
                                                        echo '
                                                            <input value="OpenTrip - '.$r->OtripName.'" type="text" name="st" id="st" class="form-control form-control-line" readonly>
                                                        ';
                                                    }
                                                    if ($r->id_opentrip == 11111 && $r->id_privatetrip != 11111 && $r->id_internationaltrip == 11111) {
                                                        echo '
                                                            <input value="PrivateTrip - '.$r->PtripName.'" type="text" name="st" id="st" class="form-control form-control-line" readonly>
                                                        ';
                                                    }
                                                    if ($r->id_opentrip == 11111 && $r->id_privatetrip == 11111 && $r->id_internationaltrip != 11111) {
                                                        echo '
                                                            <input value="InternationalTrip - '.$r->ItripName.'" type="text" name="st" id="st" class="form-control form-control-line" readonly>
                                                        ';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Meeting Point</label>
                                            <div class="col-md-12">
                                                <!-- <select name="meetingPoint" id="meetingPoint" class="form-control-line form-control">
                                                    <option value=""></option>
                                                </select> -->
                                                <input readonly value="<?php echo $r->meetingPoint; ?>" type="text" name="mp" id="mp" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Schedule</label>
                                            <div class="col-md-12">
                                                <input readonly value="<?php echo $r->scheduleDate; ?>" type="text" name="sc" id="sc" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 font-weight-bold">Status</label>
                                            <div class="col-md-12">
                                                <select name="status" id="status" class="form-control-line form-control">
                                                    <?php
                                                        if ($r->status == "Belum Dibayar") {
                                                            echo '
                                                                <option value="Belum Dibayar">Belum Dibayar</option>
                                                                <option value="Sudah Dibayar">Sudah Dibayar</option>
                                                            ';
                                                        }
                                                        else {
                                                            echo '<option value="Sudah Dibayar">Sudah Dibayar</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-info font-weight-bold" value="Update Registration">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

            </div>
            <footer class="footer"> ©2019 </footer>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script type="text/javascript">

        $(document).ready( function () {
            $('#dtTables').DataTable();

        });
    </script>
</body>

</html>