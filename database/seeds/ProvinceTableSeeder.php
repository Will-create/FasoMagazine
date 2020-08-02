<?php

use Illuminate\Database\Seeder;
use App\Province;
class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::truncate();
        $provinces=[
            ['Balé','Boromo',1],
            ['Bam','Kongoussi',5],
            ['Banwa','Solenzo',1],
            ['Bazèga','Kombisiri',7],
            ['Bougouriba','Diébougou',13],
            ['Boulgou','Tenkodogo',4],
            ['Boulkiemde','Koudougou',6],
            ['Comoé','Banfora',2],
            ['Ganzourgou','Zorgho',11],
            ['Gnagna','Bogandé',8],
            ['Gourma','Fada N\'gourma',8],
            ['Houet','Bobo-Dioulasso',9],
            ['Ioba','Dano',13],
            ['Kadiogo','Ouagadougou',3],
            ['Kénédougou','Orodara',9],
            ['Komandjari','Gayéri',8],
            ['Kompienga','Pama',8],
            ['Kossi','Nouna',1],
            ['Koulpélogo','Ouargaye',4],
            ['Kouritenga','Koupéla',4],
            ['Kourwéogo','Boussé',11],
            ['Léraba','Sindou',2],
            ['Loroum','Titao',10],
            ['Mouhoun','Dédougou',1],
            ['Nahouri','Pô',7],
            ['Namentenga','Boulsa',5],
            ['Nayala','Toma',1],
            ['Noumbiel','Batié',13],
            ['Oubritenga','Ziniaré',11],
            ['Oudalan','Gorom-Gorom',12],
            ['Passoré','Yako',10],
            ['Poni','Gaoua',13],
            ['Sanguié','Réo',6],
            ['Sanmatenga','Kaya',5],
            ['Séno','Dori',12],
            ['Sissili','Léo',6],
            ['Soum','Djibo',12],
            ['Sourou','Tougan',1],
            ['Tapoa','Diapaga',8],
            ['Tuy','Houndé',9],
            ['Yagha','Sebba',12],
            ['Yatenga','Ouahigouya',10],
            ['Ziro','Sapouy',6],
            ['Zondoma','Gourcy',10],
            ['ZoundWéogo','Manga',7]
        ];


        foreach($provinces as $province){

         Province::create([
             'nom'=>$province[0],
             'chefLieu'=>$province[1],
             'region_id'=>$province[2]
         ]);

        }
    }
}
