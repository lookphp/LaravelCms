<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorys;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function index()
    {
        $category = Categorys::all();
        return view('category', compact('category'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'author.name' => 'required',
            'author.description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
}
