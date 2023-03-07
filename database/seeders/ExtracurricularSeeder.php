<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ExtracurricularSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Schema::withoutForeignKeyConstraints(function () {
      Extracurricular::truncate();
    });

    $data = [
      ["name" => "Sepak Bola"],
      ["name" => "Basket"],
      ["name" => "Voli"],
      ["name" => "Biliard"],
      ["name" => "Golf"],
      ["name" => "Manjat Gedung"],
    ];

    foreach ($data as $value) {
      Extracurricular::insert([
        'name' => $value['name'],
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);
    }
  }
}
