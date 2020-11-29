<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'id' => '1',
            'name' => '赤羽一夜',
            'email' => 'akabane_kazuyo@example.test',
            'password' => 'test',
            'role' => '2'
        ]);
        $user->save();

        $user = new \App\User([
            'id' => '2',
            'name' => '加藤二郎',
            'email' => 'katou_jirou@example.test',
            'password' => 'test',
            'role' => '2'
        ]);
        $user->save();

        $user = new \App\User([
            'id' => '3',
            'name' => '佐藤三世',
            'email' => 'satou_mitsuyo@example.test',
            'password' => 'test',
            'role' => '2'
        ]);
        $user->save();

        $user = new \App\User([
            'id' => '4',
            'name' => '髙橋四葉',
            'email' => 'takahashi_yotsuba@example.test',
            'password' => 'test',
            'role' => '2'
        ]);
        $user->save();

        $user = new \App\User([
            'id' => '5',
            'name' => '七海五木',
            'email' => 'nanami_itsuki@example.test',
            'password' => 'test',
            'role' => '2'
        ]);
        $user->save();

        $user = new \App\User([
            'id' => '6',
            'name' => '八王子歴史研究会',
            'email' => 'hachi_ken@example.test',
            'password' => 'test',
            'role' => '1'
        ]);
        $user->save();

        $user = new \App\User([
            'id' => '7',
            'name' => '町田郷土同好会',
            'email' => 'machida_doukoukai@example.test',
            'password' => 'test',
            'role' => '1'
        ]);
        $user->save();
    }
}
