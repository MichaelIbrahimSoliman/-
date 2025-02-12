@extends('admin.layouts.app')

@section('title')
    Dreams Pos admin template
@endsection

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Add Category</h4>
                <h6>Create new product Category</h6>
            </div>
        </div>

            <div class="card">
                <div class="card-body">
                <form method="POST" action="{{ route('admin.categorys.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name <span style="color:red"> * </span></label>
                                <input type="text" id="name" class="block mt-1 w-full" name="categoryname" :value="old('name')"
                                 autofocus autocomplete="name" placeholder="Enter Category Name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Code</label>
                                <input type="text" id="name" class="block mt-1 w-full" name="categorycode" :value="old('categorycode')"
                                 autofocus autocomplete="name" placeholder="Enter Category code" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Slug<span style="color:red"> * </span></label>
                                <input type="text" id="name" class="block mt-1 w-full" name="slug" :value="old('slug')"
                                 autofocus autocomplete="name" placeholder="Enter Slug" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status<span style="color:red"> * </span></label>
                                <select class="select" name="status">
                                    <option>Choose Status</option>
                                    <option {{ (old('status')==0) ?'selected':'' }}value="0">Active</option>
                                    <option {{ (old('status')==1) ?'selected':'' }}value="1">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" id="name" class="form-control"
                                name="description" :value="old('name')"   autofocus
                                  autocomplete="name" placeholder="Enter Description" /></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" id="name" class="block mt-1 w-full" name="keywords" :value="old('keywords')"
                                 autofocus autocomplete="name" placeholder="Enter Keywords" />
                            </div>
                        </div>

                        <div class="col-lg-12">

                            <button class="btn btn-submit me-2">Submit</button>
                            <a href="categorylist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>

    </div>
@endsection
