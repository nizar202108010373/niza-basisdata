<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Toko;
use Illuminate\Support\Str;
use \Carbon\Carbon;
use Faker\Factory as Faker;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table("toko")->insert([
            "nama_toko" => "Zar Cleos",
            "alamat_toko" => $faker->address,
            "telp" => "08123456789",
            "product" => "baju",
            "created_at" => $timestamp, 
            "updated_at" => $timestamp
        ]);
    }
}
