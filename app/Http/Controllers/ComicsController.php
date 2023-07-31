<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class ComicsController extends Controller
{
    public function index(){
        $comics = Comic::all();

        
        return view('home', compact('comics'));
    }
}
