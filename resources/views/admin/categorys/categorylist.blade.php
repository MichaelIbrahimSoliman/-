@extends('admin.layouts.app')

@section('title') Dreams Pos admin template @endsection

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Product Category list</h4>
            <h6>View/Search product Category</h6>
        </div>
        <div class="page-btn">
            <a href="{{ route('admin.categorys.categoryscreate') }}" class="btn btn-added">
                <img src="{{ asset('assets/img/icons/plus.svg') }}" class="me-1" alt="img">Add Category
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-path">
                        <a class="btn btn-filter" id="filter_search">
                            <img src="{{ asset('assets/img/icons/filter.svg') }}" alt="img">
                            <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img"></span>
                        </a>
                    </div>
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg') }}" alt="img"></a>
                    </div>
                </div>
                <div class="wordset">
                    <ul>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ asset('assets/img/icons/printer.svg') }}" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card" id="filter_inputs">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose Category</option>
                                    <option>Computers</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose Sub Category</option>
                                    <option>Fruits</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Choose Sub Brand</option>
                                    <option>Iphone</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                            <div class="form-group">
                                <a class="btn btn-filters ms-auto"><img src="{{ asset('assets/img/icons/search-whites.svg') }}" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table  datanew">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Category name</th>
                            <th>Category Code</th>
                            <th>Description</th>
                            <th>slug</th>
                            <th>keywords</th>
                            <th>status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorys as $category)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="{{ asset('assets/img/product/noimage.png') }}" alt="product">
                                </a>
                                {{$category->categoryname}}
                                <a href="javascript:void(0);"></a>
                            </td>
                            <td>{{$category->categorycode}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->keywords}}</td>
                            <td>{{($category->status == 1 )? 'Active' :'Inactive'}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>
                                <a class="me-3" href="{{ route('admin.products.show') }}">
                                    <img src="{{ asset('assets/img/icons/eye.svg')}}" alt="img">
                                </a>
                                <a class="me-3" href="{{ route('admin.categorys.edit' ,$category)}}">
                                    <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                </a>
                                <form style="display: inline;" method="POST" action="{{route('admin.categorys.destroy', $category->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="me-3 confirm-text">

                                        <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">

                                    </button>
                                </form>



                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endsection
