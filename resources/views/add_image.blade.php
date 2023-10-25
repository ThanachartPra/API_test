@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="/add-image" class="btn btn-primary">Add Image</a>
            <a href="/view-image" class="btn btn-primary">View Image</a>
            <a href="/bill-print" class="btn btn-primary">Bill Print</a>
        </div>
        <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="image">
                <label>
                    <h4>Add image</h4>
                </label>
                <input type="file" class="form-control" required name="image">
            </div>
            <div class="post_button">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
@endsection
