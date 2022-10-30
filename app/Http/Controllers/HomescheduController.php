<?php

namespace App\Http\Controllers;

use App\Models\Faculties;
use Illuminate\Http\Request;

class HomescheduController extends Controller
{
    public function home()
    {
       $homeschedu=Faculties::all();
      return  view('Homeschedu.index',compact('homeschedu'));
    }
}
