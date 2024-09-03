@extends('admin.layouts.app')

@section('title') Dreams Pos admin template @endsection

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Add sub Category</h4>
            <h6>Create new product Category</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.subcategorys.store') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Parent Category</label>
                            <select class="select">
                                <option>Choose Category</option>
                                <option>Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" id="name" class="block mt-1 w-full" name="subcategories_name" :value="old('name')" autofocus autocomplete="name" placeholder="Enter Sub Category Name" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category Code</label>
                            <input type="text" id="name" class="block mt-1 w-full" name="subcategories_code" :value="old('name')" autofocus autocomplete="name" placeholder="Enter Category code" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Slug<span style="color:red"> * </span></label>
                            <input type="text" id="name" class="block mt-1 w-full" name="subcategories_slug" :value="old('slug')"
                             autofocus autocomplete="name" placeholder="Enter Slug" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="subcategories_description" class="form-control">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" id="name" class="block mt-1 w-full" name="subcategories_keywords" :value="old('keywords')"
                             autofocus autocomplete="name" placeholder="Enter Keywords" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-submit me-2">Submit</button>
                        <a href="subcategorylist.html" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
