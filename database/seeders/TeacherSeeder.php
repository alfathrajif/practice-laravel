<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TeacherSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Schema::withoutForeignKeyConstraints(function () {
      Teacher::truncate();
    });

    $data = [
      ["name" => "Radit"],
      ["name" => "Youka"],
      ["name" => "Meriana"],
      ["name" => "Bili"],
      ["name" => "Giantara"],
      ["name" => "Mantasa"],
    ];

    foreach ($data as $value) {
      Teacher::insert([
        'name' => $value['name'],
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
      ]);
    }
  }
}
