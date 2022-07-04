<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $itemData = Subject::where('tutor_id', $user->id)->get();
        
        $itemData2 = Subject::all();

        $data = [
            'items' => $itemData
        ];

        return view('home', $data);
    }

    
}
