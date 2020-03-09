@extends('master.index')

@section('content')
<div class="row slogan">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  	<div class="row" align="center" style="margin-bottom: 60px;">
  		<div class="col">
  			<h3>Simulasi Kredit Amanah</h3>
  		</div>
  	</div>
  	<div class="row">
		<div class="container-fluid">
			<div class="row">
			<!-- Error Alert -->
			<div class="alert alert-danger" id="danger-alert">
				<button type="button" class="close" data-dismiss="alert">x</button>
			</div>
			</div>
		</div>
  		<form>
  		<div class="col-md-5">
			<div class="form-group row">
			    <label for="hargakendaraan" class="col-sm-5 col-form-label">Harga Kendaraan</label>
			    <div class="col-sm-7">
			      	<input type="text" class="form-control custom-width validate-input" name="hargakendaraan" id="hargakendaraan" placeholder="Harga Kendaraan" onchange="changeHargaKendaraan()" align="right">
			    </div>
  			</div>
			<div class="form-group row">
			    <label for="kategori" class="col-sm-5 col-form-label">Kategori Kendaraan</label>
			    <div class="col-sm-7">
			      <select id="kategori" name="kategori" class="form-control custom-width validate-input" onchange="changeHargaKendaraan()">
				  	<option value="" selected disabled>Pilih kategori</option>
			      	<option value="mobil">Mobil</option>
			      	<option value="motor">Motor</option>
			      </select>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="negaraKendaraan" class="col-sm-5 col-form-label">Negara Merek Kendaraan</label>
			    <div class="col-sm-7">
					<select id="negaraKendaraan" name="negaraKendaraan" class="form-control custom-width validate-input" onchange="changeHargaKendaraan()">
						<option value="" selected disabled>Pilih Negara</option>
						<option value="jepang">Jepang</option>
						<option value="amerika">Amerika</option>
						<option value="eropa">Eropa</option>
						<option value="korea">Korea</option>
						<option value="india">India</option>
						<option value="indonesia">Indonesia</option>
						<option value="lainnya">Lainnya</Label>
					</select>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="taksiran" class="col-sm-5 col-form-label">Taksiran</label>
			    <div class="col-sm-7">
			      	<input type="text" class="form-control custom-width validate-input" name="taksiran" id="taksiran" placeholder="Taksiran" readonly>
			    </div>
  			</div>
			<div class="form-group row">
			    <label for="upMaks" class="col-sm-5 col-form-label">Uang Pinjaman Maksimal</label>
			    <div class="col-sm-7">
			      	<input type="text" class="form-control custom-width validate-input" name="upMaks" id="upMaks" placeholder="Pinjaman Maks" readonly align="right">
			    </div>
  			</div>
			<div class="form-group row">
			    <label for="upPemohon" class="col-sm-5 col-form-label">Uang Pinjaman Pemohon</label>
			    <div class="col-sm-7">
			      	<input type="text" class="form-control custom-width validate-input" name="upPemohon" id="upPemohon" placeholder="Pinjaman Pemohon" onchange="changeUpPemohon()" align="right">
			    </div>
  			</div>
  		</div>
  		<div class="col-md-2"></div>
  		<div class="col-md-5">
		  	<div class="form-group row">
			    <label for="usia" class="col-sm-5 col-form-label">Usia Pemohon</label>
			    <div class="col-sm-7">
				 	<input type="number" min=0 class="form-control custom-width validate-input" id="usia" name="usia" placeholder="Usia" onchange="changeUsia(this.value)">
			    </div>
			</div>
			<div class="form-group row">
			    <label for="statusPemohon" class="col-sm-5 col-form-label">Status Kepekerjaan Pemohon</label>
			    <div class="col-sm-7">
					<select id="statusPemohon" name="statusPemohon" class="form-control custom-width validate-input" onchange="setBiayaDP()">
						<option value="" selected disabled>Pilih status</option>
						<option value="internal">Internal</option>
						<option value="eksternal">Eksternal</option>
						<option value="mikro">Mikro</option>
					</select>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="tenor" class="col-sm-5 col-form-label">Tenor</label>
			    <div class="col-sm-7">
			    	<div class="row">
			    		<div class="col-md-6">
						<select id="tenor" name="tenor" class="form-control validate-input" style="width:90px;" onchange="setBiayaDP()">
							<option value="" selected disabled>Tenor</option>
							<option value="12">12</option>
							<option value="18">18</option>
							<option value="24">24</option>
							<option value="36">36</option>
							<option value="48">48</option>
							<option value="60">60</option>
						</select>
				    	</div>
				    	<div class="col-md-6">
				    		<input type="text" class="form-control" id="tenor" name="bulan" placeholder="Bulan" readonly>
				    	</div>
			    	</div>
			    </div>
			</div>
  			<div class="form-group row">
			    <label for="biayadp" class="col-sm-5 col-form-label">Biaya DP</label>
			    <div class="col-sm-7">
			      	<input type="text" class="form-control custom-width validate-input" name="biayadp" id="biayadp" placeholder="Biaya DP" readonly align="right"> 
			    </div>
  			</div>
  			<div class="form-group row">
			    <label for="sewamodal" class="col-sm-5 col-form-label">Tarif Mu'nah</label>
			    <div class="col-sm-7">
			      	<input type="text" class="form-control custom-width validate-input" name="sewamodal" id="sewamodal" placeholder="Tarif Mu'nah" readonly align="right">
			    </div>
  			</div>
  		</div>
  		</form>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="row">
  				<div class="col" align="right">
  					<button type="button" class="btn btn-success" id="hitung" style="margin-right: 20px;" onclick="doHitung()">Hitung</button>
  				</div>
  			</div>
  		</div>
  		<div class="col-md-6">
  			<div class="row">
  				<div class="col" align="left">
  					<button type="button" class="btn btn-success" id="reset" style="margin-left: 20px;" onclick="doReset()">Reset</button>
  				</div>
  			</div>
  		</div>
  	</div>
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="box">
				<div id="result">
				</div>
			</div>
		</div>
		<div class="col=md-2"></div>
	</div>
  <div class="col-md-2"></div>
  
