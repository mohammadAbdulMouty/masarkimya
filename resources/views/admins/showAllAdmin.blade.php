@extends('layout.adminLayout')
@section('admin-content')
    <table id="dtable" class="table table-border">
        <thead>
            <th>الاسم</th>
            <th>البريد الالكتروني</th>
            <th>السماحيات</th>
            <th>تعديل</th>
            <th>حذف</th>
        </thead>
        <tbody>
            @foreach($user as $us)
                <th>{{ $us->name }}</th>
                <th>{{ $us->email }}</th>
                <th>{{ $us->validate == 1?'super admin':'admin' }}</th>
                <th><a class="btn btn-info">تعديل</a></th>
                @if($us->validate != 1)
                    <th><a class="btn btn-info">حذف</a></th>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection