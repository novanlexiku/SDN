<?php

$string = "
<div class=\"content\">
<div class=\"container-fluid\">
    <div class=\"row\">
    <div class=\"col-md-4\">
        <div class=\"card card-profile\">
            <div class=\"card-avatar\">
                    <img class=\"img\" src=\"<?php echo base_url() ?>web/assets/img/faces/<?php echo \$username; ?>.jpg\" />
            </div>
            <div class=\"content\">
                <h6 class=\"category text-gray\"><?php echo \$role; ?></h6>
                <h4 class=\"card-title\"><?php echo \$nama; ?></h4>
                <p class=\"card-content\">
                <?php echo \$About; ?>
                </p>
            </div>
        </div>
    </div>
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                <h4 class=\"title\">Detail ".ucfirst($table_name)." </h4>
                <p class=\"category\"></p>
            </div>
          <div class=\"card-content\">
        <form >
        <div class=\"row\">
						";
foreach ($non_pk as $row) {
  $string .= "\n\t    <div class=\"col-md-5\"><div class=\"form-group label-floating\">
  <label for=\"".$row["column_name"]."\" class=\"control-label\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
  <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"\" value=\"<?php echo $".$row["column_name"]."; ?>\" disabled/>
      </div></div>";
}


$string .= "\n\t </div> ";

$string .= "\n\t    <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Cancel</a>";
$string .= "\n\t</form>
				</div>
			</div>
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



$hasil_view_read = createFile($string, $target."views/" . $c_url . "/" . $v_read_file);

?>
