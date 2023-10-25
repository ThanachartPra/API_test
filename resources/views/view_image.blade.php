@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="/add-image" class="btn btn-primary">Add Image</a>
            <a href="/view-image" class="btn btn-primary">View Image</a>
            <a href="/bill-print" class="btn btn-primary">Bill Print</a>
        </div>
        <h3>View all image</h3>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image id</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imageData as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>
                            <img src="{{ url('public/Image/' . $data->image) }}" style="height: 100px; width: 150px;">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
