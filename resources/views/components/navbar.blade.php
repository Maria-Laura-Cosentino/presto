<nav class="navbar navbar-expand-lg border-bottom py-3 nav-bg fixed-top">
  <div class="container-fluid align-content-center">
    <a class="navbar-brand" href="{{route('home')}}"><i class="fa-brands fa-artstation fs-3"></i><span class="fw-semibold ms-2">Presto.it</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-cust @if(Route::currentRouteName() == 'home') active-nav @endif" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

        {{-- annunci --}}
        <li class="nav-item">
          <a class="nav-link nav-cust @if(Route::currentRouteName() == 'indexShow') active-nav @endif" href="{{route('indexShow')}}">{{__('ui.announcements')}}</a>
        </li>

        {{-- drop categorie --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle nav-cust" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.categories')}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
            @foreach ($categories as $category)
            
        {{-- Se non ultimo metti divisore --}}            
            @if (!$loop->last)
            <li><a class="dropdown-item nav-cust" href="{{route('categoryShow', compact('category'))}}"> {{($category->name)}} </a></li>
            <li><hr class="dropdown-divider"></li>
            @else
            <li><a class="dropdown-item nav-cust" href="{{route('categoryShow', compact('category'))}}"> {{($category->name)}}</a></li>
            @endif
            
            @endforeach
          </ul>
        </li>

      {{-- crea annuncio --}}
        <li class="nav-item">
          <a class="nav-link nav-cust @if(Route::currentRouteName() == 'announcement.create') active-nav @endif" href="{{ route('announcement.create')}}">{{__('ui.new_announcement')}}</a>
        </li>        
      </ul>

      {{-- lingue --}}
      <ul class="navbar-nav mb-lg-0">
        <li class="m-auto lett-space">
          <a class="nav-link nav-cust fw-bold" href="#lingue" class="text-decoration-none text-reset me-5">{{__('ui.languages')}}<i class="icon-log fa-solid fa-language ms-2 me-3 fa-xl"></i></a>
        </li>

        {{-- Se l'utente loggato e revisore --}}
        @if (Auth::user() && Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="nav-link nav-cust @if(Route::currentRouteName() == 'revisor.index') active-nav @endif" aria-current="page" href="{{route('revisor.index')}}">{{__('ui.editor_area')}}
            <span class="ms-2 text-dark start-0 me-3 translate-end badge rounded-pill detail-cust">
              {{App\Models\Announcement::toBeRevisionedCount()}}
              <span class="visually-hidden">Unread messages</span>
            </span>  
          </a>
        </li>
        <li class="nav-item">
          <span class="nav-link nav-cust fw-semibold me-4">Admin: {{Auth::user()->name}}</span>
        </li>
        {{-- logout --}}
        <li class="">
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn detail-cust fw-bold text-white">Logout</button>
          </form>
          @endif
        </li>

        {{-- Se l'utente non è revisore --}}
        @if (Auth::user() && Auth::user()->is_revisor == false)

        <li class="nav-item">
          <span class="nav-link nav-cust fw-semibold me-4">User: {{Auth::user()->name}}</span>
        </li>
        <li class="">
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn detail-cust fw-bold text-white">Logout</button>
          </form>
        </li>      
        @endif

        {{-- login se l'utente non è loggato --}}
        @if(Auth::user() == null)
        <li class="m-auto">
          <a href="{{route('login')}}" class="nav-link nav-cust p-2">Login<i class="icon-log fa-regular fa-user fa-lg ms-3 pe-2"></i></a>
        </li>
        @endif
      </ul>      
    </div>
  </div>
</nav>