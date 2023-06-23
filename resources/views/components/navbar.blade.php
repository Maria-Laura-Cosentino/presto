<nav class="navbar navbar-expand-lg border-bottom py-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}"><i class="fa-brands fa-artstation fs-3 "></i><span class="fw-semibold ms-2">Presto.it</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('indexShow')}}">{{__('ui.announcement')}}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('ui.categories')}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
              @foreach ($categories as $category) 
              {{-- Se non ultimo metti divisore --}}
              @if (!$loop->last)
              <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}"> {{($category->name)}} </a></li>
              <li><hr class="dropdown-divider"></li>
              @else
              <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}"> {{($category->name)}} </a></li>
              @endif

              @endforeach
            </ul>
          </li>
          @if(Auth::user() == null)
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          {{-- Esempio traduziine multiligua Campo di testo // cartella per fare traduzioni lang/ui   // da fare  mano per ogni lingua --}}
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">{{__('ui.register')}}</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('announcement.create')}}">{{__('ui.new_announcement')}}</a>
          </li>
          @if (Auth::user()->is_revisor)
            <li class="nav-item">
              <a class="nav-link btn btn-outline-success btn-sm position-relative" aria-current="page" href="{{route('revisor.index')}}">Zona revisore
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  {{App\Models\Announcement::toBeRevisionedCount()}}
                  <span class="visually-hidden">Unread messages</span>
                </span>  
              </a>
            </li>
          @endif 
          <li class="nav-item">
            <a class="nav-link" href="#">Admin {{Auth::user()->name}} </a>
          </li>
        
          <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
              @csrf
            <button class="btn btn-danger text-white">Logout</button>
            </form>
          </li>
          @endif

          <li class="nav-item">
            <x-_locale lang="it"/>
            <x-_locale lang="en"/>
            <x-_locale lang="es"/>
          </li>
         
        
        </ul>
        <form class="d-flex" role="search" action="{{route('announcements.search')}}" method="get">
          <input name="searched" class="form-control me-2" type="search" placeholder="{{__('ui.search')}}" aria-label="Search">
          <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
    </div>
  </nav>