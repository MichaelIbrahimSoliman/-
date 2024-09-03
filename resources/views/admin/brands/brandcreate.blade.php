@extends('admin.layouts.app')

@section('title')
Dreams Pos admin template
@endsection
@section('content')


<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Brand ADD</h4>
            <h6>Create new Brand</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.brands.brandstore') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Brand Name</label>
                            <input type="text" id="name" class="block mt-1 w-full" name="brand_name" :value="old('name')" autofocus autocomplete="name" placeholder="Enter  Name" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Brand slug</label>
                            <input type="text" id="name" class="block mt-1 w-full" name="brand_slug"
                            :value="old('name')" autofocus autocomplete="name" placeholder="Enter  Name" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Meta Name</label>
                            <input type="text" id="name" class="block mt-1 w-full"
                             name="meta_name" :value="old('name')"
                              autofocus autocomplete="name" placeholder="Enter  Meta Name" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Status<span style="color:red"> * </span></label>
                            <select class="select" name="">
                                <option>Choose Status</option>
                                <option {{ (old('status')==0) ?'selected':'' }}value='0'>Active</option>
                                <option {{ (old('status')==1) ?'selected':'' }}value='1'>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Meta Description</label>
                             <textarea type="text" id="name" class="form-control"
                             name="meta_description" :value="old('name')" autofocus autocomplete="name" placeholder="Enter Meta Description" />
                        </textarea>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Meta Keywords</label>
                             <textarea type="text" id="name" class="form-control"
                             name="meta_keywords" :value="old('name')" autofocus autocomplete="name"
                              placeholder="Enter Meta Keywords" />
                        </textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" id="name" class="form-control"
                            name="brand_description" :value="old('name')" autofocus autocomplete="name" placeholder="Enter Description" />
                        </textarea>
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
                    <div class="col-lg-12">
                        <button href="javascript:void(0);" class="btn btn-submit me-2" type="submit">
                            {{ __('Submit') }}
                        </button>
                        <a href="{{ route('admin.brand.brandlist') }}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </form>


        </div>
    </div>

</div>



@endsection
