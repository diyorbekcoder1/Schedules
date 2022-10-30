<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultiesRequest;
use App\Models\Faculties;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{

    public function index()
    {
        $posts = Faculties::all();
        return view('Faculties.faculties', compact('posts', $posts));
    }


    public function create()
    {
        return view('Faculties.faculties_create');
    }


    public function store(FacultiesRequest $facultiesRequest)
    {
        $data = $facultiesRequest->validated();

        Faculties::create($data);
        return redirect()->route('faculties.index')->with('message', 'Post successfully Create.');
    }


    public function edit($id)
    {
        $post = Faculties::find($id);
        return view('Faculties.faculties_edit', compact('post'));
    }


    public function update(FacultiesRequest $facultiesRequest, $id)
    {
        $data = $facultiesRequest->validated();
        $post = Faculties::find($id);

        $post->update($data);
        return redirect()->route('faculties.index')->with('message', 'Post successfully edit.');
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:faculties,id']);
        $post = Faculties::find($id);

        $post->delete();
        return redirect()->route('faculties.index')->with('message', 'Post successfully delete.');
    }
}
