<?php

use Illuminate\Database\Seeder;

class FavoriteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $favorite = new \App\favorite([
            'id' => '1',
            'user_id' => '1',
            'item_id' => '1'
        ]);
        $favorite->save();

        $favorite = new \App\favorite([
            'id' => '2',
            'user_id' => '1',
            'item_id' => '3'
        ]);
        $favorite->save();

        $favorite = new \App\favorite([
            'id' => '3',
            'user_id' => '2',
            'item_id' => '2'
        ]);
        $favorite->save();

        $favorite = new \App\favorite([
            'id' => '4',
            'user_id' => '3',
            'item_id' => '4'
        ]);
        $favorite->save();

        $favorite = new \App\favorite([
            'id' => '5',
            'user_id' => '4',
            'item_id' => '5'
        ]);
        $favorite->save();
    }
}
