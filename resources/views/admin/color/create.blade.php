@extends('admin.layouts.app')

@section('title')
Dreams Pos admin template
@endsection
@section('content')


<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Color ADD</h4>
            <h6>Create new Color</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.color.store') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Color </label>
                            <input type="text" id="name" class="block mt-1 w-full" name="name"
                             :value="old('name')" autofocus autocomplete="name" placeholder="Enter  Name" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Color Code </label>
                            <input type="text" id="name" class="block mt-1 w-full" name="color_code"
                             :value="old('name')" autofocus autocomplete="name" placeholder="Enter  Code" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Status<span style="color:red"> * </span></label>
                            <select class="select" name="status">
                                <option>Choose Status</option>
                                <option {{ (old('status')==0) ?'selected':'' }}value='0'>Active</option>
                                <option {{ (old('status')==1) ?'selected':'' }}value='1'>Inactive</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" id="name" class="form-control"
                            name="description"
                            :value="old('name')" autofocus autocomplete="name" placeholder="Enter Description" />
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
                        <a href="{{ route('admin.color.list') }}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </form>


        </div>
    </div>

</div>



@endsection
