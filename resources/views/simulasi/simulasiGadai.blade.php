@extends('master.index')
@section('content')
<div class="row slogan">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  	<div class="row" align="center" style="margin-bottom: 60px;">
  		<div class="col">
  			<h3>Simulasi Gadai KCA</h3>
  		</div>
  	</div>
  	<div class="row">
  		<form>
			<div class="col-md-5">
				<div class="form-group row">
					<label for="jeniskca" class="col-sm-5 col-form-label">Jenis KCA</label>
					<div class="col-sm-7">
					<select id="jeniskca" name="jeniskca" class="form-control" onchange="changeJenisKCA()">
						<option value="kcareg">KCA Reguler</option>
						<option value="kcaflex">KCA Flexi</option>
						<option value="kcabis">KCA Bisnis</option>
						<option value="kcaprim">KCA Prima</option>
					</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="usia" class="col-sm-5 col-form-label">Usia</label>
					<div class="col-sm-7">
						<input type="number" class="form-control" id="usia" name="usia" placeholder="Usia"><!-- 
						<input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" readonly> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="uangpinjaman" class="col-sm-5 col-form-label">Uang Pinjaman</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="uangpinjaman" id="uangpinjaman" placeholder="Uang Pinjaman" onchange="calculateSewaModal()">
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-5">
			<div class="form-group row">
					<label for="tenor" class="col-sm-5 col-form-label">Tenor</label>
					<div class="col-sm-7">
						<div class="row">
							<div class="col-md-6">
							<select id="tenor" name="tenor" class="form-control">
								<option value="15">15</option>
								<option value="30">30</option>
								<option value="45">45</option>
								<option value="60">60</option>
								<option value="75">75</option>
								<option value="90">90</option>
								<option value="105">105</option>
								<option value="120">120</option>
							</select>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="hari" name="hari" placeholder="Hari" readonly style="margin-left: -25px;">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="sewamodal" class="col-sm-5 col-form-label" id="labelSewaModal">Tarif Sewa Modal</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="sewamodal" id="sewamodal" placeholder="Tarif Sewa Modal" readonly>
					</div>
				</div>	
			</div>
  		</form>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="row">
  				<div class="col" align="right">
  					<button type="button" class="btn btn-success" id="hitung" style="margin-right: 20px;" onclick="proccesResult()">Hitung</button>
  				</div>
  			</div>
  		</div>
  		<div class="col-md-6">
  			<div class="row">
  				<div class="col" align="left">
  					<button type="button" class="btn btn-success" id="reset" style="margin-left: 20px;">Reset</button>
  				</div>
  			</div>
  		</div>
  	</div>
	<div class="row last">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<p id="result" align="center">KONTOL</p>
		</div>
		<div class="col=md-2"></div>
	</div>
  <div class="col-md-2"></div>
</div>
@endsection
@push('extra-script')
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			document.getElementById("result").style.display = "none";
			// Format mata uang.
			$('#uangpinjaman').mask('000.000.000.000', {reverse: true});
			$('#sewamodal').mask('000.000.000.000', {reverse: true});
			$('#administrasi').mask('000.000.000.000', {reverse: true});
		})

		function calculateSewaModal(){
			var uangPinjam = $('#uangpinjaman').val();
			var uangPinjam = uangPinjam.replace(/\./g,'');
			var sewaModal = 1;
			if (uangPinjam < 50000) {
				alert("Minimal uang pinjaman adalah Rp. 50.000");
				document.getElementById('uangpinjaman').value = "";
				return;
			} else if (uangPinjam >= 50000 && uangPinjam <=500000){
				sewaModal = 1.0;
			} else if (uangPinjam > 500000 && uangPinjam <=20000000){
				sewaModal = 1.2;
			} else {
				sewaModal = 1.1;
			}
			var tarifSewaModal = uangPinjam * (sewaModal/100);
			document.getElementById('sewamodal').value = tarifSewaModal;
			return;
		}

		function changeJenisKCA() {
			var jenisKCA = $('#jeniskca').val();
			if (jenisKCA == 'kcaprim') {
				$('#labelSewaModal').hide();
				$('#sewamodal').hide();
				return;
			} 
			$('#labelSewaModal').show();
			$('#sewamodal').show();
		}

		function proccesResult(){
			document.getElementById("result").style.display = "block";
			return;
		}
	</script>
@endpuch