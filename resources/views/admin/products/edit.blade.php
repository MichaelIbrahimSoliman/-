@extends('admin.layouts.app')

@section('title') Dreams Pos admin template @endsection

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Edit</h4>
            <h6>Update your product</h6>
        </div>
    </div>
    <form action="{{ route('admin.products.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" id="name" class="block mt-1 w-full" name="name" autofocus autocomplete="name"
                             />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="select">
                                <option>Computers</option>
                                <option>Mac</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Sub Category</label>
                            <select class="select">
                                <option>None</option>
                                <option>option1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Brand</label>
                            <select class="select">
                                <option>None</option>
                                <option>option1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Unit</label>
                            <select class="select">
                                <option>Piece</option>
                                <option>Kg</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>SKU</label>
                            <input type="text" value="PT0002">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Minimum Qty</label>

                            <input type="text" id="name" class="block mt-1 w-full" name="minimumqty"
                             autofocus autocomplete="name" placeholder="Enter Minimum Qty" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" id="name" class="form-control" name="quantity"
                            :value="old('name')" autofocus autocomplete="name" placeholder="Enter Quantity" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" id="name" class="form-control" name="description"autofocus autocomplete="name" placeholder="Enter Description" /></textarea>
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
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label> Status</label>
                            <select class="select">
                                <option>Active</option>
                                <option>Open</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Product Image</label>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="{{ asset('assets/img/icons/upload.svg')}}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product-list">
                            <ul class="row">
                                <li>
                                    <div class="productviews">
                                        <div class="productviewsimg">
                                            <img src="{{ asset('assets/img/icons/macbook.svg')}}" alt="img">
                                        </div>
                                        <div class="productviewscontent">
                                            <div class="productviewsname">
                                                <h2>macbookpro.jpg</h2>
                                                <h3>581kb</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="hideset">x</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button href="javascript:void(0);"  type="submit" class="btn btn-submit me-2">Update</button>
                        <a href="route('admin.products.productlist') }}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>


</div>
</div>

@endsection
