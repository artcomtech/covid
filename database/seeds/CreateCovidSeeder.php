<?php

use Illuminate\Database\Seeder;

use App\Model\Covid;

class CreateCovidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Covid::create([
            'jml_otg'  =>10,
            'pantau' =>10,
            'selesai_pantau'  => 10,
            'rawat_rs'  => 10,
            'rawat_rumah'  => 10,
            'rawat_sembuh'  => 10,
            'rawat'  => 10,
            'sembuh'  => 10,
            'meninggal'  => 10,
            'jml_perjalanan'  => 10,
            'jml_selesai'  => 10,
            'jml_pantau'  => 10
        ]); 
    }
}
