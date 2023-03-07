<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Routing\Controller;

class ExtracurricularController extends Controller
{
  public function index()
  {
    $extracurriculars = Extracurricular::get();
    return view('extracurricular', [
      'extracurriculars' => $extracurriculars
    ]);
  }

  public function show($id)
  {
    $extracurricular = Extracurricular::with(['students'])->findOrFail($id);
    return view('extracurricular-detail', [
      'extracurricular' => $extracurricular
    ]);
  }
}
