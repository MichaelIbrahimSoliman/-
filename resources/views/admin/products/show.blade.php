@extends('admin.layouts.app')

@section('title') Dreams Pos admin template @endsection

@section('content')

            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Product Details</h4>
                        <h6>Full details of a product</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="bar-code-view">
                                    <img src="{{ asset('assets/img/barcode1.png')}}" alt="barcode">
                                    <a class="printimg">
                                        <img src="{{ asset('assets/img/icons/printer.svg')}}" alt="print">
                                    </a>
                                </div>
                                <div class="productdetails">
                                    @foreach($products as $product)
                                    <ul class="product-bar">
                                        <li>
                                            <h4>Product</h4>
                                            <h6> {{$product->name  }}</h6>
                                        </li>
                                        <li>
                                            <h4>Category</h4>
                                            <h6>Computers</h6>
                                        </li>
                                        <li>
                                            <h4>Sub Category</h4>
                                            <h6>None</h6>
                                        </li>
                                        <li>
                                            <h4>Brand</h4>
                                            <h6>None</h6>
                                        </li>
                                        <li>
                                            <h4>Unit</h4>
                                            <h6>Piece</h6>
                                        </li>
                                        <li>
                                            <h4>SKU</h4>
                                            <h6>PT0001</h6>
                                        </li>
                                        <li>
                                            <h4>Minimum Qty</h4>
                                            <h6> {{$product->minimumqty	  }}</h6>
                                        </li>
                                        <li>
                                            <h4>Quantity</h4>
                                            <h6> {{$product->quantity  }}</h6>
                                        </li>
                                        <li>
                                            <h4>Tax</h4>
                                            <h6>0.00 %</h6>
                                        </li>
                                        <li>
                                            <h4>Discount Type</h4>
                                            <h6>Percentage</h6>
                                        </li>
                                        <li>
                                            <h4>Price</h4>
                                            <h6>{{$product->price  }}</h6>
                                        </li>
                                        <li>
                                            <h4>Status</h4>
                                            <h6>Active</h6>
                                        </li>
                                        <li>
                                            <h4>Description</h4>
                                            <h6>{{$product->description  }}</h6>
                                        </li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="slider-product-details">
                                    <div class="owl-carousel owl-theme product-slide">
                                        <div class="slider-product">
                                            <img src="{{ asset('assets/img/product/product69.jpg')}}" alt="img">
                                            <h4>macbookpro.jpg</h4>
                                            <h6>581kb</h6>
                                        </div>
                                        <div class="slider-product">
                                            <img src="{{ asset('assets/img/product/product69.jpg')}}" alt="img">
                                            <h4>macbookpro.jpg</h4>
                                            <h6>581kb</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endsection
