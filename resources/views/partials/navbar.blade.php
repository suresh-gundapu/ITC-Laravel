  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex justify-content-between">

          <div class="logo">
              <h1><a href="index.html">Laravel- Parul</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="{{ url('')}}">Home</a></li>
                  <li><a class="nav-link scrollto" href="{{ url('about-us') }}">About</a></li>
                  <li><a class="nav-link scrollto" href="">Products</a></li>
                  <li><a class="nav-link scrollto" href="{{ url('contact-us') }}">Contact</a></li>
                  <li><a class="nav-link scrollto" href="{{ url('task-read') }}">Task</a></li>

                  @guest
                  <li><a class="nav-link scrollto " href="{{ url('/login') }}">Login</a></li>
                  <li><a class="nav-link scrollto" href="{{ url('/registration') }}">Registration</a></li>
                  @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                          <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
                  @endguest
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->