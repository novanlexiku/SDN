<div class="content">

	<style>
.datepicker{z-index:1151 !important;}
</style>
		<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_1</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $kelas1 ?>
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
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_2</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $kelas2?>
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
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_3</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $kelas3 ?>
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
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_4</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $kelas4 ?>
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
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_5</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $kelas5 ?>
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
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">filter_6</i>
                                    </div>
                                    <p class="card-category">Total :</p>
                                    <h3 class="card-title"><?php echo $kelas6 ?>
                                        <small>Kelas</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
				</div>
				<div class="row">
					<div class="card card-nav-tabs card-plain">
    <div class="card-header card-header-primary">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#kelas1" data-toggle="tab"><i class="material-icons">filter_1</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kelas2" data-toggle="tab"><i class="material-icons">filter_2</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kelas3" data-toggle="tab"><i class="material-icons">filter_3</i></a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#kelas4" data-toggle="tab"><i class="material-icons">filter_4</i></a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#kelas5" data-toggle="tab"><i class="material-icons">filter_5</i></a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="#kelas6" data-toggle="tab"><i class="material-icons">filter_6</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div><div class="card-body ">
        <div class="tab-content text-center">
            <div class="tab-pane active" id="kelas1">
               <table class="table table-hover" id="mytable1">
                                            <thead class=" text-primary">
                                                <tr>
																<th>Kelas ID</th>
																<th>Kelas</th>
																<th>Action</th>
															</tr>
                                            </thead>
                                         </table>
            </div>
            <div class="tab-pane" id="kelas2">
                <table class="table table-hover" id="mytable2">
                                            <thead class=" text-primary">
                                                <tr>
																<th>Kelas ID</th>
																<th>Kelas</th>
																<th>Action</th>
															</tr>
                                            </thead>
                                         </table>
            </div>
            <div class="tab-pane" id="kelas3">
                <table class="table table-hover" id="mytable3">
                                            <thead class=" text-primary">
                                                <tr>
																<th>Kelas ID</th>
																<th>Kelas</th>
																<th>Action</th>
															</tr>
                                            </thead>
                                         </table>
            </div>
            <div class="tab-pane" id="kelas4">
                <table class="table table-hover" id="mytable4">
                                            <thead class=" text-primary">
                                                <tr>
																<th>Kelas ID</th>
																<th>Kelas</th>
																<th>Action</th>
															</tr>
                                            </thead>
                                         </table>
            </div>
			<div class="tab-pane" id="kelas5">
                <table class="table table-hover" id="mytable5">
                                            <thead class=" text-primary">
                                                <tr>
																<th>Kelas ID</th>
																<th>Kelas</th>
																<th>Action</th>
															</tr>
                                            </thead>
                                         </table>
            </div>
			<div class="tab-pane" id="kelas6">
                <table class="table table-hover" id="mytable6">
                                            <thead class=" text-primary">
                                                <tr>
																<th>Kelas ID</th>
																<th>Kelas</th>
																<th>Action</th>
															</tr>
                                            </thead>
                                         </table>
            </div>

        </div>
    </div>
  </div>
			<button class="btn btn-success ml-2" data-toggle="modal" data-target="#myModalAdd">Add New</button>		
          

						</div>
				</div>
		</div>
<!-- Modal Add Kelas-->
	<form id="add-row-form" action="<?php echo base_url().'index.php/kelas/simpan'?>" method="post">
		 <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					 <div class="modal-content">
							 <div class="modal-header" data-background-color="purple">
										 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										 <h4 class="modal-title" id="myModalLabel">Tambah Kelas</h4>
							 </div>
							 <div class="modal-body">
								 <div class="row">

								 	 <div class="col-md-5"><div class="form-group label-floating">
										 <label for="kelas_id" class="control-label">Kelas ID</label>
										 <input type="text" name="kelas_id" class="form-control" placeholder="" required>
						         </div></div>
										 <div class="col-md-5"><div class="form-group label-floating">
											 <label for="kelas_nama" class="control-label">Kelas</label>
											 <input type="text" name="kelas_nama" class="form-control" placeholder="" required>
							         </div></div>
																</div>


							 </div>
							 <div class="modal-footer">
								 		<button type="reset" class="btn btn-warning ml-2">Reset</button>
										<button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
										<button type="submit" id="add-row" class="btn btn-success ml-2">Save</button>
							 </div>
						</div>
				</div>
		 </div>
 </form>

