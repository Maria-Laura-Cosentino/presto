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
          <h4 class="mb-4">{{__('ui.work_with_us')}}</h4>
          <ul class="nav flex-column">
            {{-- <li class="nav-item mb-2">Presto.it</li> --}}
            <li class="nav-item mb-2">{{__('ui.want_to_join_us')}}</li>
            <li class="nav-item mb-2 mb-5"><a class="btn btn-outline-light" href="{{route('register')}}">{{__('ui.register_and_click_here')}}</a></li>
            @if (Auth::user() && Auth::user()->is_revisor == false)
            <li class="nav-item mb-2">{{__('ui.already_have_an_account')}}</li>
            <li class="nav-item mb-2"><a href="{{route('be.revisor')}}" class="btn btn-outline-light">{{__('ui.become_an_editor')}}</a></li>
            @endif
            <li class="nav-item">
              <x-_locale lang="it"/>
              <x-_locale lang="en"/>
              <x-_locale lang="es"/>
            </li>       
          </ul> 
        </div>
    </footer>
</div>

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

  <footer style="background-color: #eee6d3;">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3 text-dark"><i class="fa-brands fa-artstation me-2"></i>Presto.it</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
            voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-3 text-dark">{{__('ui.work_with_us')}}</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1">
              <a href="#!" style="color: #4f4f4f;">FAQ</a>
            </li>
            <li class="mb-1">
              <a href="#!" style="color: #4f4f4f;">Classes</a>
            </li>
            <li class="mb-1">
              <a href="#!" style="color: #4f4f4f;">Pricing</a>
            </li>
            <li>
              <a href="#!" style="color: #4f4f4f;">Safety</a>
            </li>
          </ul>
        </div>

        {{-- lingue --}}
        <div class="col-lg-3 col-md-6 mb-4">
          <h4 class="mb-1 text-dark text-center">{{__('ui.languages')}}</h4>
          <ul class="nav-item">
            <x-_locale lang="it"/>
            <x-_locale lang="en"/>
            <x-_locale lang="es"/>
          </ul>       
        </div>
        {{-- lingue --}}
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Company, Inc
    </div>
    <!-- Copyright -->
  </footer>  
</div>
<!-- End of .container -->