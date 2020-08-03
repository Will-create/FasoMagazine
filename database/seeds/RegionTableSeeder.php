<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::truncate();
        $regions=[
            ['Boucle Du Mouhoun','Dédougou'],
            ['Cascade','Banfora'],
            ['Centre','Ouagadougou'],
            ['Centre-Est','Tenkodogo'],
            ['Centre-Nord','Kaya'],
            ['Centre-Ouest','Koudougou'],
            ['Centre-Sud','Manga'],
            ['Est','Fada N\'gourma'],
            ['Haut-Bassins','Bobo-Dioulasso'],
            ['Nord','Ouahigouya'],
            ['Plateau-Central','Ziniaré'],
            ['Sahel','Dori'],
            ['Sud-Ouest','Gaoua']
        ];


        foreach($regions as $region){

            Region::create([
                    'nom'=>$region[0],
                    'chefLieu'=>$region[1]
            
            
                    ]);

        }
    }
}
