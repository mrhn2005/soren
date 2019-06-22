<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('galleries')->truncate();
        $projects=[
            ['id'=>1,'title'=>'
            ایستگاه‌ها
            ', 'photo'=>'1.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>2,'title'=>'
              اتاق تعمیرات
            ', 'photo'=>'2.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>3,'title'=>'
            صوت
            ',  'photo'=>'3.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>4,'title'=>'
            آز مرجع
            ', 'photo'=>'4.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
             ['id'=>5,'title'=>'
            الکترونیک
            ', 'photo'=>'7.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
             ['id'=>6,'title'=>'
             صوت
            ', 'photo'=>'8.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
             ['id'=>7,'title'=>'
            PM sampler
            ', 'photo'=>'9.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
             ['id'=>8,'title'=>'
            ایستگاه‌ها
            ', 'photo'=>'10.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            
        ];
        DB::table('galleries')->insert($projects);
    }
}
