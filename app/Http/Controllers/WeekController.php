<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultiesRequest;
use App\Models\Faculties;
use App\Models\Week;
use Illuminate\Http\Request;

class WeekController extends Controller
{


    public function index()
    {
        $weeks = Week::all();
        return view('Week.week', compact('weeks'));
    }


    public function create()
    {
        return view('Week.week_create');
    }


    public function store(FacultiesRequest $facultiesRequest)
    {
        $data = $facultiesRequest->validated();

        Week::create($data);
        return redirect()->route('week.index')->with('message', 'Post successfully Create.');
    }


    public function edit($id)
    {
        $post = Faculties::find($id);
        return view('Faculties.faculties_edit', compact('post'));
    }


    public function update(FacultiesRequest $facultiesRequest, $id)
    {
        $data = $facultiesRequest->validated();
        $post = Week::find($id);

        $post->update($data);
        return redirect()->route('week.index')->with('message', 'Post successfully edit.');
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:weeks,id']);
        $post = Week::find($id);

        $post->delete();
        return redirect()->route('week.index')->with('message', 'Post successfully delete.');
    }

}
