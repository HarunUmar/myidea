<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = new Kategori;
        $kategori->kategori = "Elektronik";
        $kategori->route = "#";
 		$kategori->save();
 		
 		$kategori1 = new Kategori;
        $kategori1->kategori = "Otomotif";
        $kategori1->route = "#";
 		$kategori1->save();
 		
 		$kategori2 = new Kategori;
        $kategori2->kategori = "Fashion";
        $kategori2->route = "#";
 		$kategori2->save();
 		
 		$kategori3 = new Kategori;
        $kategori3->kategori = "EO";
        $kategori3->route = "#";
 		$kategori3->save();
    }
}
