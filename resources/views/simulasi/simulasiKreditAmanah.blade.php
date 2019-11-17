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
  		<form>
  		<div class="col-md-5">
			<div class="form-group row">
			    <label for="wilayahktp" class="col-sm-5 col-form-label">Wilayah KTP</label>
			    <div class="col-sm-7">
			      <select id="wilayahktp" name="wilayahktp" class="form-control">
			      	<option value="aceh">Aceh</option>
			      	<option value="bandung">Bandung</option>
			      	<option value="bekasi">Bekasi</option>
			      	<option value="bandung">Bandung</option>
			      	<option value="jakarta">Jakarta</option>
			      </select>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="pekerjaan" class="col-sm-5 col-form-label">Jenis Pekerjaan</label>
			    <div class="col-sm-7">
				 	<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Jenis Pekerjaan"><!-- 
				    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" readonly> -->
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
			    <label for="kategori" class="col-sm-5 col-form-label">Kategori Kendaraan</label>
			    <div class="col-sm-7">
			      <select id="kategori" name="kategori" class="form-control">
			      	<option value="mobil">Mobil</option>
			      	<option value="motor">Motor</option>
			      </select>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="merk" class="col-sm-5 col-form-label">Merk Kendaraan</label>
			    <div class="col-sm-7">
			      <select id="merk" name="merk" class="form-control">
			      	<option value="toyota">Toyota</option>
			      	<option value="daihatsu">Daihatsu</option>
			      	<option value="honda">Honda</option>
			      	<option value="suzuki">Suzuki</option>
			      </select>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="tipe" class="col-sm-5 col-form-label">Tipe Kendaraan</label>
			    <div class="col-sm-7">
			      <select id="tipe" name="tipe" class="form-control">
			      	<option value="avanza">Avanza</option>
			      	<option value="xenia">Xenia</option>
			      	<option value="jazz">Jazz</option>
			      	<option value="ertiga">Ertiga</option>
			      </select>
			    </div>
			</div>
  		</div>
  		<div class="col-md-2"></div>
  		<div class="col-md-5">
  			<div class="form-group row">
			    <label for="hargakendaraan" class="col-sm-5 col-form-label">Harga Kendaraan</label>
			    <div class="col-sm-7">
			      	<input type="number" class="form-control" name="hargakendaraan" id="hargakendaraan" placeholder="Harga Kendaraan">
			    </div>
  			</div>
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
