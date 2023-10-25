@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="/add-image" class="btn btn-primary">Add Image</a>
            <a href="/view-image" class="btn btn-primary">View Image</a>
            <a href="/bill-print" class="btn btn-primary">Bill Print</a>
        </div>
        <br />
        <div>
            <div class="md-1 form-label text-md-start">
                ราคาสินค้ารวม {{session('num1')}}
            </div>
            <div class="md-1 form-label text-md-start">
                ส่วนลดรวม {{ session('num2') }}
            </div>
            <div class="md-1 form-label text-md-start">
                ราคาสินค้ารวม {{ session('sum') }}
            </div>
            <div class="md-1 form-label text-md-start">
                ภาษีมูลค่าเพิ่ม 7 %
            </div>
            <div class="md-1 form-label text-md-start">
                ราคารวมสุทธิ {{session('result')}}
            </div>
        </div>
    </div>
@endsection
