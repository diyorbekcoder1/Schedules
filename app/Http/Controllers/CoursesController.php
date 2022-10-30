<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursesRequest;
use App\Http\Requests\FacultiesRequest;
use App\Models\Courses;
use App\Models\Faculties;
use App\Models\Groups;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function courseGroups($facult_id, $course_id)
    {
        $course = Courses::where('id', $course_id)->with('groups')->first();
        $groups = $course->groups;
        return view('Groupschedu.groups', compact('groups'));
    }
    public function index()
    {
        $courses = Courses::with('faculties')->get();
//        dd($courses);
        return view('Courses.courses', compact('courses'));
    }


    public function create()
    {
        $facult_id = Faculties::all();
        return view('Courses.courses_create',compact('facult_id'));
    }


    public function store(CoursesRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'facult_id' => 'required',
        ],
            [
                'name.required' => 'Input Name',
                'status.required' => 'Select Status',
                'facult_id.required' => 'Select Facult',
            ]);
//        $data = $coursesRequest->validated();
//        dd($request);
        Courses::insert([
            'name' => $request->name,
            'status' => $request->status,
            'facult_id' => $request->facult_id,
        ]);
        return redirect()->route('courses.index')->with('message', 'Post successfully Create.');
    }


    public function edit($id)
    {
        $postsa = Courses::find($id);
        return view('Courses.couses_edit', compact('postsa'));
    }


    public function update(CoursesRequest $coursesRequest, $id): \Illuminate\Http\RedirectResponse
    {
        $data = $coursesRequest->validated();
        $post = Courses::find($id);
        $post->update($data);
        return redirect()->route('courses.index')->with('message', 'Post successfully edit.');
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:courses,id']);
        $post = Courses::find($id);

        $post->delete();
        return redirect()->route('courses.index')->with('message', 'Post successfully delete.');
    }
}
