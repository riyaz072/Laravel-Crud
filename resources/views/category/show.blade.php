@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Category
                            <a href=" {{ url('category') }} " class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                         <div class="mb-3">
                                <label><b>Name:</b></label>
                                <p>{{ $category->name }}</p>

                            <div class="mb-3">
                                <label><b>Description:</b></label>
                                <p>{!! $category->description !!}</p>

                            <div class="mb-3">
                                <label><b>Status:</b></label>
                                <p>{{ $category->status == 1 ? 'checked':'' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
