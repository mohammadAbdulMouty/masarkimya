@extends('layout.adminLayout')
@section('admin-content')
<div class="add-admin">
    <h2>اضف مدير</h2>
    <div class="row row-adduser">
        <div class="col-md-2">
            الاسم
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" name="name">
        </div>
    </div>
    <div class="row row-adduser">
            <div class="col-md-2">
                البريد الالكتروني
            </div>
            <div class="col-md-5">
                <input type="email" class="form-control" name="email">
            </div>
    </div>
    <div class="row row-adduser">
            <div class="col-md-2">
                كلمة المرور
            </div>
            <div class="col-md-5">
                <input type="password" class="form-control" name="password">
            </div>
    </div>
    <div class="row row-adduser">
            <div class="col-md-2">
                تأكيد كلمة المرور
            </div>
            <div class="col-md-5">
                <input type="password" class="form-control" name="confirmpass">
            </div>
    </div>
</div>
    
@endsection