<?php

$string = "
<div class=\"content\">
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                <h4 class=\"title\"><?php echo \$button ?> ".ucfirst($table_name)." </h4>
                <p class=\"category\">Lengkapi form dibawah</p>
            </div>
          <div class=\"card-content\">
        <form action=\"<?php echo \$action; ?>\" method=\"post\">
        <div class=\"row\">
						";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'enum')
    {
    $string .= "\n\t    <div class=\"col-md-12\"><div class=\"form-group label-floating\">
    <label for=\"".$row["column_name"]."\" class=\"control-label\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
    <div class=\"radio\">
    	<label>
        <input type=\"radio\" name=\"".$row["column_name"]."\"
    <?php if (isset($".$row["column_name"].") && $".$row["column_name"]."==\"Admin\") echo \"checked\";?>
    value=\"Admin\">Admin
    	</label>
      <label>
        <input type=\"radio\" name=\"".$row["column_name"]."\"
        <?php if (isset($".$row["column_name"].") && $".$row["column_name"]."==\"Guru\") echo \"checked\";?>
        value=\"Guru\">Guru
    	</label>
      <label>
        <input type=\"radio\" name=\"".$row["column_name"]."\"
        <?php if (isset($".$row["column_name"].") && $".$row["column_name"]."==\"Siswa\") echo \"checked\";?>
        value=\"Siswa\">Siswa
    	</label>
    </div>        </div></div>";
    }
    else
    {
    $string .= "\n\t    <div class=\"col-md-5\"><div class=\"form-group label-floating\">
    <label for=\"".$row["column_name"]."\" class=\"control-label\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
    <textarea class=\"form-control\" rows=\"1\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"\"><?php echo $".$row["column_name"]."; ?></textarea>
        </div></div>";
    }
}


$string .= "\n\t </div> ";

$string .= "\n\t    <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
$string .= "\n\t    <button type=\"submit\" class=\"btn btn-primary\"><?php echo \$button ?></button> ";
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

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>
