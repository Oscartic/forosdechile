<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function index() {
        $forums = Forum::latest()->paginate(10);
        //dd($forums->links()); paginar resultados
        return view('forums.index', compact('forums'));
    }
}
