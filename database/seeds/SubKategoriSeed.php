<?php

use Illuminate\Database\Seeder;
use App\SubKategori;

class SubKategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SubKategori1 = new SubKategori;
        $SubKategori1->kategori_id = "1";
        $SubKategori1->sub_kategori = "AC";
        $SubKategori1->route = "#";
        $SubKategori1->satuan = "0";
        $SubKategori1->save();

        $SubKategori2 = new SubKategori;
        $SubKategori2->kategori_id = "2";
        $SubKategori2->sub_kategori = "Motor";
        $SubKategori2->route = "#";
        $SubKategori2->satuan = "0";
        $SubKategori2->save();

        $SubKategori3 = new SubKategori;
        $SubKategori3->kategori_id = "3";
        $SubKategori3->sub_kategori = "Bridal";
        $SubKategori3->route = "#";
        $SubKategori3->satuan = "0";
        $SubKategori3->save();

        $SubKategori4 = new SubKategori;
        $SubKategori4->kategori_id = "4";
        $SubKategori4->sub_kategori = "Cinematic";
        $SubKategori4->route = "#";
        $SubKategori4->satuan = "0";
        $SubKategori4->save();
    }
}
