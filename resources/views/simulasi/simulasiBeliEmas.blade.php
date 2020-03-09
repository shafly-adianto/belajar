@extends('master.index')

@section('content')
<div class="row slogan">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  	<div class="row" align="center" style="margin-bottom: 60px;">
  		<div class="col">
  			<h3>Simulasi Emasku</h3>
  		</div>
  	</div>
	<div class="container-fluid">
		<div class="row">
		<!-- Error Alert -->
		<div class="alert alert-danger" id="danger-alert">
			<button type="button" class="close" data-dismiss="alert">x</button>
		</div>
		</div>
	</div>
	<form>
  	<div class="row">
  		<div class="col-md-5">
			<div class="form-group row">
			    <label for="hargaEmas" class="col-sm-5 col-form-label">Harga Beli Emas /gr</label>
			    <div class="col-sm-7">
			     	<input type="text" class="form-control validate-input" name="hargaEmas" id="hargaEmas" value="{{isset(Session::get('response')['data']['hargaJual'])?Session::get('response')['data']['hargaJual']:0}}" readonly placeholder="Harga Emas">
			    </div>
			</div>
			<div class="form-group row">
			    <label for="perTanggal" class="col-sm-5 col-form-label">Per Tanggal</label>
			    <div class="col-sm-7">
			      	<input type="text" class="form-control validate-input" name="perTanggal" id="perTanggal" value="{{isset(Session::get('response')['data']['hargaJual'])?Session::get('response')['data']['tglBerlaku']:''}}" readonly placeholder="Per Tanggal Harga Emas">
			    </div>
  			</div>
			<div class="form-group row">
			    <label for="usia" class="col-sm-5 col-form-label">Usia Pemohon</label>
			    <div class="col-sm-7">
				 	<input type="number" class="form-control validate-input" id="usia" name="usia" placeholder="Usia" min="0" onchange="changeUsia(this.value)">
			    </div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
  		<div class="col-md-5">
		  <div class="form-group row">
			    <label for="berat" class="col-sm-5 col-form-label">Berat Gram</label>
			    <div class="col-sm-7">
			      	<select name="berat" id="berat" class="form-control validate-input" onchange="biayaDp()">
					  	<option value="" selected disabled>Gram Emas</option>
			      		<option value="1">1 Gr</option>
			      		<option value="5">5 Gr</option>
			      		<option value="10">10 Gr</option>
			      		<option value="25">25 Gr</option>
			      	</select>
			    </div>
  			</div>
  			<div class="form-group row">
			    <label for="biayadp" class="col-sm-5 col-form-label">Biaya DP</label>
			    <div class="col-sm-7">
			      	<input type="text" class="form-control validate-input" name="biayadp" id="biayadp" placeholder="Biaya DP" readonly>
			    </div>
  			</div>
			<div class="form-group row">
			    <label for="tenor" class="col-sm-5 col-form-label">Tenor</label>
			    <div class="col-sm-7">
			    	<div class="row">
			    		<div class="col-md-6">
				    		<input type="number" class="form-control validate-input" id="tenor" name="tenor" placeholder="Tenor" value="12" readonly>
				    	</div>
				    	<div class="col-md-6">
				    		<input type="text" class="form-control" id="tenor" name="bulan" placeholder="Bulan" readonly style="margin-left: -25px;">
				    	</div>
			    	</div>
			    </div>
			</div>
  		</div>
  	</div>
  	<div class="row" style="margin-top: 20px;">
  		<div class="col-md-6">
  			<div class="row">
  				<div class="col" align="right">
  					<button onclick="hitungBeliEmas()" type="button" class="btn btn-success" id="hitung" style="margin-right: 20px;">Hitung</button>
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
	</form>  
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="box">
				<h4 id="result" align="center"></h4>
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
			var hargaEmasperGram = $('#hargaEmas').val();
			hargaEmasperGram = hargaEmasperGram * 100;
			$('#hargaEmas').val(hargaEmasperGram);
			$('#hargaEmas').mask('000.000.000.000', {reverse: true});
			$('#biayadp').mask('000.000.000.000', {reverse: true});
		})

		function hitungBeliEmas() {
			var validate_msg="";
			validate_msg=validateInput();
			if (validate_msg!="") {
				showAlert(validate_msg);
				return false;
			}
			var hargaEmas = $('#hargaEmas').val();
			var tenor = $('#tenor').val();
			var gramEmas = $('#berat').val();
			var uangMuka = $('#biayadp').val();
			hargaEmas = hargaEmas.replace(/\./g, "");
			uangMuka = uangMuka.replace(/\./g, "");

			var total = hargaEmas*gramEmas;
			var angsuranPerBulan = total - uangMuka;
			angsuranPerBulan = Math.round(angsuranPerBulan/tenor);
			
			total = moneyFormatDots(total);
			angsuranPerBulan = moneyFormatDots(angsuranPerBulan);
			document.getElementById('result').innerHTML = "Total harga emas		: Rp."+total+ "<br><br>"
														 +"Angsuran per bulan	: Rp."+angsuranPerBulan;
			document.getElementById('result').style.display = "block";
			
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
		
		function biayaDp() {
			var gramEmas = $('#berat').val();
			var obj_biayaDp = {
				1:"150000",
				5:"300000",
				10:"550000",
				25:"1250000"
			};
			var value = moneyFormatDots(obj_biayaDp[gramEmas]);

			$('#biayadp').val(value);
		}

		function moneyFormatDots(value) {
			const formatter = new Intl.NumberFormat('en-US', {
			  style: 'currency',
			  currency: 'USD',
			  minimumFractionDigits: 0
			})

			return formatter.format(value).substring(1).replace(/,/g, ".");
		}

		function doReset() {
			$('#berat').val("");
			$('#usia').val("");
			$('#biayadp').val("");
			document.getElementById('result').innerHTML="";
			document.getElementById('result').style.display="none";
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

		function showAlert(message){
			$("#danger-alert").fadeTo(3000, 500).slideUp(500, function(){
				$("#danger-alert").slideUp(500);
			}).html("<strong>Error! </strong> "+message+"<button type='button' class='close' data-dismiss='alert'>x</button>");	
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