</div>
@endsection
@push('extra-script')
	<script type="text/javascript">
		$(document).ready(function(){
			$("#danger-alert").hide();
			document.getElementById("result").style.display = "none";
			$('#hargakendaraan').mask('000.000.000.000', {reverse: true});
			$('#upPemohon').mask('000.000.000.000', {reverse: true});
		})

		function changeHargaKendaraan(){	
			$('#upPemohon').val("");
			changeUpPemohon();
			setBiayaDP();
			var kategoriKendaraan = $('#kategori').val();
			var hargaKendaraan = removeDotsFormat($('#hargakendaraan').val());
			var negaraKendaraan = $('#negaraKendaraan').val();
			if (kategoriKendaraan==null || negaraKendaraan==null || hargaKendaraan==0) {
				$('#taksiran').val("");
				$('#upMaks').val("");
				$('#upPemohon').val("");
				$('#biayadp').val("");
				$('#sewamodal').val("");
				return false;
			}
			if (kategoriKendaraan=='mobil' && negaraKendaraan=='indonesia') {
				showAlert('Belum ada kendaraan mobil asal Indonesia dalam kredit Amanah ini.');
				$('#negaraKendaraan').val("");
				$('#taksiran').val("");
				$('#upMaks').val("");
				return false;
			}
			var hargaTaksiran = hargaKendaraan*(100/100);
			var uangPinjamanMaks = setUangPinjamanMaks(hargaTaksiran, kategoriKendaraan, negaraKendaraan);
			
			hargaTaksiran = moneyFormatDots(hargaTaksiran);
			uangPinjamanMaks = moneyFormatDots(uangPinjamanMaks);

			$('#taksiran').val(hargaTaksiran);
			$('#upMaks').val(uangPinjamanMaks);
		}

		function changeUpPemohon(){
			setBiayaDP();
			var upPemohon = removeDotsFormat($('#upPemohon').val());
			var upMaks = removeDotsFormat($('#upMaks').val());
			var taksiran = removeDotsFormat($('#taksiran').val());
			if (upPemohon==0) {
				$('#sewamodal').val("");
				$('#biayadp').val("");
				return false;
			}
			var validate_msg = validateUpPemohon(upPemohon, upMaks);
			if (!validateUpPemohon(upPemohon, upMaks)) {
				$('#upPemohon').val("");
				$('#upPemohon').focus();
				$('#sewamodal').val("");
				$('#biayadp').val("");
				return false;
			}
			var resultCalc = calculateSewaModal(upPemohon,taksiran);

			$('#sewamodal').val(moneyFormatDots(resultCalc['nettSewaModal']));
		}

		function changeUsia(usia){
			var validate_msg = validateUsia(usia);
			if (validate_msg!="") {
				showAlert(validate_msg);
				$('#usia').val("");
				$('#usia').focus();
				return false;
			}
			return true;
		}

		function validateUpPemohon(upPemohon, upMaks) {
			var valid=true;
			var errorMessage="";
			if (upPemohon != 0 || upPemohon != null) {
				if (upPemohon > upMaks) {
					errorMessage= "Uang pinjaman tidak boleh lebih besar dari uang pinjaman maksimal!";
					valid = false;
					showAlert(errorMessage);
				} else if(upPemohon < irfan.up_min_pemohon) {
					errorMessage= "Uang pinjaman tidak boleh lebih kecil dari Rp.3.000.000 !";
					valid = false;
					showAlert(errorMessage);			
				} else if(upPemohon > irfan.up_max_pemohon){
					errorMessage= "Uang pinjaman tidak boleh lebih kecil dari Rp.450.000.000 !";
					valid = false;					
					showAlert(errorMessage);
				}
			}
			return valid;
		}

		function setUangPinjamanMaks(hargaTaksiran, kategoriKendaraan, negaraKendaraan){
			var persenPlafonMaks = irfan.mapper_plafon_kendaraan[kategoriKendaraan][negaraKendaraan];
			var upMaks = Math.round(hargaTaksiran * (persenPlafonMaks/100));
			if (upMaks.toString().substr(upMaks.toString().length-5)!='00000') {
				upMaks = upMaks.toString().replace(upMaks.toString().substr(upMaks.toString().length-5),'00000');
			}
			
			return upMaks;
		}

		function setBiayaDP() {
			var status = $('#statusPemohon').val();
			var tenor = $('#tenor').val();
			var kategoriKendaraan = $('#kategori').val();
			var taksiran = removeDotsFormat($('#taksiran').val());
			var upPemohon = removeDotsFormat($('#upPemohon').val());

			if (kategoriKendaraan == null || status==null || tenor==null || taksiran == null || upPemohon == null || taksiran == 0 || upPemohon == 0) {			
				$('#biayadp').val("");
				return false;
			}
			var percentIjk = irfan.mapper_ijk[status][tenor];
			var dp = taksiran - upPemohon;
			var ijk = Math.round(upPemohon*percentIjk/(100));
			var mu_nahAkad = irfan.mu_nah_akad[kategoriKendaraan];
			var totalDp = dp+ijk+mu_nahAkad;

			$('#biayadp').val(moneyFormatDots(totalDp));
		}

		function removeDotsFormat(value){
			if (value == "" || value==null || value==0) {
				value='0.';
			}
			value = value.replace(/\./g,"");
			value = parseInt(value);
			
			return value;
		}

		function moneyFormatDots(value) {
			const formatter = new Intl.NumberFormat('en-US', {
			  style: 'currency',
			  currency: 'USD',
			  minimumFractionDigits: 0
			})

			return formatter.format(value).substring(1).replace(/,/g, ".");
		}

		function doHitung(){
			var validate_msg="";
			validate_msg=validateInput();
			if (validate_msg!="") {
				showAlert(validate_msg);
				return false;
			}
			var upPemohon = removeDotsFormat($('#upPemohon').val());
			var taksiran = removeDotsFormat($('#taksiran').val());
			var tenor = $('#tenor').val();
			var resultCalc = calculateSewaModal(upPemohon,taksiran);
			var angsuran = (upPemohon/tenor)+resultCalc['nettSewaModal'];
			angsuran = Math.ceil(angsuran/10) * 10;
			document.getElementById('result').innerHTML = "<table align='center'>"+
															"<tr>"+
																"<td><h4>Total Mu'Nah</h4></td>"+
																"<td><h4>: Rp.</h4></td>"+
																"<td align='right'><h4>"+moneyFormatDots(resultCalc['realSewaModal'])+"</h4></td>"+
															"</tr>"+
															"<tr class='row-diskonMuNah'>"+
																"<td><h4>Diskon Mu'Nah</h4></td>"+
																"<td><h4>: Rp.</h4></td>"+
																"<td align='right'><h4>"+moneyFormatDots(resultCalc['diskonSewaModal'])+"</h4></td>"+
															"</tr>"+
															"<tr class='row-nettMuNah'>"+
																"<td><h4>Mu'nah Nett</h4></td>"+
																"<td><h4>: Rp.</h4></td>"+
																"<td align='right'><h4>"+moneyFormatDots(resultCalc['nettSewaModal'])+"</h4></td>"+
															"</tr>"+
															"<tr class='row-angsuranAmanah'>"+
																"<td><h4><strong>Angsuran per bulan</strong></h4></td>"+
																"<td><h4><strong>: Rp.</strong></h4></td>"+
																"<td align='right'><h4><strong>"+moneyFormatDots(angsuran)+"</strong></h4></td>"+
															"</tr>"+
														  "</table>";										
			document.getElementById('result').style.display = "block";
		}

		function doReset() {
			$(":input" ).val("");
			document.getElementById('result').innerHTML="";
			document.getElementById('result').style.display="none";
		}

		function showAlert(message){
			$("#danger-alert").fadeTo(3000, 500).slideUp(500, function(){
				$("#danger-alert").slideUp(500);
			}).html("<strong>Error! </strong> "+message+"<button type='button' class='close' data-dismiss='alert'>x</button>");	
		}

		function calculateSewaModal(upPemohon, taksiran){
			var response;
			var upPerTaksiran = upPemohon/taksiran;
			var percentPerbandingan = upPerTaksiran*100;
			var percentDiskonRate;

			irfan.list_diskon_rate.some(function (e) {
				if (e.id == Math.floor(percentPerbandingan)) {
					percentDiskonRate = e.diskon_rate;
					return;
				}
			});

			var realSewaModal = Math.round(taksiran*irfan.mu_nah_amanah/(100));
			var diskonSewaModal = Math.round(realSewaModal*percentDiskonRate/(100));
			var nettSewaModal = realSewaModal - diskonSewaModal;
			
			response = {
				'realSewaModal':realSewaModal,
				'diskonSewaModal':diskonSewaModal,
				'nettSewaModal':nettSewaModal
			};

			return response;
		}

		function validateInput(){
			var validate_msg="";
			$($(".validate-input").get().reverse()).each(function() {
				var element = $(this);
				if (element.val() == "" || element.val()==null || element.val() == 0) {
					var value = typeof element.attr('placeholder') === "undefined" ? element.find('option:selected').text(): element.attr('placeholder');
					validate_msg = "Field "+value+" tidak boleh kosong!";
					element.focus();
				}
			});
			return validate_msg;
		}

		function validateUsia(usia){
			var validate_msg="";
			if (parseInt(usia) < 17) {
				validate_msg="Usia tidak boleh kurang dari 17 tahun!";
			}
			return validate_msg;
		}
	</script>
@endpush
