<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Supplier;
use Illuminate\Support\Str;
use \Carbon\Carbon;
use Faker\Factory as Faker;

class SupplierSeeder extends Seeder
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
        DB::table("supplier")->insert([
            "nama_supplier" => "Cleos",
            "alamat_supplier" => $faker->address,
            "telp" => "08987654321",
            "supply_product" => "baju",
            "created_at" => $timestamp, 
            "updated_at" => $timestamp
        ]);
    }
}
