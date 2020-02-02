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

        <table class=\"table table-bordered table-striped\" id=\"mytable\">
            <thead>
                <tr>
                    <th width=\"80px\">No</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t    <th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t    <th width=\"200px\">Action</th>
                </tr>
            </thead>";

$column_non_pk = array();
foreach ($non_pk as $row) {
    $column_non_pk[] .= "{\"data\": \"".$row['column_name']."\"}";
}
$col_non_pk = implode(',', $column_non_pk);

$string .= "\n\t
        </table>
        <div class=\"col-md-4 text-right\">
            <?php echo anchor(site_url('".$c_url."/create'), 'Create', 'class=\"btn btn-primary\"'); ?>";
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
        <script type=\"text/javascript\">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        \"iStart\": oSettings._iDisplayStart,
                        \"iEnd\": oSettings.fnDisplayEnd(),
                        \"iLength\": oSettings._iDisplayLength,
                        \"iTotal\": oSettings.fnRecordsTotal(),
                        \"iFilteredTotal\": oSettings.fnRecordsDisplay(),
                        \"iPage\": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        \"iTotalPages\": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $(\"#mytable\").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: \"loading...\"
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {\"url\": \"".$c_url."/json\", \"type\": \"POST\"},
                    columns: [
                        {
                            \"data\": \"$pk\",
                            \"orderable\": false
                        },".$col_non_pk.",
                        {
                            \"data\" : \"action\",
                            \"orderable\": false,
                            \"className\" : \"text-center\"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>
        </html>

    ";


$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>
