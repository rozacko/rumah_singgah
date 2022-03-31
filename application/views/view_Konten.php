<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title bg-primary">
					<h5>Master Data Konten</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up text-white"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" width="100%" id="main-table">
							<thead>
								<tr>
									<th width="5%">No</th>
									<th width="10%">Judul</th>
									<th width="10%">Deskripsi</th>
									<th width="10%">Foto</th>
									<th width="5%">Action</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal inmodal" id="add_konten_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Tambah Data</h4>
			</div>
			<form method="post" action="" enctype="multipart/form-data" id="myform">
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col">
							<label>Judul</label>
							<input type="text" class="form-control" id="konten_judul" name="konten_judul" placeholder="Judul" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Deskripsi</label>
							<textarea class="form-control" id="konten_deskripsi" name="konten_deskripsi" rows="3"></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Foto</label>
							<input type="file" class="form-control" id="file" name="file">
							<p>Foto format (.jpg, .png, .jpeg,)</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="save_add_konten()">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal inmodal" id="edit_konten_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="header_edit_konten"></h4>
			</div>
			<form method="post" action="" enctype="multipart/form-data" id="myform_edit">
				<div class="modal-body">
					<div class="form-row" style="display: none;">
						<div class="form-group col">
							<label>ID</label>
							<input type="text" class="form-control" id="konten_id_edit" name="konten_id_edit" readonly="true">
						</div>
					</div>
					<div class="form-row" style="display: none;">
						<div class="form-group col">
							<label>ID</label>
							<input type="text" class="form-control" id="file_prev" name="file_prev" readonly="true">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Judul</label>
							<input type="text" class="form-control" id="konten_judul_edit" name="konten_judul_edit" placeholder="Judul" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Dekskripsi</label>
							<textarea class="form-control" id="konten_deskripsi_edit" name="konten_deskripsi_edit" rows="3"></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Foto</label>
							<input type="file" class="form-control" id="file_edit" name="file_edit">
							<p>Foto format (.jpg, .png, .jpeg,)</p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="save_edit_konten()">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal inmodal" id="view_des_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="header_view_des"></h4>
			</div>
			<div class="modal-body">
				<div id="view_des"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal inmodal" id="view_foto_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="header_view_foto"></h4>
			</div>
			<div class="modal-body">
				<div id="view_foto"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal inmodal" id="confirm_delete_konten_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="header_delete_konten"></h4>
			</div>
			<div class="modal-body">
				<div class="form-row" style="display: none;">
					<div class="form-group col">
						<label>ID</label>
						<input type="text" class="form-control" id="id_delete" name="id_delete" placeholder="...">
					</div>
				</div>
				<div>
					<span>
						Apakah anda yakin?
					</span>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" onclick="save_delete_konten()">Yes</button>
			</div>
		</div>
	</div>
</div>



<!-- Mainly scripts -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/toastr/toastr.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url() ?>assets/js/inspinia.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/pace/pace.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>

