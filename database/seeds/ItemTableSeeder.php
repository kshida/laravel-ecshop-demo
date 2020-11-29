<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Item([
            'id' => '1',
            'user_id' => '6',
            'name' => 'サンプル1',
            'image' => '/storage/test1.png',
            'description' => 'This is test1.',
            'price' => '200'
        ]);
        $item->save();

        $item = new \App\Item([
            'id' => '2',
            'user_id' => '6',
            'name' => 'サンプル2',
            'image' => '/storage/test2.png',
            'description' => 'This is test2.',
            'price' => '450'
        ]);
        $item->save();

        $item = new \App\Item([
            'id' => '3',
            'user_id' => '7',
            'name' => 'サンプル3',
            'image' => '/storage/test3.png',
            'description' => 'This is test3.',
            'price' => '1000'
        ]);
        $item->save();

        $item = new \App\Item([
            'id' => '4',
            'user_id' => '6',
            'name' => 'サンプル4',
            'image' => '/storage/test4.png',
            'description' => 'This is test4.',
            'price' => '550'
        ]);
        $item->save();

        $item = new \App\Item([
            'id' => '5',
            'user_id' => '7',
            'name' => 'サンプル5',
            'image' => '/storage/test5.png',
            'description' => 'This is test5.',
            'price' => '2800'
        ]);
        $item->save();

        $item = new \App\Item([
            'id' => '6',
            'user_id' => '7',
            'name' => 'サンプル6',
            'image' => '/storage/test6.png',
            'description' => 'This is test6.',
            'price' => '3000'
        ]);
        $item->save();

        $item = new \App\Item([
            'id' => '7',
            'user_id' => '6',
            'name' => 'サンプル7',
            'image' => '/storage/test7.png',
            'description' => 'This is test7.',
            'price' => '800'
        ]);
        $item->save();
    }
}
