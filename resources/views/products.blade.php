@extends('layout.mainlayouts')
@section('content')
<div class="products">
        <input type="text" class="form-control" placeholder="{{ trans('main.search') }}">
        <div class="product-content">
                @php
                    $i=0;
                    
                @endphp
                <div class="row">
                @foreach($products as $product)
                                @php
                                    if($i==3){
                                            echo '</div>';
                                            echo '<div class="row">';
                                            $i=0;
                                    }
                                    $i=$i+1;
                                @endphp
                                <div class="col-md-4 product-parent">
                                        <p> {{ $product->name }}</p>
                                        @if($product->file_Name != '')
                                            <a href="{{ 'pdf/'.$product->file_Name }}"><i  class="fas fa-file-pdf"></i></a>
                                        @endif
                                </div>
                 @endforeach
                </div>
                 <div class="pagination-links row">
                        {{$products->links()}}
                 </div>
                 
                
        </div>
       
</div>
@endsection