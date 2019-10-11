@extends('layout.adminLayout')
@section('admin-content')
<div class="addproductContainer">   
    <div class="row">
        <div class="col-md-12">
           <h2>اضف منتج جديد</h2>
        </div>
    </div>
    
        <form method="POST" action="{{ url('/admins/add/product') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-md-2">
                اسم المنتح
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="productName">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                ملف pdf
            </div>
            <div class="col-md-6">
                <input type="file" class="form-control" name="pdfProduct">
            </div>
        </div>
        <input type="submit" class="btn btn-success" value="Save">
    </form>
</div>
@endsection