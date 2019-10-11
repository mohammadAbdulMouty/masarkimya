<nav class="navbar navbar-expand-lg navbar-dark nav-height" >
        <a class="navbar-brand" href="#"><img class="logoimage" src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ $segment == ''?'active':'' }}">
              <a class="nav-link" href="/">{{ trans('main.Home') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ $segment == 'products'?'active':'' }}">
              <a class="nav-link" href="{{ url('/products') }}">{{ trans('main.products') }}</a>
            </li>
            <li class="nav-item {{ $segment == 'contactus'?'active':'' }}">
              <a class="nav-link" href="{{ url('/contactus') }}">{{ trans('main.contactus') }}</a>
            </li>
          </ul>
          <span class="navbar-text">
            <a href="{{ url('/lang/en') }}">EN</a> |
            <a href="{{ url('/lang/tr') }}">TR</a> |
            <a href="{{ url('/lang/ar') }}">AR</a>
          </span>
        </div>
      </nav>