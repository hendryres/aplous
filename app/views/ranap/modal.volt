
<form name="frmmodal" id="frmmodal" method="post" class="frmmodal" enctype="multipart/form-data">
<div class="card card-transparant"><!-- START PANEL -->
	<div class="card-header">
        <div class="card-title">
			Lookup RM : <?php echo $txtrm;?>
			<input type="hidden" class="form-control" name="txtrm" value="<?php echo $txtrm;?>" required>
        </div>
    </div>
    <div class="card-header">
        <div class="card-title"><h5><b>Identitas</h5></b>
        </div>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group form-group-default required ">
                    <label>No KTP</label>
                    <input type="text" class="form-control" name="txtktp" required>
                </div>
                <div class="form-group form-group-default required">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="txtnamalengkap" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group form-group-default required">
                    <label>Hubungan Keluarga</label>
                    <input type="text" class="form-control" name="txtnamalengkap" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group form-group-default required">
                    <label>Handphone</label>
                    <input type="text" class="form-control" name="txthandphone" required>
                </div>
            </div>
        </div>
    </div>
    <div class="card-header">
        <div class="card-title"><h5><b>Data Alamat</h5></b>
        </div>
    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group form-group-default required">
                    <label>Alamat</label>
                    <textarea class="form-control" name="txtalamat" required></textarea>
                </div>
				<div class="form-group form-group-default form-group-default-select2">
                    <label class="">Propinsi</label>
                    <select class="cmb full-width" data-placeholder="Pilih Propinsi" data-init-plugin="select2" name="cmbpropinsi">
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
                <div class="form-group form-group-default form-group-default-select2">
                    <label class="">Kota</label>
                    <select class="cmb full-width" data-placeholder="Pilih Kota" data-init-plugin="select2" name="cmbkota">
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
                    <label class="">Kecamatan</label>
                    <select class="cmb full-width" data-placeholder="Pilih Kecamatan" data-init-plugin="select2" name="cmbkecamatan">
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
                <div class="form-group form-group-default form-group-default-select2">
                    <label class="">Kelurahan</label>
                    <select class="cmb full-width" data-placeholder="Pilih Kelurahan" data-init-plugin="select2" name="cmbkelurahan">
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
                <div class="form-group form-group-default required">
                    <label>Kode Pos</label>
                    <input type="text" class="form-control" name="txtkodepos" required>
                </div>
			</div>
        </div>
    </div>
	<div  class="row">
		<div class="pull-right">
			<div class="col-xs-12">
				<button class="btn btn-primary btn-lg"  type="submit" id="btnsimpan" name="btnsimpan" > Simpan</button>
				<button class="btn btn-info btn-lg"  class="close" type="button" id="batal" data-dismiss="modal" aria-hidden="true">Batal</button>
			</div>
		</div>
	</div>
</div>
</form>
<script type="text/javascript">
$(".cmb").select2({
    dropdownParent: $('#modalFillIn')
});
</script>