<!-- Page-Level Scripts -->
<script>
	$(document).ready(function() {
		tinymce.init({
	        selector: '#konten_deskripsi'
	    });
	    tinymce.init({
	        selector: '#konten_deskripsi_edit'
	    });

		getMainTable();
	});

	function getMainTable() {
		var role_id = 1;
		var oTable = $('#main-table').DataTable({
			processing: true,
			select: true,
			destroy: true,
			searching: true,
			lengthChange: true,
			pageLength: 10,
			responsive: true,
			dom: '<"html5buttons"B>lTfgitp',
			buttons: {
				buttons: [{
					text: '<i class="fa fa-plus-square"></i>&ensp;Tambah Data',
					action: function(e, dt, node, config) {
						add_konten();
					}
				}, ],
				dom: {
					button: {
						tag: "button",
						className: "btn btn-primary btn-sm"
					},
					buttonLiner: {
						tag: null
					}
				}
			},
			ajax: {
				url: "<?= base_url('konten/get_data') ?>",
				type: 'GET',
				dataSrc: function(json) {
					var return_data = new Array()
					$.each(json['response'], function(i, item) {
						var button = '' +
							'<div class="btn-group">' +
							'<button class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data" onclick="edit_konten(\'' + item["konten_id"] + '\')"><i class="fa fa-edit"></i>&ensp;Edit</button>' +
							'<button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Data" onclick="confirm_delete_konten(\'' + item["konten_id"] + '\')"><i class="fa fa-trash"></i>&ensp;Delete</button>' +
							'</div>'
						var button_foto = '' +
							'<div class="btn-group">' +
							'<button class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data" onclick="view_foto(\'' + item["konten_id"] + '\')"><i class="fa fa-search"></i>&ensp;View</button>' +
							'</div>'
						var button_des = '' +
							'<div class="btn-group">' +
							'<button class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data" onclick="view_des(\'' + item["konten_id"] + '\')"><i class="fa fa-search"></i>&ensp;View</button>' +
							'</div>'
						return_data.push({
							'no': (i + 1),
							'konten_judul': item['konten_judul'],
							'konten_deskripsi': item['konten_id'] != '' ? button_des : '',
							'gambar': item['konten_id'] != '' ? button_foto : '',
							'action': item['konten_id'] != '' ? button : ''
						})
					})
					return return_data
				}
			},
			columns: [{
					data: 'no'
				},
				{
					data: 'konten_judul'
				},
				{
					data: 'konten_deskripsi'
				},
				{
					data: 'gambar'
				},
				{
					data: 'action'
				}
			]
		});
	}

	function add_konten() {
		$('#konten_judul').val('');
		tinymce.get("konten_deskripsi").setContent("");
		$('#file').val('');
		$('#add_konten_mdl').modal('show');
	}

	function save_add_konten() {
		var konten_judul = $('#konten_judul').val();
		var konten_deskripsi = tinymce.get("konten_deskripsi").getContent();
		var fd = new FormData();
		var files = $('#file')[0].files[0];
		fd.append('konten_judul', konten_judul);
		fd.append('konten_deskripsi', konten_deskripsi);
		fd.append('file', files);
		$.ajax({
			url: '<?php echo base_url() ?>konten/save_add',
			type: 'POST',
			data: fd,
			contentType: false,
			processData: false,
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#add_konten_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error(data, 'Failed');
				}
			}
		});

	}

	function edit_konten(id) {
		$.ajax({
			type: 'GET',
			url: '<?php echo base_url() ?>konten/get_data_by_id/' + id,
			dataType: 'json',
			success: function(data) {

				$('#konten_id_edit').val(data.konten_id);
				$('#konten_judul_edit').val(data.konten_judul);
				// $('#konten_deskripsi_edit').val(data.konten_deskripsi);
				tinyMCE.get('konten_deskripsi_edit').setContent(data.konten_deskripsi);
				$('#file_prev').val(data.gambar);			
				$('#header_edit_konten').html('Edit Data <span class="text-info">' + data.konten_judul + '</span>');
				$('#edit_konten_mdl').modal("show");
			}
		});
	}

	function view_des(id) {
		$.ajax({
			type: 'GET',
			url: '<?php echo base_url() ?>konten/get_data_by_id/' + id,
			dataType: 'json',
			success: function(data) {				
				$('#view_des').html(data.konten_deskripsi);		
				$('#header_view_des').html('<span class="text-info">' + data.konten_judul + '</span>');
				$('#view_des_mdl').modal("show");
			}
		});
	}

	function view_foto(id) {
		$.ajax({
			type: 'GET',
			url: '<?php echo base_url() ?>konten/get_data_by_id/' + id,
			dataType: 'json',
			success: function(data) {
				var base_url = '<?php echo base_url(); ?>';
				var html = '';
				if(data.gambar != '')
					html = "<center><img style='width:100%;height:100%' src='" + base_url + 'assets/images/' + data.gambar + "' /></center>";
				$('#view_foto').html(html);
				$('#header_view_foto').html('<span class="text-info">' + data.konten_judul + '</span>');
				$('#view_foto_mdl').modal("show");
			}
		});
	}

	function save_edit_konten() {
		var konten_id = $('#konten_id_edit').val();
		var file_prev = $('#file_prev').val();
		var konten_judul = $('#konten_judul_edit').val();
		var konten_deskripsi = tinymce.get("konten_deskripsi_edit").getContent();

		var fd = new FormData();
		var files = $('#file_edit')[0].files[0];
		fd.append('konten_id', konten_id);
		fd.append('konten_judul', konten_judul);
		fd.append('konten_deskripsi', konten_deskripsi);
		fd.append('file', files);
		fd.append('file_prev', file_prev);

		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>konten/save_edit',
			data: fd,
			contentType: false,
			processData: false,
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#edit_konten_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error(data, 'Failed');
				}
			}
		});

	}

	function confirm_delete_konten(id) {

		$('#id_delete').val(id);

		$('#header_delete_konten').html('Confirm Delete Data');

		$('#confirm_delete_konten_mdl').modal('show');

	}

	function save_delete_konten() {
		var id = $('#id_delete').val();

		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>konten/save_delete',
			data: {
				id: id,
			},
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#confirm_delete_konten_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error("Data gagal diperbarui", 'Failed');
				}
			}
		});

	}

	function isNumberKey(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
</script>