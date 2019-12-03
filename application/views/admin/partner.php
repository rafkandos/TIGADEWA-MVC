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
                            <a class="waves-effect waves-dark" href="<?=base_url()?>index.php/_internationaltrip" aria-expanded="false">    
                                <i class="mdi mdi-earth"></i>
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
                            <a class="waves-effect waves-dark active" href="#" aria-expanded="false">    
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
                        <h3 class="text-themecolor">Partnership</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: #fe6700">TDA Indonesia</a></li>
                            <li class="breadcrumb-item active">Partnership</li>
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
                                        <h4 class="card-title text-uppercase">Partnership</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" data-toggle="modal" data-target="#add" class="btn waves-effect waves-light btn-warning pull-right">
                                            <i class="mdi mdi-library-plus"></i> Add Partner
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="dtTables">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Partner Name</th>
                                                <th>Photo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                foreach ($partner as $o ) {
                                                    echo '
                                                        <tr>
                                                            <td>'.$o->id_partner.'</td>
                                                            <td>'.$o->name.'</td>
                                                            <td align="center"><img src="'.base_url('assets/uploads/'.$o->photo).'" style="width: 70px;" alt="img"></td>
                                                            
                                                            <td align="center">
                                                                <a onclick="edit('.$o->id_partner.')" href="#" 
                                                                    data-toggle="modal" data-target="#update" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-primary">
                                                                    <i class="mdi mdi-grease-pencil"></i> Edit
                                                                </a>
                                                                <a href="'.base_url('index.php/_partner/delete/'.$o->id_partner).'" 
                                                                    class="m-t-5 waves-effect waves-light btn btn-danger">
                                                                    <i class="mdi mdi-delete"></i> Delete
                                                                </a>
                                                                <a onclick="upload('.$o->id_partner.')" href="#" 
                                                                    data-toggle="modal" data-target="#upload" 
                                                                    class="m-t-5 waves-effect waves-dark btn btn-success">
                                                                    <i class="mdi mdi-upload"></i> Upload Photo
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

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Add Partnership</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_partner/add" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <!-- <input type="hidden" name="id_opentrip"> -->
                                        <label class="font-weight-bold">Partner Name</label>
                                        <input type="text" class="form-control form-control-line" name="pn">
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

    <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Partnership</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php base_url()?>_partner/update" method="post">
                    <div class="modal-body">
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-block">
                                    <div class="form-horizontal form-material form-group">
                                        <input type="hidden" name="id_partner" id="id_partner">
                                        <label class="font-weight-bold">Partner Name</label>
                                        <input type="text" class="form-control form-control-line" name="pn" id="pn">
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

    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                	<h4>Upload Photo</h4>
	                    <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <form action="<?php base_url()?>_partner/upload" method="post" enctype="multipart/form-data">
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
	                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
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

        function upload(id_partner){
            $("#id_reg").val(id_partner);
        }

        //opentrip
        function edit(id) {
            $('#id_partner').val();
            $('#pn').val();

            $.getJSON("<?php echo base_url('index.php/_partner/get_id_ot/') ?>"+ id, function(data){
                $('#id_partner').val(data.id_partner);
                $('#pn').val(data.name);
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