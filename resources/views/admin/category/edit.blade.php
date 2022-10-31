@extends('layouts.admin')

@section('content')

<div>
    @if (session('message'))
    <h2>{{ session('message') }}</h2>
    @endif
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Category
                    <a href="{{ url('admin/category') }}" class="btn btn-warning btn-sm float-right">Back</a>
                </h3>
            </div>


        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card-box">
            <form action="{{ url('admin/category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $category->name }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" id="exampleInputPassword1" placeholder="Enter Slug" value="{{ $category->slug }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $category->description }}</textarea>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Previous Image</label>
                    <br>
                    <img style="width: 100px" src="{{ asset('uploads/category/'.$category->image) }}" alt="">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file"  name="image" class="form-control">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Status</label> 
                    <br>
                    <input type="checkbox" name="status" value="{{ $category->status == '1' ? 'checked': ''}}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{ $category->meta_title }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Meta Keyword</label>
                    <textarea name="meta_keyword" rows="3" class="form-control"> {{ $category->meta_keyword }} </textarea>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{ $category->meta_description }}</textarea>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
            </form>
        </div>
    </div>
</div>
<!-- end row -->

</div>

@endsection