<!-- Modal Hapus siswa-->
	<form id="add-row-form" action="<?php echo base_url().'index.php/kelas/delete'?>" method="post">
		 <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					 <div class="modal-content">
							 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									 <h4 class="modal-title" id="myModalLabel">Hapus Kelas</h4>
							 </div>
							 <div class="modal-body">
											 <input type="hidden" name="kelas_id" class="form-control" placeholder="Kelas ID" required>
											 <strong>Anda yakin mau menghapus record ini?</strong>
							 </div>
							 <div class="modal-footer">
										<button type="button" class="btn btn-default ml-2" data-dismiss="modal">Close</button>
										<button type="submit" id="add-row" class="btn btn-success ml-2">Hapus</button>
							 </div>
						</div>
				</div>
		 </div>
 </form>
 <footer class="footer">
		 <div class="container-fluid">
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

 <?php
  $message = $this->session->flashdata('message');
  if($message == "suksestambah"){
?>
    <script type="text/javascript">
       $(document).ready(function(){
        $.notify({

        },{
            type: 'success',
            timer: 500,
						template: '<div class="alert alert-success">'+
											'<div class="container-fluid">'+
  										'<div class="alert-icon">'+
											'<i class="material-icons">check</i>'+
  										'</div>'+
  										'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
  										'</button>'+
  										'<b>Berhasil</b>  menambah data Kelas'+
											'</div>'+'</div>'

        });

     });
   </script>
<?php
}
elseif($message == "suksesupdate"){
?>
	<script type="text/javascript">
		 $(document).ready(function(){
			$.notify({

			},{
					type: 'success',
					timer: 500,
					template: '<div class="alert alert-success">'+
										'<div class="container-fluid">'+
										'<div class="alert-icon">'+
										'<i class="material-icons">check</i>'+
										'</div>'+
										'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
										'</button>'+
										'<b>Berhasil</b>  mengubah data Kelas'+
										'</div>'+'</div>'

			});

	 });
 </script>
<?php
}
elseif($message == "sukseshapus"){
?>
	<script type="text/javascript">
		 $(document).ready(function(){
			$.notify({

			},{
					type: 'success',
					timer: 500,
					template: '<div class="alert alert-success">'+
										'<div class="container-fluid">'+
										'<div class="alert-icon">'+
										'<i class="material-icons">check</i>'+
										'</div>'+
										'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="material-icons">clear</i></span>'+
										'</button>'+
										'<b>Berhasil</b>  menghapus data Siswa'+
										'</div>'+'</div>'

			});

	 });
 </script>
<?php
};
?>
 <script>
 $('.datepicker').datepicker({
 	weekStart:1
 });
 </script>
 <script>
	$(document).ready(function(){
		// Setup datatables
		$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
			 {
					 return {
							 "iStart": oSettings._iDisplayStart,
							 "iEnd": oSettings.fnDisplayEnd(),
							 "iLength": oSettings._iDisplayLength,
							 "iTotal": oSettings.fnRecordsTotal(),
							 "iFilteredTotal": oSettings.fnRecordsDisplay(),
							 "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
							 "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
					 };
			 };


       var table = $("#mytable1").dataTable({
					 initComplete: function() {
							 var api = this.api();
							 $('#mytable_filter input')
									 .off('.DT')
									 .on('input.DT', function() {
											 api.search(this.value).draw();
							 });
					 },
							 oLanguage: {
							 sProcessing: "loading..."
					 },
							 processing: true,
							 serverSide: true,
							 ajax: {"url": "<?php echo base_url().'index.php/kelas/get_kelas1_json'?>", "type": "POST"},
									columns: [
												{"data": "kelas_id"},
												{"data": "kelas_nama"},
												{"data": "view"}

									 ],
							order: [[1, 'asc']],
					 rowCallback: function(row, data, iDisplayIndex) {
							 var info = this.fnPagingInfo();
							 var page = info.iPage;
							 var length = info.iLength;
							 $('td:eq(0)', row).html();
					 }

			 });
       var table = $("#mytable2").dataTable({
           initComplete: function() {
               var api = this.api();
               $('#mytable_filter input')
                   .off('.DT')
                   .on('input.DT', function() {
                       api.search(this.value).draw();
               });
           },
               oLanguage: {
               sProcessing: "loading..."
           },
               processing: true,
               serverSide: true,
               ajax: {"url": "<?php echo base_url().'index.php/kelas/get_kelas2_json'?>", "type": "POST"},
                  columns: [
                        {"data": "kelas_id"},
                        {"data": "kelas_nama"},
						{"data": "view"}

                   ],
              order: [[1, 'asc']],
           rowCallback: function(row, data, iDisplayIndex) {
               var info = this.fnPagingInfo();
               var page = info.iPage;
               var length = info.iLength;
               $('td:eq(0)', row).html();
           }

       });
       var table = $("#mytable3").dataTable({
					 initComplete: function() {
							 var api = this.api();
							 $('#mytable_filter input')
									 .off('.DT')
									 .on('input.DT', function() {
											 api.search(this.value).draw();
							 });
					 },
							 oLanguage: {
							 sProcessing: "loading..."
					 },
							 processing: true,
							 serverSide: true,
							 ajax: {"url": "<?php echo base_url().'index.php/kelas/get_kelas3_json'?>", "type": "POST"},
									columns: [
												{"data": "kelas_id"},
												{"data": "kelas_nama"},
												{"data": "view"}

									 ],
							order: [[1, 'asc']],
					 rowCallback: function(row, data, iDisplayIndex) {
							 var info = this.fnPagingInfo();
							 var page = info.iPage;
							 var length = info.iLength;
							 $('td:eq(0)', row).html();
					 }

			 });
			 var table = $("#mytable4").dataTable({
					 initComplete: function() {
							 var api = this.api();
							 $('#mytable_filter input')
									 .off('.DT')
									 .on('input.DT', function() {
											 api.search(this.value).draw();
							 });
					 },
							 oLanguage: {
							 sProcessing: "loading..."
					 },
							 processing: true,
							 serverSide: true,
							 ajax: {"url": "<?php echo base_url().'index.php/kelas/get_kelas4_json'?>", "type": "POST"},
									columns: [
												{"data": "kelas_id"},
												{"data": "kelas_nama"},
												{"data": "view"}

									 ],
							order: [[1, 'asc']],
					 rowCallback: function(row, data, iDisplayIndex) {
							 var info = this.fnPagingInfo();
							 var page = info.iPage;
							 var length = info.iLength;
							 $('td:eq(0)', row).html();
					 }

			 });
			 var table = $("#mytable5").dataTable({
					 initComplete: function() {
							 var api = this.api();
							 $('#mytable_filter input')
									 .off('.DT')
									 .on('input.DT', function() {
											 api.search(this.value).draw();
							 });
					 },
							 oLanguage: {
							 sProcessing: "loading..."
					 },
							 processing: true,
							 serverSide: true,
							 ajax: {"url": "<?php echo base_url().'index.php/kelas/get_kelas5_json'?>", "type": "POST"},
									columns: [
												{"data": "kelas_id"},
												{"data": "kelas_nama"},
												{"data": "view"}

									 ],
							order: [[1, 'asc']],
					 rowCallback: function(row, data, iDisplayIndex) {
							 var info = this.fnPagingInfo();
							 var page = info.iPage;
							 var length = info.iLength;
							 $('td:eq(0)', row).html();
					 }

			 });
			 var table = $("#mytable6").dataTable({
					 initComplete: function() {
							 var api = this.api();
							 $('#mytable_filter input')
									 .off('.DT')
									 .on('input.DT', function() {
											 api.search(this.value).draw();
							 });
					 },
							 oLanguage: {
							 sProcessing: "loading..."
					 },
							 processing: true,
							 serverSide: true,
							 ajax: {"url": "<?php echo base_url().'index.php/kelas/get_kelas6_json'?>", "type": "POST"},
									columns: [
												{"data": "kelas_id"},
												{"data": "kelas_nama"},
												{"data": "view"}

									 ],
							order: [[1, 'asc']],
					 rowCallback: function(row, data, iDisplayIndex) {
							 var info = this.fnPagingInfo();
							 var page = info.iPage;
							 var length = info.iLength;
							 $('td:eq(0)', row).html();
					 }

			 });
			// end setup datatables

// get Hapus Records
			$('#mytable1').on('click','.hapus_record',function(){
						 var kode=$(this).data('kode');
						 $('#ModalHapus').modal('show');
						 $('[name="kelas_id"]').val(kode);
			 });
			$('#mytable2').on('click','.hapus_record',function(){
						 var kode=$(this).data('kode');
						 $('#ModalHapus').modal('show');
						 $('[name="kelas_id"]').val(kode);
			 });
			$('#mytable3').on('click','.hapus_record',function(){
						 var kode=$(this).data('kode');
						 $('#ModalHapus').modal('show');
						 $('[name="kelas_id"]').val(kode);
			 });
			 $('#mytable4').on('click','.hapus_record',function(){
						 var kode=$(this).data('kode');
						 $('#ModalHapus').modal('show');
						 $('[name="kelas_id"]').val(kode);
			 });
			 $('#mytable5').on('click','.hapus_record',function(){
						 var kode=$(this).data('kode');
						 $('#ModalHapus').modal('show');
						 $('[name="kelas_id"]').val(kode);
			 });
			 $('#mytable6').on('click','.hapus_record',function(){
						 var kode=$(this).data('kode');
						 $('#ModalHapus').modal('show');
						 $('[name="kelas_id"]').val(kode);
			 });
			// End Hapus Records

	});
 </script>
 </html>
