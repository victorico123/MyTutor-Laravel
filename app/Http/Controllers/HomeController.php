<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $itemData = Subject::all();

        $data = [
            'items' => $itemData
        ];

        return view('home', $data);
    }

    
}
