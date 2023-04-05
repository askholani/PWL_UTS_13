<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $customers = [
            [
                'no_rek' => 0000000000000001,
                'nama' =>'ibnu hajar askholani',
                'alamat' => 'jl.rusun bci ',
                'jenis_tabungan' => 'platinum',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => 0000000000000002,
                'nama' =>'ahmad bima tristan ibrahim',
                'alamat' => 'jl.kayu jati',
                'jenis_tabungan' => 'platinum',
                'saldo' => '20000000',
            ],
            [
                'no_rek' => 0000000000000003,
                'nama' =>'alfi surya pratama',
                'alamat' => 'jl.kayu manis',
                'jenis_tabungan' => 'platinum',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => 0000000000000004,
                'nama' =>'andhito galih nur cahyo',
                'alamat' => 'jl.batu bata',
                'jenis_tabungan' => 'gold',
                'saldo' => '40000000',
            ],
            [
                'no_rek' => 0000000000000005,
                'nama' =>'abdullah azzam',
                'alamat' => 'jl.batu ceper',
                'jenis_tabungan' => 'platinum',
                'saldo' => '20000000',
            ],
            [
                'no_rek' => 0000000000000006,
                'nama' =>'Bagus Dwi Putranto ibrahim',
                'alamat' => 'jl.pisang',
                'jenis_tabungan' => 'platinum',
                'saldo' => '20000000',
            ],
            [
                'no_rek' => 0000000000000007,
                'nama' =>'Dimitri Abdullah',
                'alamat' => 'jl.manggis',
                'jenis_tabungan' => 'silver',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => 000000000000010,
                'nama' =>'Elang Putra Adam',
                'alamat' => 'jl.manggis',
                'jenis_tabungan' => 'silver',
                'saldo' => '10000000',
            ],
            
            [
                'no_rek' => 0000000000000021,
                'nama' =>'Faiz Atha Raditya',
                'alamat' => 'jl.rusun bca ',
                'jenis_tabungan' => 'platinum',
                'saldo' => '90000000',
            ],
            [
                'no_rek' => 0000000000000022,
                'nama' =>'Iemaddudin',
                'alamat' => 'jl.semangka',
                'jenis_tabungan' => 'platinum',
                'saldo' => '20000000',
            ],
            [
                'no_rek' => 0000000000000023,
                'nama' =>'Mohammad Izamul Fikri Fahmi',
                'alamat' => 'jl.melon',
                'jenis_tabungan' => 'gold',
                'saldo' => '2400000',
            ],
            [
                'no_rek' => 0000000000000024,
                'nama' =>'Muhammad Dzaka Murran Rusid',
                'alamat' => 'jl.sirsak',
                'jenis_tabungan' => 'gold',
                'saldo' => '49000000',
            ],
            [
                'no_rek' => 0000000000000025,
                'nama' =>'Muhammd Ega Rama Fernanda',
                'alamat' => 'jl.durian runtuh',
                'jenis_tabungan' => 'silver',
                'saldo' => '20900000',
            ],
            [
                'no_rek' => 0000000000000026,
                'nama' =>'Muhammad Endar Darmawan',
                'alamat' => 'jl.anggur',
                'jenis_tabungan' => 'gold',
                'saldo' => '29000000',
            ],
            [
                'no_rek' => 0000000000000027,
                'nama' =>'Muhammad Farhan Riza Putra',
                'alamat' => 'jl.pisang raja',
                'jenis_tabungan' => 'gold',
                'saldo' => '10000000',
            ],
            [
                'no_rek' => 000000000000014,
                'nama' =>'Naresh Pratista',
                'alamat' => 'jl.durian hitam',
                'jenis_tabungan' => 'silver',
                'saldo' => '9000000',
            ],
        ];
        DB::table('customer')->insert($customers);
    }
}