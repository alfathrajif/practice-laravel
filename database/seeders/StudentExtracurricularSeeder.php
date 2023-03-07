<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StudentExtracurricularSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */

  public function run()
  {
    Schema::withoutForeignKeyConstraints(function () {
      DB::table('student_extracurricular')->truncate();
    });

    $data = [
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
      ['student_id' => mt_rand(1, 10), 'extracurricular_id' => mt_rand(1, 6)],
    ];

    foreach ($data as $value) {
      DB::table('student_extracurricular')->insert([
        'student_id' => $value['student_id'],
        'extracurricular_id' => $value['extracurricular_id']
      ]);
    }
  }
}
