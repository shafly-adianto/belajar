@extends('master.index')

@section('content')
<div class="row slogan">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  	<div class="row" align="center" style="margin-bottom: 60px;">
  		<div class="col">
  			<h3>Simulasi Beli Emas</h3>
  		</div>
  	</div>
  	<div class="row">
  		<form>
  		<div class="col-md-5">
			<div class="form-group row">
			    <label for="hargaEmas" class="col-sm-5 col-form-label">Harga Beli Emas /gr</label>
			    <div class="col-sm-7">
			     	<input type="number" class="form-control" name="hargaEmas" id="hargaEmas" placeholder="Harga Emas">
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
			    <label for="berat" class="col-sm-5 col-form-label">Berat Gram</label>
			    <div class="col-sm-7">
			      	<select name="berat" id="berat" class="form-control">
			      		<option value="1">1 Gr</option>
			      		<option value="5">5 Gr</option>
			      		<option value="10">10 Gr</option>
			      		<option value="25">25 Gr</option>
			      	</select>
			    </div>
  			</div>
  		</div>
  		<div class="col-md-2"></div>
  		<div class="col-md-5">
  			<div class="form-group row">
			    <label for="biayadp" class="col-sm-5 col-form-label">Biaya DP</label>
			    <div class="col-sm-7">
			      	<input type="number" class="form-control" name="biayadp" id="biayadp" placeholder="Biaya DP">
			    </div>
  			</div>
  			<div class="form-group row">
			    <label for="sewamodal" class="col-sm-5 col-form-label">Tarif Sewa Modal</label>
			    <div class="col-sm-7">
			      	<input type="number" class="form-control" name="sewamodal" id="sewamodal" placeholder="Tarif Sewa Modal">
			    </div>
  			</div>
			<div class="form-group row">
			    <label for="tenor" class="col-sm-5 col-form-label">Tenor</label>
			    <div class="col-sm-7">
			    	<div class="row">
			    		<div class="col-md-6">
				    		<input type="number" class="form-control" id="tenor" name="tenor" placeholder="Tenor" value="12" readonly>
				    	</div>
				    	<div class="col-md-6">
				    		<input type="text" class="form-control" id="tenor" name="bulan" placeholder="Bulan" readonly style="margin-left: -25px;">
				    	</div>
			    	</div>
			    </div>
			</div>
  		</div>
  		</form>
  	</div>
  	<div class="row">
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
  					<button type="button" class="btn btn-success" id="reset" style="margin-left: 20px;">Reset</button>
  				</div>
  			</div>
  		</div>
  	</div>
  <div class="col-md-2"></div>
</div>
@endsection
@push('extra-script')
	<script type="text/javascript">
		function hitungBeliEmas() {
			alert("yes");
		}
	</script>
@endpuch