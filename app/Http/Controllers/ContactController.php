<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

use App\Models\Faculties;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('owner.owner', compact('data', $data));
    }
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:users,id']);
        $post = User::find($id);
        $post->delete();
        return redirect()->route('owner')->with('message', 'Post successfully delete.');
    }




}
