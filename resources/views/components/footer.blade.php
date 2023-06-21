<div class="container-fluid bg-dark text-white pb-2">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 mt-5 border-top">
      <div class="col mb-3 px-3">
        {{-- <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a> --}}
        {{-- <p class="text-body-secondary">© 2023</p> --}}
        <p class="text-white fs-3 "><i class="fa-brands fa-artstation"></i><span class="fw-semibold ms-2">Presto.it</span></p> 
      </div>
  
  
       
      <div class="col mb-3 px-3"> 
      
        <h4 class="mb-4">Lavora con noi</h4>
        <ul class="nav flex-column">
          {{-- <li class="nav-item mb-2">Presto.it</li> --}}
          <li class="nav-item mb-2">Vuoi lavorare con noi?</li>
          <li class="nav-item mb-2 mb-5"><a class="btn btn-outline-light" href="{{route('register')}}">Registrati e clicca qui</a></li>
          @if (Auth::user() && Auth::user()->is_revisor == false)
          <li class="nav-item mb-2">Hai già un account?</li>
          <li class="nav-item mb-2"><a href="{{route('be.revisor')}}" class="btn btn-outline-light">Diventa revisore</a></li>
          @endif
        </ul> 
      </div>
    </footer>
  </div>