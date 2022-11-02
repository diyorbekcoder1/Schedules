<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultiesRequest;
use App\Http\Requests\SchedulesRequest;
use App\Models\Courses;
use App\Models\Faculties;
use App\Models\Groups;
use App\Models\Schedules;
use App\Models\Week;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function index()
    {

        $post_sch = Schedules::with('group')->get();
        return view('Schedules.schedules', compact('post_sch', $post_sch));
    }


    public function create()
    {
        $grops_id = Groups::all();
        $week_id = Week::all();
        return view('Schedules.schedules_create', compact('grops_id', 'week_id'));
    }

    public function store(SchedulesRequest $request)
    {
        $request->validate([
            'start_lesson' => 'required',
            'end_lesson' => 'required',
            'science_name' => 'required',
            'room' => 'required',
            'science_type' => 'required',
            'teacher' => 'required',
            'status' => 'required',
            'group_id' => 'required',
            'week_id' => 'required',
        ],
            [
                'start_lesson' => 'required',
                'end_lesson' => 'required',
                'science_name' => 'required',
                'room' => 'required',
                'science_type' => 'required',
                'teacher' => 'required',
                'status' => 'required',
                'group_id' => 'required',
                'week_id' => 'required',
                'group_id.required' => 'Select Group_id',
                'week_id.required' => 'Select Group_id',
            ]);

        Schedules::insert([
            'start_lesson' => $request->start_lesson,
            'end_lesson' => $request->end_lesson,
            'science_name' => $request->science_name,
            'room' => $request->room,
            'science_type' => $request->science_type,
            'teacher' => $request->teacher,
            'status' => $request->status,
            'group_id' => $request->group_id,
            'week_id' => $request->week_id,
        ]);
        return redirect()->route('schedules.index')->with('message', 'Post successfully Create.');
    }


    public function edit($id)
    {
        $post = Schedules::find($id);
        return view('Schedules.schedules_edit', compact('post'));
    }


    public function update(SchedulesRequest $schedulesRequest, $id)
    {
        $data = $schedulesRequest->validated();
        $post = Schedules::find($id);

        $post->update($data);
        return redirect()->route('schedules.index')->with('message', 'Post successfully edit.');
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:schedules,id']);
        $post = Schedules::find($id);
        $post->delete();
        return redirect()->route('schedules.index')->with('message', 'Post successfully delete.');
    }
}
