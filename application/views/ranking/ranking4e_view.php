
<div class="content">
<div class="container-fluid">
  <div class="row">
          <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h1 class="card-title ">Ranking</h1>
                                    <p class="card-category" style="font-weight: bolder; font-size: 20px;">Kelas 4-E</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="mytable">
                                            <thead class=" text-primary">
                                                <tr>
                                <th style="font-weight: bold;">Rank</th>
                                <th style="font-weight: bold;">NIS</th>
                                <th style="font-weight: bold;">Siswa Nama</th>
                                <th style="font-weight: bold;">Total Nilai</th>
                              </tr>
                                            </thead>
                                            <?php
                                        foreach ($ranking4e->result() as $row)
                                        {
                                            ?>
                                            <tbody>
                                            <tr>
                                  <td width="50px" style="text-align: center; font-size: 40px; font-family: arial;"><?php echo ++$start ?></td>
                                  <td><?php echo $row->siswa_kode ?></td>
                                  <td><?php echo $row->siswa_nama ?></td>
                                  <td><?php echo $row->total_nilai ?></td>
                                  
                                 
                                              </tr>
                                              </tbody>
                                            <?php
                                        }
                                        ?>
                                         </table>
                                    </div>
                                </div>
                            </div>
                        </div>
            
        </div>
    

        
  </div>
  <footer class="footer">
      <div class="container-fluid">
          <nav class="pull-left">
              
          </nav>
          <p class="copyright pull-right">
             
          </p>
      </div>
  </footer>
  </div>
  </div>
  </body>
   <!--   Core JS Files    -->
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
 <!-- Material Dashboard dataTables -->
 <script src="<?php echo base_url()?>assets/js/jquery.datatables.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
  </html>
  