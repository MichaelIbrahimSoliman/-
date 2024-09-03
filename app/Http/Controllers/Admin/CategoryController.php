<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    //

    public function index()
    {
        $categorysFromDB = Category::all();
        return view('admin.categorys.categorylist', ['categorys' => $categorysFromDB]);
    }
    public function create()
    {
        $categorys = Category::all();

        return view('admin.categorys.create', [
            'categorys' => $categorys
        ]);
    }

    public function store()
    {
        request()->validate([
            'categoryname' => ['required'],
            'description' => ['required'],
            'categorycode' => ['required'],
            'slug' => ['required'],
            'keywords' => ['required'],
            'status' => ['required'],
        ]);


        $data = request()->all();

        $categoryname = request()->categoryname;
        $description = request()->description;
        $categorycode = request()->categorycode;
        $slug = request()->slug;
        $keywords = request()->keywords;
        $status = request()->status;
         Category::create([
            'categoryname' => $categoryname,
            'description' => $description,
            'categorycode' => $categorycode,
            'slug' => $slug,
            'keywords' => request()->keywords,
            'status' => request()->status,
           ]);


        return to_route('admin.categorys.categoryslist');
    }

    public function show()
    {
       // $categorysFromDB = Category::all();
        $categorysFromDB = Category::findOrFail();
        return view('admin.categorys.show', ['categorys' => $categorysFromDB]);
    }

    public function edit()
    {
        $categorys = Category::findOrFail();

        return view('admin.categorys.edit');
    }
    public function update(Request $request,Category $category)
    {


        $validatedData =  request()->validate([
            'categoryname' => ['required'],
            'description' => ['required'],
            'categorycode' => ['required'],
            'slug' => ['required'],
            'keywords' => ['required'],
            'status' => ['required'],
        ]);
        //1- get the product data


       // $categorys->update($validatedData);




    //    return to_route('admin.products.show',$categorys )->with('success', 'Post updated successfully!');
    }

    public function destroy($productId)
    {
        $product = Product::find($productId);
        $product->delete();
        Product::where('id', $productId)->delete();
        return to_route('products.productlist');
    }
}
