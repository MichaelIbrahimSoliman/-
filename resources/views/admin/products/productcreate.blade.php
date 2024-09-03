@extends('admin.layouts.app')

@section('title') Dreams Pos admin template @endsection

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Add</h4>
            <h6>Create new product</h6>
        </div>
    </div>
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" id="name" class="block mt-1 w-full"
                          name="name" :value="old('name')"   autofocus
                            autocomplete="name" placeholder="Enter Product Name" />

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="select"  name="categories_id ">
                                <option>Choose Category</option>
                                <option>Computers</option>
                             <option>Mobiles</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Sub Category</label>
                            <select class="select">
                                <option>Choose Sub Category</option>
                                <option>Fruits</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Brand</label>
                            <select class="select" name="brand_id">
                                <option>Choose Brand</option>
                                @foreach ($brands as $brand)
                                   <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                 @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Unit</label>
                            <select class="select">
                                <option>Choose Unit</option>
                                <option>Unit</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>SKU</label>
                            <input type="text" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Minimum Qty</label>
                            <input type="text" id="name" class="block mt-1 w-full"
                            name="minimumqty" :value="old('name')"   autofocus
                              autocomplete="name" placeholder="Enter Minimum Qty" />

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" id="name" class="form-control"
                            name="quantity" :value="old('name')"   autofocus
                              autocomplete="name" placeholder="Enter Quantity" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea type="text" id="short_description" class="form-control"
                            name="short_description" :value="old('slug')"   autofocus
                              autocomplete="name" placeholder="Enter Short Description" /></textarea>
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
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Tax</label>
                            <select class="select">
                                <option>Choose Tax</option>
                                <option>2%</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Discount Type</label>
                            <select class="select">
                                <option>Percentage</option>
                                <option>10%</option>
                                <option>20%</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" id="name" class="form-control"
                            name="price" :value="old('name')"   autofocus
                              autocomplete="name" placeholder="Enter Price" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Old Price</label>
                            <input type="text" id="old_price" class="form-control"
                            name="old_price" :value="old('name')"   autofocus
                              autocomplete="name" placeholder="Enter Price" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label> Status</label>
                            <select class="select">
                                <option>Closed</option>
                                <option>Open</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>slug</label>
                            <input type="text" id="name" class="form-control"
                            name="slug" :value="old('slug')"   autofocus
                              autocomplete="name" placeholder="Enter slug" />
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Product Image</label>
                            <div class="image-upload">
                                <input type="file" />
                                <div class="image-uploads">
                                    <img src="{{ asset('assets/img/icons/upload.svg')}}" alt="img" />
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <button href="javascript:void(0);" class="btn btn-submit me-2" type="submit">
                            {{ __('Submit') }}
                        </button>
                        <a href=" route('admin.products.productlist') }}"class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>


</div>
@endsection
