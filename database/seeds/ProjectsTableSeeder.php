<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('projects')->truncate();
        $projects=[
            ['id'=>1, 'title'=>'
            راهبری و نگهداری تجهیزات سنجش کیفیت هوا - شرکت کنترل کیفیت هوا (وابسته به شهرداری تهران)
            ', 'photo'=>'1.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>2, 'title'=>'
            تعمیرات تجهیزات سنجش کیفیت هوا برندهای Ecotech و Environment S.A در شهرهای مختلف ایران
            ', 'photo'=>'2.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>3, 'title'=>'
            راهبری تجهیزات سنجش صوت
            ', 'photo'=>'3.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>4, 'title'=>'
            منشایابی ذرات با استفاده از تجهیزات Low Volume
            ', 'photo'=>'4.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>5, 'title'=>'
            طراحی و بررسی خط آهن مسیر یزد-بافق
            ', 'photo'=>'5.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>6, 'title'=>'
            طراحی و بررسی خط آهن مسیر تبریز-جلفا
            ', 'photo'=>'6.jpg','created_at'=>new DateTime, 'updated_at'=>new DateTime],
            
        ];
        DB::table('projects')->insert($projects);
            
    }
}
