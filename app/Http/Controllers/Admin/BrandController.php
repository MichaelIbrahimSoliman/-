<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.brandlist', ['brands' => $brands]);
    }
    public function create()
    {
        $brands = Brand::all();

        return view('admin.brands.brandcreate', ['brands' => $brands]);
    }

    public function store()
    {
        request()->validate([
            'brand_name' => ['required'],
            'brand_description' => ['required'],
            'brand_slug' => ['required'],
            'meta_name' => ['required'],
            'meta_description' => ['required'],
            'meta_keywords'=> ['required'],

        ]);
        $data = request()->all();

        $brand_name = request()->brand_name;
        $brand_description = request()->brand_description;
        $brand_slug = request()->brand_slug;
        $meta_name = request()->meta_name;
        $meta_description = request()->meta_description;
        $meta_keywords = request()->meta_keywords;

        Brand::create([
            'brand_name' => $brand_name,
            'brand_description' => $brand_description,
            'brand_slug' => $brand_slug,
            'meta_name' => $meta_name,
            'meta_description' => $meta_description,
            'meta_keywords' => $meta_keywords,

           ]);
        return redirect()->route('admin.brand.brandlist');
    }
}
