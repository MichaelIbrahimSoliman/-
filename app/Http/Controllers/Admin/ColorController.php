<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.color.list', ['colors' => $colors]);
    }
    public function create()
    {
        $colors = Color::all();
        return view('admin.color.create', ['colors' => $colors]);
    }

    public function store()
    {
        request()->validate([
            'name' => ['required'],
            'description' => ['required'],
            'color_code' => ['required'],
        ]);
        $data = request()->all();
        $name = request()->name;
        $description = request()->description;
        $color_code = request()->color_code;
        Color::create([
            'name' => $name,
            'description' => $description,
            'color_code' => $color_code,
        ]);
        return redirect()->route('admin.color.list');
    }
}
