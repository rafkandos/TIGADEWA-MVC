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
                            <a class="font-weight-bold nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo
                                    
                                    $this->session->userdata('adminName');
                                    
                                ?></a>
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
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_registration" aria-expanded="false">
                                <i class="mdi mdi-account-circle"></i>
                                <span class="hide-menu">Registration</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect waves-dark active" href="#" aria-expanded="false">     <i class="mdi mdi-lock-open"></i>
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
                        <h3 class="text-themecolor">Open Trip</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #fe6700">TDA Indonesia</a></li>
                            <li class="breadcrumb-item active">Open Trip</li>
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
                                        <h4 class="card-title text-uppercase">Open Trip</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" data-toggle="modal" data-target="#add" class="btn waves-effect waves-light btn-warning pull-right">
                                            <i class="mdi mdi-library-plus"></i> Add Trip
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="dtTables">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Trip Name</th>
                                                <th>Overview</th>
                                                <th>Preparation</th>
                                                <th>Include</th>
                                                <th>Exclude</th>
                                                <th>Banner</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                foreach ($opentrip as $o ) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$o->id_opentrip.'</td>
                                                            <td>'.$o->OtripName.'</td>
                                                            <td>'.$o->overview.'</td>
                                                            <td>'.$o->preparation.'</td>
                                                            <td>'.$o->include.'</td>
                                                            <td>'.$o->exclude.'</td>
                                                            <td align="center"><img src="'.base_url('assets/uploads/'.$o->tripImages).'" style="width: 70px;" alt="img"></td>
                                                            
                                                            <td align="center">
                                                                <a onclick="edit('.$o->id_opentrip.')" href="#" 
                                                                    data-toggle="modal" data-target="#update" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-primary">
                                                                    <i class="mdi mdi-grease-pencil"></i> Edit
                                                                </a>
                                                                <a href="'.base_url('index.php/_opentrip/delete/'.$o->id_opentrip).'" onclick="return confirm(\'Apakah anda yakin untuk menghapus '.$o->OtripName.'\')"
                                                                    class="m-t-5 waves-effect waves-light btn btn-danger">
                                                                    <i class="mdi mdi-delete"></i> Delete
                                                                </a>
                                                                <a onclick="upload('.$o->id_opentrip.')" href="#" 
                                                                    data-toggle="modal" data-target="#upload" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-success">
                                                                    <i class="mdi mdi-upload"></i> Upload Banner
                                                                </a>
                                                                <a href="'.base_url('index.php/_opentrip/itinerary/'.$o->id_opentrip).'" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-info">
                                                                    <i class="mdi mdi-eye"></i> Itinerary
                                                                </a>
                                                                <a target="_blank" href="'.base_url('index.php/OpenTrip/Detail/'.$o->id_opentrip).'" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-secondary">
                                                                    <i class="mdi mdi-eye"></i> Preview
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

                <!-- MEETING POINT -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <h4 class="card-title text-uppercase">Meeting Point</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" data-toggle="modal" data-target="#addmp" class="btn waves-effect waves-light btn-warning pull-right">
                                            <i class="mdi mdi-library-plus"></i> Add Meeting Point
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="dtTablesz">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Trip Name</th>
                                                <th>Meeting Point</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                foreach ($mp as $m ) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$m->id_ot.'</td>
                                                            <td>'.$m->OtripName.'</td>
                                                            <td>'.$m->meetingPoint.'</td>
                                                            <td>'.$m->price.'</td>
                                                            <td align="center">
                                                                <a onclick="editmp('.$m->id_pricing.')" href="#" 
                                                                    data-toggle="modal" data-target="#updatemp" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-primary">
                                                                    <i class="mdi mdi-grease-pencil"></i> Edit
                                                                </a>
                                                                <a href="'.base_url('index.php/_opentrip/deletemp/'.$m->id_pricing).'" onclick="return confirm(\'Apakah anda yakin untuk menghapus '.$m->meetingPoint.'\')"
                                                                    class="m-t-5 waves-effect waves-light btn btn-danger">
                                                                    <i class="mdi mdi-delete"></i> Delete
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

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-block">
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <h4 class="card-title text-uppercase">Schedule</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" data-toggle="modal" data-target="#addsch" class="btn waves-effect waves-light btn-warning pull-right">
                                            <i class="mdi mdi-library-plus"></i> Add Schedule
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="dtTablesz">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Trip Name</th>
                                                <th>Schedule Date</th>
                                                <th>Slot</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                foreach ($sch as $m ) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$m->ot_id.'</td>
                                                            <td>'.$m->OtripName.'</td>
                                                            <td>'.$m->scheduleDate.'</td>
                                                            <td>'.$m->slot.'</td>
                                                            <td align="center">
                                                                <a onclick="editsch('.$m->id_schedule.')" href="#" 
                                                                    data-toggle="modal" data-target="#updatesch" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-primary">
                                                                    <i class="mdi mdi-grease-pencil"></i> Edit
                                                                </a>
                                                                <a href="'.base_url('index.php/_opentrip/deletesch/'.$m->id_schedule).'" onclick="return confirm(\'Apakah anda yakin untuk menghapus '.$m->scheduleDate.'\')"
                                                                    class="m-t-5 waves-effect waves-light btn btn-danger">
                                                                    <i class="mdi mdi-delete"></i> Delete
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
            </div>
            <footer class="footer"> ©2019 </footer>
        </div>
    </div>

    <div class="modal fade" id="itinerary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Trip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_opentrip/add" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_opentrip">
                                        <label class="font-weight-bold">TripName</label>
                                        <input type="text" class="form-control form-control-line" name="tn">
                                        <br><br>
                                        <label class="font-weight-bold">Overview</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ov"></textarea>
                                        <br><br>
                                        <!-- 
                                        <div id="haha">
                                        </div> -->
                                        <label class="font-weight-bold">Preparation</label>
                                        <textarea rows="5" class="form-control form-control-line" name="pre"></textarea>
                                        <br><br>
                                        <label class="font-weight-bold">Include</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ic"></textarea>
                                        <br><br>
                                        <label class="font-weight-bold">Exclude</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ec"></textarea>
                                        <br><br>
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

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Trip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_opentrip/add" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_opentrip">
                                        <label class="font-weight-bold">TripName</label>
                                        <input type="text" class="form-control form-control-line" name="tn">
                                        <br><br>
                                        <label class="font-weight-bold">Overview</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ov"></textarea>
                                        <br><br>
                                        
                                        <!-- <div id="haha">
                                        </div> -->
                                        <label class="font-weight-bold">Preparation</label>
                                        <textarea rows="5" class="form-control form-control-line" name="pre"></textarea>
                                        <br><br>
                                        <label class="font-weight-bold">Include</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ic"></textarea>
                                        <br><br>
                                        <label class="font-weight-bold">Exclude</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ec"></textarea>
                                        <br><br>
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

    <div class="modal fade" id="addmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Meeting Point</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_opentrip/addmp" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_opentrip">
                                        <label class="font-weight-bold">TripName</label>
                                        <select name="tn" class="form-control form-control-line">
                                            <?php 
                                                foreach ($opentrip as $o) {
                                                    echo '
                                                        <option value="'.$o->id_opentrip.'">'.$o->OtripName.'</option>
                                                    ';
                                                }
                                            ?>
                                        </select>
                                        <!-- <input type="text" class="form-control form-control-line" name="tn"> -->
                                        <br><br>
                                        <label class="font-weight-bold">Meeting Point</label>
                                        <input type="text" class="form-control form-control-line" name="mp">
                                        <br><br>
                                        <label class="font-weight-bold">Price</label>
                                        <input type="text" class="form-control form-control-line" name="pr">
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

    <div class="modal fade" id="addsch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_opentrip/addsch" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_schedule">
                                        <label class="font-weight-bold">TripName</label>
                                        <select name="tn" class="form-control form-control-line">
                                            <?php 
                                                foreach ($opentrip as $o) {
                                                    echo '
                                                        <option value="'.$o->id_opentrip.'">'.$o->OtripName.'</option>
                                                    ';
                                                }
                                            ?>
                                        </select>
                                        <!-- <input type="text" class="form-control form-control-line" name="tn"> -->
                                        <br><br>
                                        <label class="font-weight-bold">Schedule Date</label>
                                        <input type="text" class="form-control form-control-line" name="sd">
                                        <br><br>
                                        <label class="font-weight-bold">Slot</label>
                                        <input type="number" class="form-control form-control-line" name="sl">
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

    <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Trip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_opentrip/update" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_opentrip" id="id_opentrip">
                                        <label class="font-weight-bold">TripName</label>
                                        <input type="text" class="form-control form-control-line" name="tn" id="tn">
                                        <br><br>
                                        <label class="font-weight-bold">Overview</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ov" id="ov"></textarea>
                                        <!-- <input type="text" class="form-control form-control-line" name="ov" id="ov"> -->
                                        <br><br>
                                        <label class="font-weight-bold">Preparation</label>
                                        <textarea rows="5" class="form-control form-control-line" name="pre" id="pre"></textarea>
                                        <br><br>
                                        <label class="font-weight-bold">Include</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ic" id="ic"></textarea>
                                        <br><br>
                                        <label class="font-weight-bold">Exclude</label>
                                        <textarea rows="5" class="form-control form-control-line" name="ec" id="ec"></textarea>
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

    <div class="modal fade" id="updatemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Meeting Point</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_opentrip/updatemp" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_pricing" id="id_pricing">
                                        <label class="font-weight-bold">TripName</label>
                                        <select name="tn" id="tnmp" class="form-control form-control-line">
                                            <?php 
                                                foreach ($opentrip as $o) {
                                                    echo '
                                                        <option value="'.$o->id_opentrip.'">'.$o->OtripName.'</option>
                                                    ';
                                                }
                                            ?>
                                        </select>
                                        <!-- <input type="text" class="form-control form-control-line" name="tn"> -->
                                        <br><br>
                                        <label class="font-weight-bold">Meeting Point</label>
                                        <input id="mpmp" type="text" class="form-control form-control-line" name="mp">
                                        <br><br>
                                        <label class="font-weight-bold">Price</label>
                                        <input id="prmp" type="text" class="form-control form-control-line" name="pr">
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

    <div class="modal fade" id="updatesch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_opentrip/updatesch" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_schedule" id="id_schedule">
                                        <label class="font-weight-bold">TripName</label>
                                        <select name="tn" id="tnsch" class="form-control form-control-line">
                                            <?php 
                                                foreach ($opentrip as $o) {
                                                    echo '
                                                        <option value="'.$o->id_opentrip.'">'.$o->OtripName.'</option>
                                                    ';
                                                }
                                            ?>
                                        </select>
                                        <!-- <input type="text" class="form-control form-control-line" name="tn"> -->
                                        <br><br>
                                        <label class="font-weight-bold">Schedule Date</label>
                                        <input id="sdsch" type="text" class="form-control form-control-line" name="sd">
                                        <br><br>
                                        <label class="font-weight-bold">Slot</label>
                                        <input id="slsch" type="number" class="form-control form-control-line" name="sl">
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

    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                	<h4>Upload Banner</h4>
	                    <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <form action="<?php base_url()?>_opentrip/upload" method="post" enctype="multipart/form-data">
	                    <div class="modal-body">
	                        <div class="tab-pane" id="settings" role="tabpanel">
	                            <div class="card-block">
	                                    <div class="form-horizontal form-material form-group">
	                                        <input type="hidden" name="id_reg" id="id_reg">
	                                        <label>Banner</label>
	                                        <input type="file" class="form-control form-control-line" name="banner">
	                                    </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="modal-footer">
	                        <input type="submit" name="submit" class="btn btn-success" value="Kirirm">
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

    <script type="text/javascript">

        $(document).ready( function () {
            $('#dtTables').DataTable();
        } );

        function upload(id_opentrip){
            $("#id_reg").val(id_opentrip);
        }

        //opentrip
        function edit(id) {
            $('#id_opentrip').val();
            $('#ov').val();
            $('#pre').val();
            $('#tn').val();
            $('#ic').val();
            $('#ec').val();

            $.getJSON("<?php echo base_url('index.php/_opentrip/get_id_ot/') ?>"+ id, function(data){
                $('#id_opentrip').val(data.id_opentrip);
                $('#ov').val(data.overview);
                $('#pre').val(data.preparation);
                $('#tn').val(data.OtripName);
                $('#ic').val(data.include);
                $('#ec').val(data.exclude);
            });
        }

        //pricing
        function editmp(id) {
            $('#id_pricing').val();
            $('#tnmp').val();
            $('#mpmp').val();
            $('#prmp').val();

            $.getJSON("<?php echo base_url('index.php/_opentrip/get_id_pr/') ?>"+ id, function(data){
                $('#id_pricing').val(data.id_pricing);
                $('#tnmp').val(data.id_ot);
                $('#mpmp').val(data.meetingPoint);
                $('#prmp').val(data.price);
            });
        }

        //schedule
        function editsch(id) {
            $('#id_schedule').val();
            $('#tnsch').val();
            $('#sdsch').val();
            $('#slsch').val();

            $.getJSON("<?php echo base_url('index.php/_opentrip/get_id_sch/') ?>"+ id, function(data){
                $('#id_schedule').val(data.id_schedule);
                $('#tnsch').val(data.ot_id);
                $('#sdsch').val(data.scheduleDate);
                $('#slsch').val(data.slot);
            });
        }

        function itenerary() {
            var vl = $('#itt').val();
            console.log(vl);
            var tes = "";
            if (vl > 30) {
                alert("Batasan Hanya 30")
            } else{
                for(var a = 1; a <= vl; a++){
                    // txt += "<p>" + res[a].nama + "<p><br>";
                    // tes += res.semuaprovinsi[a]
                    // tes += '<option value="'+res.semuaprovinsi[a].id+res.semuaprovinsi[a].nama+'">'+res.semuaprovinsi[a].nama+'</option>';
                    tes += '<label class="font-weight-bold">Day '+a+'</label> <input type="text" class="form-control name="day'+a+'"> <br><br>';
                    // tes + = '<label class="font-weight-bold">Day '+a+'</label> <input type="text" class="form-control form-control-line" name="day"> <br><br>';
                }
            }
                // console.log(tes);
                $('#haha').html(tes);
        }

    </script>

</body>

</html>