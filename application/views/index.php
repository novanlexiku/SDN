<div class="content">
    
                <div class="container-fluid">

                      <?php if ($this->session->userdata('user_role_id')=='1') { ?>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">account_box</i>
                                    </div>
                                    <p class="card-category">Pegawai :</p>
                                    <h3 class="card-title"><?php echo $Total_pegawai ?>
                                        <small>Orang</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">face</i>
                                    </div>
                                    <p class="card-category">Siswa :</p>
                                    <h3 class="card-title"><?php echo $Total_siswa ?>
                                        <small>Orang</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">account_balance</i>
                                    </div>
                                    <p class="card-category">Kelas :</p>
                                    <h3 class="card-title"><?php echo $Total_kelas ?>
                                    <small>Kelas</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                     <i class="material-icons">local_library</i>
                                    </div>
                                    <p class="card-category">Mapel :</p>
                                    <h3 class="card-title"><?php echo $Total_mapel ?>
                                        <small>Mapel</small>
                                        </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <?php } ?>

                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid">
                    <nav class="pull-left">
                        
                    </nav>
                    <div class="copyright pull-right">
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/dashboard/js/core/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/bootstrap-material-design.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/bootstrap-notify.js"></script>
<!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/bootstrap-select.js"></script>

<!-- Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/jquery.tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/jasny-bootstrap.min.js"></script>

<!-- Plugin for Small Gallery in Product Page -->
<script src="<?php echo base_url()?>assets/dashboard/js/plugins/jquery.flexisel.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="<?php echo base_url()?>assets/dashboard/js/material-dashboard.js?v=2.0.0"></script>

<!-- welcome notif -->
<?php
 $message = $this->session->flashdata('message');
 if($message == "sukseslogin"){
?>
     <script type="text/javascript">
            $(document).ready(function(){
             $.notify({

             },{
                     type: 'info',
                     timer: 500,
                     template: '<div class="alert alert-info">'+
                                         '<div class="container-fluid">'+
                                         '<div class="alert-icon">'+
                                         '<i class="material-icons">info_outline</i>'+
                                         '</div>'+
                                         '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                         '<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
                                         '</button>'+
                                         '<b>Welcome</b> <?php echo $this->session->userdata('role_nama');?> <?php echo $this->session->userdata('user_nama');?>'+
                                         '</div>'+'</div>'

             });

        });
    </script>
<?php
};
?>

</html>
