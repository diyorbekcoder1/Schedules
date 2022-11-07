<?php

namespace App\Http\Controllers;

use App\Traits\FileUpload;
use App\Http\Requests\SchedulesRequest;

use App\Models\Groups;
use App\Models\Schedules;
use Illuminate\Http\Request;


class SchedulesController extends Controller
{
    use FileUpload;

    public function index()
    {

        $post_sch = Schedules::with('group')->get();
        return view('Schedules.schedules', compact('post_sch', $post_sch));
    }


    public function create()
    {
        $grops_id = Groups::all();
        return view('Schedules.schedules_create', compact('grops_id'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([



                'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,pdf', 'max:2048'],
                'group_id' => ['required', 'integer', 'exists:groups,id']


            ]


        );
        $data = $this->fileUpload($data);
        Schedules::create($data);

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
//        unlink('storage/images/' . $post->image);
        $post->delete();
        return redirect()->route('schedules.index')->with('message', 'Post successfully delete.');
    }
}
