<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\produk;
use App\DiskonRateAmanah;
use JavaScript;

class ViewController extends Controller
{
    public function index()
    {
    	return view('home.home');
    }

    public function simulasiBeliEmas()
    {
        return view('simulasi.simulasiBeliEmas');
    }

    public function simulasiKreditAmanah()
    {
        JavaScript::put([
          'up_min_pemohon' => UP_MIN_PEMOHON_AMANAH,
          'up_max_pemohon' => UP_MAX_PEMOHON_AMANAH,
          'mu_nah_amanah' => MU_NAH_AMANAH,
          'list_diskon_rate' => DiskonRateAmanah::get(),
          'mapper_ijk'=> MAPPER_IJK_AMANAH,
          'mu_nah_akad' => MU_NAH_AKAD_AMANAH,
          'mapper_plafon_kendaraan' => MAPPER_PLAFON_KENDARAAN_AMANAH
        ]);
        return view('simulasi.simulasiKreditAmanah');
    }

    public function produk()
    {
      $data = produk::all();
      return view('produk.produk', compact('data'));
    }
}
