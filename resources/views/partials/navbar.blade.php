
<style>
    .navbar #agu {
        border-radius: 25% 32% 12%;
        color: currentColor;
        width: fit-content;
        padding: 4px;
        border-left: 6px solid green;
        border-bottom: 6px solid green;
        

    }
    nav #collapsibleNavId{
        font-size: 18px;
        font-style: bold;


    }
</style>
     <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
         <div class="container" id="clovis">
             <a class="navbar-brand" id="agu" href="{{ url('/') }}">
                 {{-- {{ config('app.name', 'Laravel') }} --}}
                 Profile
             </a>
             <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                 aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <!-- Left Side Of Navbar -->
                 <ul class="navbar-nav me-auto">
                    <li class=" nav-item"><a href="{{ route('pages.index') }}" class=" nav-link">Home</a></li>
                    <li class=" nav-item"><a href="{{ route('pages.index') }}" class=" nav-link">Home</a></li>
                    <li class=" nav-item"><a href="{{ route('pages.index') }}" class=" nav-link">Home</a></li>
                    <li class=" nav-item"><a href="{{ route('pages.index') }}" class=" nav-link">Home</a></li>
                 </ul>

                 <!-- Right Side Of Navbar -->
                 <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->
                     @guest
                         @if (Route::has('login'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                             </li>
                         @endif

                         @if (Route::has('register'))
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                             </li>
                         @endif
                     @else
                         <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 {{ Auth::user()->name }}
                             </a>

                             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
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
             </div>
         </div>
     </nav>
