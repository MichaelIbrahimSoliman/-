<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //

    public function index()
    {
        $productsFromDB = Product::all();
        return view('admin.products.productlist', ['products' => $productsFromDB]);
    }
    public function create()
    {
        $products = Product::all();

        return view('admin.products.productcreate', ['products' => $products]);
    }

    public function store()
    {
        $categories = Category::all();
        $brand = Brand::all();

        request()->validate([
            'name' => ['required'],
            'description' => ['required'],
            'minimumqty' => ['required'],
            'quantity' => ['required'],
            'price' => ['required'],
            'slug'=> ['required'],
            'short_description' => ['required'],
            'old_price'=> ['required'],
        ]);

        //1-  get the product data
        $data = request()->all();

        $name = request()->name;
        $description = request()->description;
        $minimumqty = request()->minimumqty;
        $quantity = request()->quantity;
        $price = request()->price;
        $slug = request()->slug;
        $short_description = request()->short_description;
        $old_price = request()->old_price;

        //2-  store the product data in database

         Product::create([

            'name' => $name,
            'description' => $description,
            'minimumqty' => $minimumqty, //ignore,
            'quantity' => $quantity,
            'price' => $price,
            'old_price' => $old_price,
            'slug' => $slug,
            'short_description' => $short_description,
            'short_description' => $short_description,
           ]);



        //3- redirection to posts.index
        return to_route('admin.products.productlist' ,['brands' => $brand] );
    }

    public function show(Product $product)
    {
        $productsFromDB = Product::all();
        return view('admin.products.show', ['products' => $productsFromDB]);
    }

    public function edit(Product $product)
    {
        $product = Product::all();

        return view('admin.products.edit', ['product' => $product]);
    }
    public function update($productid , $request)
    {

        $productid->flash(['name', 'description', 'minimumqty','quantity', 'price']);
        //1- get the product data
        $productsFromDB = Product::all();
        $name = request()->name;
        $description = request()->description;
        $minimumqty = request()->minimumqty;
        $quantity = request()->quantity;
        $price = request()->price;
       //2- store the submitted data in database


        $singleProductFromDB = Product::find($productid);
        $singleProductFromDB->update([
            'name' => $name,
            'description' => $description,
            'minimumqty' => $minimumqty,
            'quantity' => $quantity,
            'price' => $price,
        ]);

        return to_route('admin.products.show', $productid);
    }

    public function destroy($productId)
    {
        //1- delete the post from database
        //select or find the post
        //delete the post from database
        $product = Product::find($productId);
        $product->delete();

        Product::where('id', $productId)->delete();

        //2- redirect to posts.index
        return to_route('products.productlist');
    }
}
