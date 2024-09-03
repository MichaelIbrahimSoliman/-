<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    //

    public function index()
    {
        $SubcategorysFromDB = Subcategory::all();
        return view('admin.subcategory.subcategorylist', ['subcategorys' => $SubcategorysFromDB]);
    }
    public function create()
    {
        $subcategorys = Subcategory::all();

        return view('admin.subcategory.subcategorycreate', [
            'subcategorys' => $subcategorys
        ]);
    }

    public function store()
    {
        request()->validate([
            'subcategories_name' => ['required'],
            'subcategories_description' => ['required'],
            'subcategories_code' => ['required'],
             'subcategories_slug'=>['required'],
             'subcategories_keywords'=>['required'],
        ]);

        //1-  get the product data
        $data = request()->all();

        $subcategories_name = request()->subcategories_name;
        $subcategories_description = request()->subcategories_description;
        $subcategories_code= request()->subcategories_code;
        $subcategories_slug =request()->subcategories_slug;
        $subcategories_keywords =request()->subcategories_keywords;
        //2-  store the product data in database

        Subcategory::create([
            'subcategories_name' => $subcategories_name,
            'subcategories_description' => $subcategories_description,
            'subcategories_code' => $subcategories_code,
             'subcategories_slug'=>$subcategories_slug,
             'subcategories_keywords'=>$subcategories_keywords
           ]);

        //3- redirection to posts.index
        return to_route('admin.subcategorys.subcategoryslist');
    }


}
