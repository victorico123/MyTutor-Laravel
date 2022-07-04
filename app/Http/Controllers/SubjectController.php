<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    public function showAddSubject()
    {
        return view('add_subject');
    }

    public function addSubject(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'title' => ['required', 'min:5', 'max:50'],
            'description' => ['required', 'min:10'],
            'price' => ['required', 'numeric', 'min:0'],
            'hour' => ['required'],
        ]);

        $rules->validate();


        $obj = new Subject;

        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->price = $request->price;
        $obj->learning_hour = $request->hour;

        $obj->save();

        return redirect('home')->with('success','Item created successfully!');
    }
}
