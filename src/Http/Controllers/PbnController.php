<?php

namespace Seekahost\Pbn\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Seekahost\Pbn\Models\Blog;

class PbnController extends Controller
{
    public function index()
    {
        $blogs = Blog::get()->all();
        return view('pbn::pbn.index', compact('blogs'));
    }

    public function create()
    {
        return view('pbn::pbn.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Blog::create($data);
        return back()->with('message', 'Pbn successfully created!!');

    }
}
