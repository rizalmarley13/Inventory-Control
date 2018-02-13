<div class="container">
	<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">Form Input Data Benang</div>
			<div class="panel-body">
				<form>
				<div class="col-md-4">
					<div class="form form-group">
						<label for="maker_benang">Maker Benang</label>
						<input type="text" name="maker_benang" class="form-control" value="">
					</div>
				</div>
				<div class="col-md-3 col-md-offset-4 col-md-pull-4">
				<div class="form form-group">
					<label for="jenis_benagg">Jenis Benang</label>
					<input type="text" name="jenis_benang" class="form-control" value="">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form form-group">
					<label for="denier">Denier</label>
					<input type="text" name="denier" class="form-control" value="">
				</div>
				</div>
				<div class="col-md-2">
				<div class="form form-group">
					<label for="filamen">Filamen</label>
					<input type="text" name="filamen" class="form-control" value="">
				</div>
				</div>
				<div class="col-md-4 col-md-offset-4 col-md-pull-4">
				<div class="form form-group">
					<label for="lot">Lot</label>
					<input type="text" name="lot" class="form-control" value="">
				</div>
				</div>
				<div class="col-md-3">
				<div class="form form-group">
					<label for="berat_box">Berat Box</label>
					<input type="text" name="berat_box" class="form-control" value="">
				</div>
				</div>
				<div class="col-md-1">
				<div class="form form-group">
					<label for="satuan">Satuan</label>
					<input type="text" name="satuan" class="form-control" value="Kg">
				</div>
				</div>
				<div class="col-md-3 col-md-offset-6 col-md-pull-6">
				<div class="form form-group">
					<label for="lokasi">Lokasi</label>
					<select class="form-control" name="lokasi">
						<option value="">---Pilih---</option>
						<option value="Polamas">Polamas</option>
						<option value="Surotex">Suritex</option>
					</select>
				</div>
				</div>
				<div class="col-md-3 col-md-pull-6">
				<div class="form form-group">
					<label for="status">Status</label>
					<select class="form-control" name="status">
						<option value="">---Pilih---</option>
						<option value="Aktif">Aktif</option>
						<option value="Tidak Aktif">Tidak Aktif</option>
					</select>
				</div>
				</div>
				<div class="col-md-6">
					<button class="btn btn-primary">Simpan</button>
					<a href="<?php echo base_url();?>index.php/benang" class="btn btn-info">Batal</a>
				</div>
				</form>
			</div>
		</div>
	</div> 
</div>