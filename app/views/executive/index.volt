
{% extends 'template/aplous.volt' %}

{% block content %}
	<div class="top-content">
        <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
            <ul class="breadcrumb">
                <li>
					<p>Pages</p>
                </li>
                <li>
					<a href="#" class="active">Executive</a>
                </li>
            </ul>
        </div>
	</div>
    <!-- START JUMBOTRON -->
    <div class="jumbotron" >
        <div class="sm-p-l-20 sm-p-r-20 m-b-50">

        </div>
    </div>
    <!-- END JUMBOTRON -->
	<form name="frmpendaftaran" id="frmpendaftaran" method="post" class="frmpendaftaran" onsubmit="simpan();return false;" enctype="multipart/form-data">
		<!-- START PANEL -->
        <div class="card card-transparent">
			<div class="card-header">
				<div class="card-title"><h5><b>Data Pasien</b></h5>
				</div>
			</div>
			<div class="card-block">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group form-group-default required ">
							<label>No RM</label>
							<input type="text" class="form-control" name="txtrm" required>
						</div>
						<div class="form-group form-group-default required">
							<label>Nama Pasien</label>
							<input onkeyup="ToUpper(this)" type="text" class="form-control" name="txtnamalengkap" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group form-group-default input-group">
							<label>Tanggal Lahir</label>
							<input type="text" class="form-control" placeholder="Pilih Tanggal" name="dtptanggallahir"id="dtptanggallahir">
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
						</div>
						<div class="form-group form-group-default required">
							<label>Handphone</label>
							<input onkeyup="ToUpper(this)" type="text" class="form-control" name="txthandphone" required>
						</div>	
					</div>
					<div class="col-sm-4">
						<div class="form-group form-group-default input-group">
							<label>Penanggung Jawab</label>
							<input type="text" class="form-control" name="txtpenanggungjawab">
							<span class="input-group-addon">
								<i class="fa fa-plus"></i>
							</span>
						</div>
						
					</div>
				</div>
			</div>
			<div class="card-header">
				<div class="card-title"><h5><b>Data Kunjungan</b></h5>
				</div>
			</div>
			<div class="card-block">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group form-group-default form-group-default-select2">
							<label class="">Instalasi/Unit</label>
							<select class="full-width" data-placeholder="Pilih Instalasi" data-init-plugin="select2" name="cmbunit">
								<optgroup label="Pilihan">
									<option value=""></option>
									<option value="TK">TK</option>
									<option value="SD">SD</option>
									<option value="SLTP">SLTP</option>
									<option value="SLTA">SLTA</option>
									<option value="HI">D1</option>
									<option value="HI">D2</option>
									<option value="D3">D3</option>
									<option value="S1">S1/D4</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group form-group-default form-group-default-select2">
							<label class="">Poli/SMF</label>
							<select class="full-width" data-placeholder="Pilih Poli" data-init-plugin="select2" name="cmbpoli">
								<optgroup label="Pilihan">
									<option value=""></option>
									<option value="TK">TK</option>
									<option value="SD">SD</option>
									<option value="SLTP">SLTP</option>
									<option value="SLTA">SLTA</option>
									<option value="HI">D1</option>
									<option value="HI">D2</option>
									<option value="D3">D3</option>
									<option value="S1">S1/D4</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</optgroup>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group form-group-default">
							<label>No. Reg/Kunjungan</label>
							<input onkeyup="ToUpper(this)" type="text" class="form-control" name="txtnoreg">
						</div>
						<div class="form-group form-group-default input-group">
							<label>Tanggal/No Urut</label>
							<input type="text" class="form-control" placeholder="Pilih Tanggal" name="dtptanggal" id="dtptanggal">
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group form-group-default form-group-default-select2">
							<label class="">Akses Masuk</label>
							<select class="full-width" data-placeholder="Pilih Akses Masuk" data-init-plugin="select2" name="cmbaksesmasuk">
								<optgroup label="Pilihan">
									<option value=""></option>
									<option value="TK">TK</option>
									<option value="SD">SD</option>
									<option value="SLTP">SLTP</option>
									<option value="SLTA">SLTA</option>
									<option value="HI">D1</option>
									<option value="HI">D2</option>
									<option value="D3">D3</option>
									<option value="S1">S1/D4</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group form-group-default form-group-default-select2">
							<label class="">Cara Masuk</label>
							<select class="full-width" data-placeholder="Pilih Cara Masuk" data-init-plugin="select2" name="cmbcaramasuk">
								<optgroup label="Pilihan">
									<option value=""></option>
									<option value="TK">TK</option>
									<option value="SD">SD</option>
									<option value="SLTP">SLTP</option>
									<option value="SLTA">SLTA</option>
									<option value="HI">D1</option>
									<option value="HI">D2</option>
									<option value="D3">D3</option>
									<option value="S1">S1/D4</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</optgroup>
							</select>
						</div>	
					</div>
				</div>
			</div>
			<div class="card-header">
				<div class="card-title"><h5><b>Metode Pembayaran</b></h5>
				</div>
			</div>
			<div class="card-block">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group form-group-default form-group-default-select2">
							<label class="">Jenis Pembayaran</label>
							<select class="full-width" data-placeholder="Pilih Pembayaran" data-init-plugin="select2" name="cmbmetodepembayaran">
								<optgroup label="Pilihan">
									<option value=""></option>
									<option value="TK">TK</option>
									<option value="SD">SD</option>
									<option value="SLTP">SLTP</option>
									<option value="SLTA">SLTA</option>
									<option value="HI">D1</option>
									<option value="HI">D2</option>
									<option value="D3">D3</option>
									<option value="S1">S1/D4</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</optgroup>
							</select>
						</div>	
					</div>
				</div>
			</div>
			<div class="card-header">
				<div class="card-title"><h5><b>Dokter Penanggung Jawab</b></h5>
				</div>
			</div>
			<div class="card-block">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group form-group-default required">
							<label>DPJP 1</label>
							<input onkeyup="ToUpper(this)" type="text" class="form-control" name="txtdpjp1" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group form-group-default required">
							<label>DPJP 2</label>
							<input onkeyup="ToUpper(this)" type="text" class="form-control" name="txtdpjp2" required>
						</div>	
					</div>
				</div>
			</div>
		</div>		
		<div class="input-group">
		<button class="btn-save btn btn-primary btn-lg visible-lg"  type="submit" name="btnregister" id="btnregister"> Tambah</button>
		<button class="btn-rst btn btn-info btn-lg visible-lg" type="reset" name="reset">Reset</button>
		</div>
		<!-- START COMPOSE BUTTON FOR TABS -->
        <div class="compose-wrapper visible-xs">
            <button class="compose-email text-info pull-right m-r-10 m-t-10" type="submit" name="btnregister" id="btnregister"><i class="fa fa-pencil-square-o"></i></button>
			<button class="compose-email text-info pull-right m-r-10 m-t-10" type="reset" name="btnreset" id="btnreset"><i class="fa fa-refresh"></i></button>
        </div>
        <!-- END COMPOSE BUTTON -->
	</form>
 <script type="text/javascript">
 function simpan()
 {
			var data = $('#frmpendaftaran').serialize();
			$.ajax({
                type:"POST",
                url:"{{ url('Pasien/simpan') }}",
                data:data,
                success:function(response)
				{
					if(response==1)
					{
						swal({ 
                            title: "Transaksi Berhasil!", 
                            text: "I will close in 2 seconds.",
                            timer: 2000,
                            type: "success"
									
                        }); 
						window.location.href='http://localhost/aplous/pasien';
					}
					else
					{
						sweetAlert("Transaksi gagal!", "", "error");
					}
                },
				error:function()
				{
					sweetAlert("Error!", "", "error");
				}
            });
 }
 </script>
 
 <script type="text/javascript">

    function ToUpper(ctrl)
    {  
		var t = ctrl.value;
		ctrl.value = t.toUpperCase();
    }

    function ToLower(ctrl)
    {  
		var t = ctrl.value;
		ctrl.value = t.toLowerCase();
    }

</script>
             
{% endblock %}