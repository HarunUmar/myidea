<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level1 = new Level;
        $level1->level = 'Administrator';
        $level1->status_aktif = '1';
        $level1->save();

        $level2 = new Level;
        $level2->level = 'User';
        $level2->status_aktif = '1';
        $level2->save();
    }
}
