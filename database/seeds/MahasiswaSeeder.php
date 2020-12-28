<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $nim = 18104000;
        $kelas = ["SE-02-A", "SE-02-B"];
        for ($i = 1; $i <= 26; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('person')->insert([
                'nik' => $faker->nik(),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'umur' => $faker->numberBetween(25, 40)
            ]);
        }
    }
}
