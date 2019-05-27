<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="row">
      <div class="col-sm-4" style="background-color:yellow; padding: 10px 0px 10px 0px;">
          <div class="row justify-content-center">
              <i class="fa fa-facebook fa-2x fa-fw"></i>
              <h5>Jual</h5>
          </div>
      </div>
      <div class="col-sm-4" style="background-color:orange; padding: 10px 0px 10px 0px;">
          <div class="row justify-content-center">
              <i class="fa fa-facebook fa-2x fa-fw"></i>
              <h5>Cari</h5>
          </div>
      </div>
      <div class="col-sm-4" style="background-color:yellow; padding: 10px 0px 10px 0px;">
          <div class="row justify-content-center">
              <i class="fa fa-facebook fa-2x fa-fw"></i>
              <h5>Donasi</h5>
          </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div>
        <a class="navbar-brand" href="#">
          <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> -->
          <i class="fa fa-facebook fa-2x fa-fw"></i>
        Bootstrap
        </a>
      </div>
    <div>
               <div class="navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
    </div>
  </nav>
</div>