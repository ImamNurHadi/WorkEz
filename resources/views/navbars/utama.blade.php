<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/utama.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <title>WorkEz</title>
</head>
<body>
 
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black; height: 80px;">
            <a class="navbar-brand custom-red" href="{{route('rumah')}}" style="color: gold; margin-left:20%;">WorkEz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('menu')}}" style="color: gold">Menu<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('event')}}" style="color: gold">Event</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: gold">
                          Layanan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('feedback')}}">Feedback</a>
                          <a class="dropdown-item" href="#">Join Team</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Collaboration</a>
                        </div>
                      </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: gold">Search</button>
                </form>
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-secondary">
                        @guest
                            Guest
                        @else
                            {{ Auth::user()->name }}
                        @endguest
                    </button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        @guest
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest

                </div>
                
            </div>
        </div>
    </nav>
    
    <main>@yield('content') </main>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          var dropdownHoverList = document.querySelectorAll(".dropdown-hover");
          var dropdownMenuList = document.querySelectorAll(".dropdown-menu");
      
          dropdownHoverList.forEach(function(item, index) {
            var timeoutId;
            
            item.addEventListener("mouseenter", function() {
              clearTimeout(timeoutId);
              dropdownMenuList[index].style.display = "block";
            });
            
            item.addEventListener("mouseleave", function() {
              timeoutId = setTimeout(function() {
                dropdownMenuList[index].style.display = "none";
              }, 200); // Ubah angka 200 ke waktu yang diinginkan sebelum dropdown tertutup
            });
          });
        });
      </script>
</body>
</html>