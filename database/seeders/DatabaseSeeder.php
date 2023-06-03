<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     

      DB::table('users')->insert([
        [
            'name' => 'adminUser',
            'email' => 'admin@gmail.com',
            'password' => bcrypt("user"),
            'admin' => '1']
        ]);
       


        DB::table('products')->insert([
           [ 'id' => 1,
           'product_name' => 'sp1',
           'type_id' => 1,
           'product_price' => 999000,
           'product_image' => 'be-rua-sieu-am-4972.jpg',
           'description' =>  ' 0',
           'thongso' => '0',
          
           'created_at' => '2022/04/10',
           'updated_at' => '2022/04/10',],
          
        [
            'id' => 2,
            'product_name' => 'sp2',
            'type_id' => 1,
            'product_price' => 111,
            'product_image' => 'thiet-bi-vi-8282.png',
            'description' =>  '0',
            'thongso' => '0',
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',
        ],
          [
            'id' => 3,
            'product_name' => 'sp3',
            'type_id' => 1,
            'product_price' => 9490000,
            'product_image' => 'thiet-bi-vi-8282.png',
            'description' =>  '  0',
            'thongso' => '0',
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',]
          ]);

          DB::table('types')->insert([


         
           [ 'type_id' => 1,
            'type_name' => 'Thí Nghiệm- Kiểm Định XD',
            'type_image' => '00',
            'protype_id' => 1,
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',],
            [   'type_id' => 2,
            'type_name' => 'Thiết Bị Hóa - Sinh Môi Trường',
            'type_image' => '00',
            'protype_id' => 1,
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',],
            [ 'type_id' => 3,
            'type_name' => 'Danh mục khác',
            'type_image' => 'tn-nhua-9445.png',
            'protype_id' => 1,
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',],
            [ 'type_id' => 4,
            'type_name' => 'THÍ NGHIỆM NHỰA-BÊ TÔNG NHỰA',
            'type_image' => 'tn-nhua-9445.png',
            'protype_id' => 1,
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',],
            ['type_id' => 5,
            'type_name' => 'THÍ NGHIỆM SẮT-THÉP',
            'type_image' => 'tn-thep-7993.png',
            'protype_id' => 2,
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',],
            ['type_id' => 6,
            'type_name' => 'THÍ NGHIỆM XI MĂNG,VỮA,GẠCH XÂY',
            'type_image' => 'tn-xi-mang-9818.png',
            'protype_id' => 3,
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',]

          ]);
       
        
       

          DB::table('protypes')->insert([
         [   'protype_id' => 1,
            'name' => 'Thí Nghiệm- Kiểm Định XD',
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',],
            [ 'protype_id' => 2,
                'name' => 'Thiết Bị Hóa - Sinh Môi Trường',
                'created_at' => '2022/04/10',
                'updated_at' => '2022/04/10',],
                [   'protype_id' => 3,
                'name' => 'Danh mục khác',
                'created_at' => '2022/04/10',
                'updated_at' => '2022/04/10',],
          ]);


          DB::table('products')->insert([
            [ 'id' => 1,
            'product_name' => 'sp1',
            'type_id' => 1,
            'product_price' => 999000,
            'product_image' => 'binh-ty-trong-dat-5747.jpg',
            'description' =>  ' 0',
            'thongso' => '0',
           
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',]]);
           

          
     
      
    }
}
