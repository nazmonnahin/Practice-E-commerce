@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-12">

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Category
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-right">Add Category</a>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

</div>

@endsection