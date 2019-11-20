<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('kategori')->truncate();
        $id=DB::table('kategori')->insertGetId(['kategori_adi'=>'Elektronik','slug'=>'elektronik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar/Tablet','slug'=>'bilgisayar-tablet','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Telefon','slug'=>'telefon','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Tv ve Ses Sistemleri','slug'=>'tv-ses-sistemleri','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Kamera','slug'=>'kamera','ust_id'=>$id]);


        $id=DB::table('kategori')->insertGetId(['kategori_adi'=>'Kitap','slug'=>'kitap']);
        DB::table('kategori')->insert(['kategori_adi'=>'Edebiyyat','slug'=>'edebiyyat','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Cocuk','slug'=>'cocuk','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar','slug'=>'bilgisayar','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Sinavlara Hazirlik','slug'=>'sinavlara-hazirlik','ust_id'=>$id]);



        DB::table('kategori')->insert(['kategori_adi'=>'Dergi','slug'=>'dergi']);
        DB::table('kategori')->insert(['kategori_adi'=>'Mobilya','slug'=>'mobilya']);
        DB::table('kategori')->insert(['kategori_adi'=>'Dekarasyon','slug'=>'dekarasyon']);
        DB::table('kategori')->insert(['kategori_adi'=>'Kozmetik','slug'=>'kozmetik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Kisisel Bakim','slug'=>'kisisel bakim']);
        DB::table('kategori')->insert(['kategori_adi'=>'Giyim ve Moda','slug'=>'giyim-ve-moda']);
        DB::table('kategori')->insert(['kategori_adi'=>'Anne ve Cocuk','slug'=>'anne ve cocuk']);

    }
}
