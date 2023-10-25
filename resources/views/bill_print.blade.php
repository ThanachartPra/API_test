@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="/add-image" class="btn btn-primary">Add Image</a>
            <a href="/view-image" class="btn btn-primary">View Image</a>
            <a href="/bill-print" class="btn btn-primary">Bill Print</a>
        </div>
        <br />
        <form method="post" action="{{ route('bills.cal') }}" enctype="multipart/form-data">
            @csrf
            <div class="md-1 form-label text-md-start">
                ราคาสินค้ารวม
                <input type="number" name="num1" id="num1" required="">
            </div>
            <div class="md-1 form-label text-md-start">
                ส่วนลดรวม
                <input type="number" name="num2" id="num2" required="">
            </div>
            <div class="md-1 form-label text-md-start">
                ราคาสินค้ารวม
            </div>
            <div class="md-1 form-label text-md-start">
                ภาษีมูลค่าเพิ่ม 7 %
            </div>
            <div class="md-1 form-label text-md-start">
                ราคารวมสุทธิ
            </div>
            <div class="post_button">
                <button type="submit" class="btn btn-primary">คำนวณ</button>
            </div>
        </form>
    </div>
@endsection
