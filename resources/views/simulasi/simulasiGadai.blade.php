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
			      <select id="jeniskca" name="jeniskca" class="form-control">
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
			      	<input type="number" class="form-control" name="uangpinjaman" id="uangpinjaman" placeholder="Uang Pinjaman">
			    </div>
  			</div>
  		</div>
  		<div class="col-md-2"></div>
  		<div class="col-md-5">
  			<div class="form-group row">
			    <label for="sewamodal" class="col-sm-5 col-form-label">Tarif Sewa Modal</label>
			    <div class="col-sm-7">
			      	<input type="number" class="form-control" name="sewamodal" id="sewamodal" placeholder="Tarif Sewa Modal" readonly>
			    </div>
  			</div>
			<div class="form-group row">
			    <label for="tenor" class="col-sm-5 col-form-label">Tenor</label>
			    <div class="col-sm-7">
			    	<div class="row">
			    		<div class="col-md-6">
				    		<input type="number" class="form-control" id="tenor" name="tenor" placeholder="Tenor" value="4" readonly>
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
  					<button type="button" class="btn btn-success" id="hitung" style="margin-right: 20px;">Hitung</button>
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
