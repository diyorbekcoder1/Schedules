<?php

namespace App\Http\Controllers;

use App\Models\Faculties;
use Illuminate\Http\Request;

class FacultiescheduController extends Controller
{
    public function home()
    {

        return view('Homeschedu.index');
    }

    public function faculties()
    {
        $homeschedu = Faculties::all();
        return view('Facultschedu.faculties', compact('homeschedu'));
    }

    public function facultCourses($facult_id){
        $facult = Faculties::where('id', $facult_id)->with('courses')->first();
        $facultCourses = $facult->courses;
        return view('Courseschedu.courses', compact('facultCourses'));
    }
}
