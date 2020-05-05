<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'user_id' => 1,
            'title'=>'経営学　教科書',
            'item_description'=>'大学：北京大学経営学部　時限：日曜５限　新品未使用の教科書です。',
            'item_img' => 'sample.png',
            'price' => 1500,
            'category' => 1,
            'status'    => 1,
            'college' => 1,
            'count_like' => 0
        ];
        DB::table('items')->insert($param);
        
        $param = [
            'user_id' => 1,
            'title'=>'経済学　教科書',
            'item_description'=>'大学：北京大学経営学部　時限：日曜４限　新品未使用の教科書です。同じものを二つ購入してしまったため出品いたします。キャンパス内での取引希望です。',
            'item_img' => 'sample.png',
            'price' => 1000,
            'category' => 1,
            'status'    => 1,
            'college' => 1,
            'count_like' => 0
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'title'=>'筆箱',
            'item_description'=>'大学：北京大学経営学部　時限：日曜４限　新品未使用です。同じものを二つ購入してしまったため出品いたします。キャンパス内での取引希望です。',
            'item_img' => 'sample.png',
            'price' => 0,
            'category' => 1,
            'status'    => 1,
            'college' => 1,
            'count_like' => 0
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'title'=>'経済学　ノート',
            'item_description'=>'大学：北京大学経営学部　新品未使用の教科書です。同じものを二つ購入してしまったため出品いたします。キャンパス内での取引希望です。',
            'item_img' => 'sample.png',
            'price' => 100,
            'category' => 2,
            'status'    => 2,
            'college' => 1,
            'count_like' => 0
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'title'=>'経済学　教科書',
            'item_description'=>'大学：北京大学経営学部　時限：日曜４限　新品未使用の教科書です。同じものを二つ購入してしまったため出品いたします。キャンパス内での取引希望です。',
            'item_img' => 'sample.png',
            'price' => 800,
            'category' => 1,
            'status'    => 1,
            'college' => 1,
            'count_like' => 0
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 1,
            'title'=>'オライリー　猿でもわかるDeepLearning',
            'item_description'=>'大学：北京大学python学部　時限：日曜1限　新品未使用の教科書です。猿でもわかると表紙にありましたが私には理解できませんでした。キャンパス内での取引希望です。',
            'item_img' => 'sample.png',
            'price' => 1000,
            'category' => 1,
            'status'    => 1,
            'college' => 1,
            'count_like' => 0
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'title'=>'オライリー　３日でできる！　DeepLearning　マスター編',
            'item_description'=>'新品未使用です。3日で終わると表紙にありましたが私には終えることができませんでした。マスターへの道のりはそう近くは無いようです。キャンパス内での取引希望です。',
            'item_img' => 'sample.png',
            'price' => 1000,
            'category' => 1,
            'status'    => 1,
            'college' => 1,
            'count_like' => 0
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => 1,
            'title'=>'オライリー　0.５日できる！　統計学　マスター編',
            'item_description'=>'新品未使用です。0.5日で終わると表紙にありましたが私には終えることができませんでした。マスターへの道のりはそう近くは無いようです。キャンパス内での取引希望です。',
            'item_img' => 'sample.png',
            'price' => 1000,
            'category' => 1,
            'status'    => 1,
            'college' => 1,
            'count_like' => 0
        ];
        DB::table('items')->insert($param);
    }
}
