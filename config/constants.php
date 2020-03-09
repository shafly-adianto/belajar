<?php 

define('PDS_URL', 'https://apidigital.pegadaian.co.id/v2');

define('USERNAME', 'dev.gea2019@gmail.com'); //real akun PDS
define('PASSWORD', 'devgea2019'); //real akun PDS

define('MU_NAH_AMANAH', 0.9);
define('UP_MAX_PEMOHON_AMANAH', 450000000);
define('UP_MIN_PEMOHON_AMANAH', 3000000);
define('MAPPER_IJK_AMANAH',[
    'internal'=>[
        '12'=>0.220,
        '18'=>0.370,
        '24'=>0.450,
        '36'=>0.640,
        '48'=>0.820,
        '60'=>0.990
    ],
    'eksternal'=>[
        '12'=>0.670,
        '18'=>0.810,
        '24'=>0.930,
        '36'=>1.150,
        '48'=>1.620,
        '60'=>1.820
    ],
    'mikro'=>[
        '12'=>0.920,
        '18'=>1.380,
        '24'=>1.610,
        '36'=>2.020,
        '48'=>2.400,
        '60'=>2.740
    ]
]);
define('MU_NAH_AKAD_AMANAH', ['mobil'=>200000, 'motor'=>70000]);
define('MAPPER_PLAFON_KENDARAAN_AMANAH', [
    'motor'=>['jepang'=>90,
                'amerika'=>70,
                'eropa'=>75,
                'korea'=>70,
                'india'=>80,
                'indonesia'=>65,
                'lainnya'=>60
                ],
    'mobil'=>['jepang'=>80,
                'amerika'=>75,
                'eropa'=>75,
                'korea'=>75,
                'india'=>75,
                'indonesia'=>'-',
                'lainnya'=>60
                ]
]);

?>