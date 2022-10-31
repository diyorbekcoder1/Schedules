<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultiesRequest;
use App\Http\Requests\GroupsRequest;
use App\Models\Courses;
use App\Models\Faculties;
use App\Models\Groups;
use App\Models\Week;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function groupSchedule($facult_id, $course_id, $group_id)
    {
        $group = Groups::where('id', $group_id)->with('schedules')->first();
        $weeks = Week::all();
        $facult_id=Faculties::all();
        $schedules = $group->schedules;
//        dd($schedules);
        return view('Schedu.schedules', compact('weeks', 'schedules','facult_id'));
    }

    public function index()
    {
        $posts_groups = Groups::with('course')->get();
//                dd($posts_groups);
        return view('Groups.groups', compact('posts_groups'));
    }


    public function create()

    {
        $courses_id = Courses::all();
        return view('Groups.groups_create',compact('courses_id'));
    }

    public function store(GroupsRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'courses_id' => 'required',
        ],
            [
                'name.required' => 'Input Name',
                'status.required' => 'Select Status',
                'courses_id.required' => 'Select Courses',
            ]);

        Groups::insert([
            'name' => $request->name,
            'status' => $request->status,
            'courses_id' => $request->courses_id,
        ]);
        return redirect()->route('groups.index')->with('message', 'Post successfully Create.');
    }




    public function edit($id)
    {
        $post = Groups::find($id);
        return view('Groups.groups_edit', compact('post'));
    }


    public function update(FacultiesRequest $facultiesRequest, $id)
    {
        $data = $facultiesRequest->validated();
        $post = Groups::find($id);

        $post->update($data);
        return redirect()->route('Groups.index')->with('message', 'Post successfully edit.');
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:groups,id']);
        $post = Groups::find($id);

        $post->delete();
        return redirect()->route('groups.index')->with('message', 'Post successfully delete.');
    }
}
