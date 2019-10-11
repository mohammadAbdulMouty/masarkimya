@extends('layout.adminLayout')
@section('admin-content')
    <div class="editproductContainer">   
           
        <div class="row">
            <div class="col-md-12">
            <h2>تعديل منتج</h2>
            </div>
        </div>
           
            <form method="POST" action="{{ url('/admins/edit/product',$product->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-md-2">
                    اسم المنتح
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="productName" value="{{ $product->name }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    ملف pdf
                </div>
                <div class="col-md-6">
                        @php
                        if($product->file_Name != ''){
                            echo '<span class="findpdfspan">يتوفر ملف pdf سابق</span>';
                            echo '<a class="btn btn-danger btn-lg delete-pdf">حذف </a>';
                            echo '<a class="btn btn-info btn-lg edit-pdf">تعديل</a>';
                            echo '<input type="hidden" value="" class="check-delete" name="checkdelete">';
                            echo '<input type="file" class="editpdfinput" name="pdfinput">'; 
                        }else{
                            echo '<a class="btn btn-info btn-lg custom-edit-pdf">اضافة ملف pdf </a>';
                            echo '<input type="file" class="newpdfinput" name="pdfinput" >';
                        }
                        @endphp
                </div>
            </div>
            <input type="submit" class="btn btn-success btn-lg btn-save-edit" value="حفظ">
        </form>
    </div>
@endsection