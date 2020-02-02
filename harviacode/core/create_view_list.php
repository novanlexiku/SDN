<?php

$string = "
<div class=\"content\">
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
        <div class=\"alert alert-primary\">
            <div class=\"container-fluid text-center\">
        	  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        		<span aria-hidden=\"true\"><i class=\"material-icons\">clear</i></span>
        	  </button>
            <?php echo \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : ''; ?>
            </div>
        </div>


        <div class=\"col-md-12 text-right\">
        <form action=\"<?php echo site_url('$c_url/index'); ?>\" class=\"form-inline\" method=\"get\">
            <div class=\"form-group  is-empty\">
                <input type=\"text\" class=\"form-control\" name=\"q\" value=\"<?php echo \$q; ?>\">
              <span class=\"material-input\">
                    <?php
                        if (\$q <> '')
                        {
                            ?>
                            <a href=\"<?php echo site_url('$c_url'); ?>\" class=\"btn btn-default btn-white btn-round btn-just-icon\"><i class=\"material-icons\">autorenew</i></a>
                            <?php
                        }
                    ?>
                </span>
                <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                    <i class=\"material-icons\">search</i>
                    <div class=\"ripple-container\"></div>
                </button>
            </div>
        </form>
        </div>
        <div class=\"card card-plain\">
            <div class=\"card-header\" data-background-color=\"purple\">
            <h4 class=\"title\">Tabel</h4>
            <p class=\"category\">Daftar ".ucfirst($table_name)."</p>
        </div>
        <div class=\"card-content table-responsive\">
        <table class=\"table table-bordered table-hover\">
        <thead class=\"text-primary\">
                <th>No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t<th>Action</th>
        </thead>";
$string .= "<?php
            foreach ($" . $c_url . "_data as \$$c_url)
            {
                ?>
                <tbody>
                <tr>";

$string .= "\n\t\t\t<td width=\"50px\"><?php echo ++\$start ?></td>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t\t<td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
}


$string .= "\n\t\t\t<td style=\"text-align:center\" width=\"200px\">"
        . "\n\t\t\t\t<?php "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'<button type=\"button\" rel=\"tooltip\" title=\"View Profile\" class=\"btn btn-info btn-simple btn-xs\"><i class=\"material-icons\">visibility</i></button>'); "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'<button type=\"button\" rel=\"tooltip\" title=\"Edit Profile\" class=\"btn btn-success btn-simple btn-xs\"><i class=\"material-icons\">create</i></button>'); "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'<button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\"><i class=\"material-icons\">delete</i></button>','onclick=\"javasciprt: return confirm(\\'Yakin ingin menghapus ?\\')\"'); "
        . "\n\t\t\t\t?>"
        . "\n\t\t\t</td>";

$string .=  "\n\t\t
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

        <div class=\"row\">
            <div class=\"col-md-12\">
                <a href=\"#\" class=\"btn btn-primary\">Total Record : <?php echo \$total_rows ?></a>
                <?php echo anchor(site_url('".$c_url."/create'),'Tambah', 'class=\"btn btn-primary\"'); ?>
                ";
if ($export_excel == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/excel'), 'Excel', 'class=\"btn btn-primary\"'); ?>";
}
if ($export_word == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/word'), 'Word', 'class=\"btn btn-primary\"'); ?>";
}
if ($export_pdf == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/pdf'), 'PDF', 'class=\"btn btn-primary\"'); ?>";
}
$string .= "\n\t    </div>
            <div class=\"col-md-12 text-right\">
                <?php echo \$pagination ?>
            </div>
        </div>
  </div>
  <footer class=\"footer\">
      <div class=\"container-fluid\">
          <nav class=\"pull-left\">
              <ul>
                  <li>
                      <a href=\"#\">
                          Home
                      </a>
                  </li>
                  <li>
                      <a href=\"#\">
                          Company
                      </a>
                  </li>
                  <li>
                      <a href=\"#\">
                          Portfolio
                      </a>
                  </li>
                  <li>
                      <a href=\"#\">
                          Blog
                      </a>
                  </li>
              </ul>
          </nav>
          <p class=\"copyright pull-right\">
              &copy;
              <script>
                  document.write(new Date().getFullYear())
              </script>
              <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
          </p>
      </div>
  </footer>
  </div>
  </div>
  </body>
  <!--   Core JS Files   -->
  <script src=\"<?php echo base_url().'assets/js/jquery-3.2.1.min.js'?>\"></script>
  <script src=\"<?php echo base_url().'assets/js/bootstrap.min.js'?>\"></script>
  <script src=\"<?php echo base_url().'assets/js/material.min.js'?>\"></script>
  <!--  Charts Plugin -->
  <script src=\"<?php echo base_url().'assets/js/chartist.min.js'?>\"></script>
  <!--  Dynamic Elements plugin -->
  <script src=\"<?php echo base_url().'assets/js/arrive.min.js'?>\"></script>
  <!--  PerfectScrollbar Library -->
  <script src=\"<?php echo base_url().'assets/js/perfect-scrollbar.jquery.min.js'?>\"></script>
  <!--  Notifications Plugin    -->
  <script src=\"<?php echo base_url().'assets/js/bootstrap-notify.js'?>\"></script>
  <!--  Google Maps Plugin -->
  <!-- <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script> -->
  <!-- Material Dashboard javascript methods -->
  <script src=\"<?php echo base_url().'assets/js/material-dashboard.js'?>\"></script>
  <!-- Material Dashboard dataTables -->
  <script src=\"<?php echo base_url().'assets/js/jquery.datatables.min.js'?>\"></script>
  <script src=\"<?php echo base_url().'assets/js/dataTables.bootstrap.js'?>\"></script>
  </html>
  ";


$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>
