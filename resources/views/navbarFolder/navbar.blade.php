<nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed"
                      data-toggle="collapse" data-target="#miniproject-navbar-collapse-1"
                       aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                      </button>
                      <a class="navbar-brand" href="/">
                        <div class="logo-area">
                          <h3>myfastfingers.com</h3>
                        </div>
                      </a>
                    </div>
                    <div class="collapse navbar-collapse" id="miniproject-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @guest
                            <li>
                                <a class="nav-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li>
                                <a class="nav-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="dropdown">

                                <a class="nav-item" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span style="padding:0;" class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li>
                                    <a class="nav-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div> <!--navbar-collapse -->
              </div><!-- /.container-fluid -->
      </nav>
