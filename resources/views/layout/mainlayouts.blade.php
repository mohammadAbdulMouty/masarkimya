@php
    if(Session()->get('lang') == 'ar'){
        $dir = 'rtl';
    }
    else
    {
        $dir = 'ltr';
    }
@endphp
<html>
    <head>
        @include('layout.partials.header')
    </head>
    <body dir="{{ $dir }}">
        @php
            $segment = Request::segment(1);
            
        @endphp
        @include('layout.partials.nav')
        <div class="container-fluid">
            @yield('content')
        </div>
        
        @include('layout.partials.footer')
    </body>
</html>