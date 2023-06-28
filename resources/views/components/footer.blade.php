  <footer style="background-color: #dbdbdb; height: 350px;" >
    <div class="container-fluid p-4 mb-5 pb-5">
      <div class="row p-3 justify-content-around align-content-center">
        <div class="col-lg-3 col-md-12 mb-4">
          <a href="{{route('home')}}"class="text-decoration-none text-reset fs-4"><i class="fa-brands fa-artstation fs-3 mb-3"></i><span class="fw-semibold ms-2">Presto.it</span></a>
          <p class="lett-space text-dark">Developed by DreamTeamDevelopers
            <i class="fa-solid fa-bug-slash" style="color: #000000;"></i>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 text-center text-md-start text-xl-center">
          
        {{-- se l'utente è revisore visualizza messaggi--}}
          @if (Auth::user() && Auth::user()->is_revisor)
          <li class="translate-bottom badge mt-3 text-center text-md-center text-xl-center">
          <a href="{{route('revisor.index')}}" class="text-decoration-none text-reset">            
            <button class="btn detail-cust2 nav-cust mt-2 {{App\Models\Announcement::toBeRevisionedCount() == 0 ? 'text-white' : 'text-danger' }}">Annunci da revisionare: {{App\Models\Announcement::toBeRevisionedCount()}}</button>
            </a>  
          </li>
          @endif

        {{-- login ok allora diventa revisore --}}       
          @if (Auth::user() && Auth::user()->is_revisor == false)
            <h5 class="mb-3 text-dark">{{__('ui.work_with_us')}}</h5>
            <ul class="list-unstyled mb-0">
               <li class="mb-1" style="color: #606060;">{{__('ui.want_to_join_us')}}</li>
               <li class="m-3"><a href="{{route('be.revisor')}}" class="text-decoration-none text-custom" style="color:#606060;">{{__('ui.already_have_an_account')}}</a></li>
               <button class="btn detail-cust2 fw-bold nav-cust mb-2" ><a href="{{route('be.revisor')}}" class="text-decoration-none" style="color:#606060;">{{__('ui.become_an_editor')}}</a></button>
          @endif  

        {{-- login ko allora registrati --}}
          @if(Auth::user() == null)
            <h5 class="mt-2 text-dark">{{__('ui.work_with_us')}}</h5>
             <button class="btn detail-cust2 fw-bold nav-cust  mt-3">
               <a href="{{route('register')}}" class="text-decoration-none " style="color:#606060;">{{__('ui.register_and_click_here')}}</a>
             </button>  
          @endif                          
            </ul>
        </div>
        
        {{-- lingue --}}
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mt-2 text-dark text-center text-md-end">{{__('ui.languages')}}</h5>
          <div class="text-center d-flex p-0 justify-content-md-end justify-content-center" id="lingue">
            <x-_locale lang="it"/>
            <div class="" style="width: 15px"></div>
            <x-_locale lang="en"/>
            <div class="" style="width: 15px"></div>
            <x-_locale lang="es"/>
          </div>       
        </div>
      </div>
    </div>
    
    {{-- copyright --}}
    <div class="d-flex align-items-bottom" style="height: 100px">
      <p class="text-center p-4 m-0 lett-space w-100 " style="background-color: #2a2a2a; color:#cacaca;">
      © 2023 Presto.it
    </p>
    </div>
    
  </footer>  
  
