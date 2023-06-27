  <footer style="background-color: #cacaca;">
    <div class="container-fluid p-4">
      <div class="row p-3 justify-content-around align-content-center">
        <div class="col-lg-3 col-md-12 mb-4">
          <a href="{{route('home')}}"class="text-decoration-none text-reset fs-4"><i class="fa-brands fa-artstation fs-3 mb-3"></i><span class="fw-semibold ms-2">Presto.it</span></a>
          <p>Developed by DreamTeamDevelopers
            <i class="fa-solid fa-bug-slash" style="color: #000000;"></i>
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 text-end text-md-start text-xl-center">
          
          {{-- lavora con noi --}}
          <h5 class="mt-2 text-dark">{{__('ui.work_with_us')}}</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1" style="color: #4a4747;">{{__('ui.want_to_join_us')}}</li>
            
            {{-- registrati --}}
            @if(Auth::user() == null)
            <li class="mb-1">
              <a href="{{route('register')}}" class="text-decoration-none text-reset" style="color:#cacaca;">{{__('ui.register_and_click_here')}}</a>
            </li>
            @else
             
            @endif 
          </ul>
        </div>
        
        {{-- lingue --}}
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mt-2 text-dark text-end">{{__('ui.languages')}}</h5>
          <ul class="nav-item text-end" id="lingue">
            <x-_locale lang="it"/>
            <x-_locale lang="en"/>
            <x-_locale lang="es"/>
          </ul>       
        </div>
      </div>
    </div>
    
    {{-- copyright --}}
    <div class="text-center p-3" style="background-color: rgb(42, 42, 42); color:#cacaca;">
      © 2023 Company, Inc
    </div>
  </footer>  
  
  