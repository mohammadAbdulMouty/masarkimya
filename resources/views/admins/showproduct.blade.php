@extends('layout.adminLayout')
@section('admin-content')
    <table id="dtable" class="table table-border">
        <thead>
            <th>اسم المنتج</th>
            <th>ملف pdf</th>
            <th>تعديل</th>
            <th>حذف</th>
        </thead>
        <tbody>
            @foreach($products as $pro)
            <tr>
                    <td>{{ $pro->name }}</td>
                    <td>
                        @php
                           if($pro->file_Name != ''){
                               echo "<a href='/pdf/".$pro->file_Name."' target='_blank' class='btn btn-success'>موجود</a>";
                           }else{
                                echo "<span class='badge badge-warning' style='background-color:#d9534f'>غير موجود</span>";
                           }
                        @endphp
                    </td>
                    <td><a class="btn btn-info" href="{{ url('admins/edit/product',$pro->id) }} ">تعديل</a></td>
                    <td><a class="btn btn-danger btn-delete-product" href="{{ url('admins/delete/product',$pro->id) }} ">حذف</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection