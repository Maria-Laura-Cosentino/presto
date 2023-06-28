<nav class="navbar navbar-expand-lg border-bottom py-3 nav-bg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><i class="fa-brands fa-artstation fs-3"></i><span class="fw-semibold ms-2">Presto.it</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-cust" aria-current="page" href="{{route('home')}}">Home</a>
        </li>

        {{-- annunci --}}
        <li class="nav-item">
          <a class="nav-link nav-cust" href="{{route('indexShow')}}">{{__('ui.announcements')}}</a>
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
          <a class="nav-link nav-cust" href="{{ route('announcement.create')}}">{{__('ui.new_announcement')}}</a>
        </li>        
      </ul>

      {{-- lingue --}}
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="m-auto lett-space">
          <a class="nav-link nav-cust fw-bold" href="#lingue" class="text-decoration-none text-reset me-5">{{__('ui.languages')}}<i class="fa-solid fa-language ms-2 me-4 fa-xl" style="color: #2a2a2a;"></i></a>
        </li>

        {{-- Se l'utente è già loggato --}}
        @if (Auth::user() && Auth::user()->is_revisor)
        <li class="nav-item">
          <span class="nav-link nav-cust fw-semibold">Admin: {{Auth::user()->name}}</span>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-cust" aria-current="page" href="{{route('revisor.index')}}">{{__('ui.editor_area')}}
            <span class="ms-2 mb-2 text-dark start-0 me-5 translate-end badge rounded-pill detail-cust">
              {{App\Models\Announcement::toBeRevisionedCount()}}
              <span class="visually-hidden">Unread messages</span>
            </span>  
          </a>
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

        {{-- se l'utente non è loggato --}}
        @if(Auth::user() == null)
        <li class="m-auto">
          <a class="nav-link nav-cust" href="{{route('login')}}" class="text-decoration-none text-reset p-2">Login<i class="fa-regular fa-user fa-lg ms-3" style="color: #2a2a2a;"></i><span class="p-2"></span></a>
        </li>
        @endif
      </ul>
        
           
        
        
        
        
   
      
      {{-- search bar --}}
      {{-- <form class="d-flex" role="search" action="{{route('announcements.search')}}" method="get">
        <input name="searched" class="form-control me-2" type="search" placeholder="{{__('ui.search')}}" aria-label="Search">
        <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form> --}}
      
    </div>
  </div>
</nav>