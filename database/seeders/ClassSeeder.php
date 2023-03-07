<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Schema::withoutForeignKeyConstraints(function () {
      ClassRoom::truncate();
    });

    $data = [
      ["name" => "1A"],
      ["name" => "1B"],
      ["name" => "2A"],
      ["name" => "2B"]
    ];

    foreach ($data as $value) {
      ClassRoom::insert([
        'name' => $value['name'],
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        'teacher_id' => mt_rand(1, 6)
      ]);
    }
  }
}
