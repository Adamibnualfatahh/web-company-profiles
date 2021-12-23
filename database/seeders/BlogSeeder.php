<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'image' =>'20211220040415.jpg',
            'author' =>'Adam Ibnu',
            'title' => 'Ketentuan Kolam Renang Internasional',
            'slug' =>'ketentuankolamrenang',
            'content' =>'<p>Panjang kolam renang berdasarkan standar internasional adalah 50 meter.&nbsp;<br>Lebar kolam renang 25 meter. Kedalaman kolam minimum adalah 1,35 meter,<br> dimulai dari 1,0 m pada lintasan pertama hingga paling sedikit 6,0 m dihitung dari dinding kolam renang yang dilengkapi dengan balok start.<br> Adapun, kedalaman minimum pada bagian lainnya yaitu 1,0 m. Temperatur air dalam kolam renang berkisar 25 derajat sampai 28 derajat celcius. Lebar lintasan kolam renang 2,5 meter.<br> Jumlah lintasan kolam renang ada 8. Dalam pembagiannya, ada warna pembeda, yakni: Lintasan&nbsp;<br>1: hijau Lintasan&nbsp;<br>2: biru Lintasan&nbsp;<br>3: biru Lintasan&nbsp;<br>4: kuning Lintasan&nbsp;<br>5: kuning Lintasan&nbsp;<br>6: biru Lintasan&nbsp;<br>7: biru Lintasan&nbsp;<br>8: hijau Masing-masing lintasan dipisahkan dengan ruang sebesar 50 cm dan tali lintasan. Tali lintasan terdiri dari rangkaian pelampung berukuran kecil pada seutas tali yang panjangnya sama dengan panjang lintasan.<br><br><br>&nbsp;</p>',
            'created_at' => '2021-12-20 11:11:57'
        ]);
    }
}
