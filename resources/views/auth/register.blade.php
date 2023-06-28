<x-layout>
    <div class="container my-5">
        <div class="row g-0 my-5 flex-column-reverse flex-md-row">
            <div class="col-12 col-md-6">
                  <img src="/images/giovane-donna-che-posa-ricoperta-di-vernice-nera.jpg" class="img-fluid img-register" alt="...">
            </div>
            <div class="col-12 col-md-6 p-4 p-md-5 border border-start-0 bg-body-tertiary body-register">
              <main class="form-signin w-100 m-auto">
                <form method="post" action="{{route('register')}}" class="">
                  @csrf
                  <div class="d-flex justify-content-center mb-5">
                    <p><i class="fa-brands fa-artstation fs-2 me-1"></i><span class="fs-2 fw-semibold"> Presto.it</span></p>
                  </div>
                  <div class="my-5">
                    <h1 class="text-center mb-2">{{__('ui.create_your_account')}}</h1>
                    <p class="text-center fs-5">{{__('ui.enter_your_details')}}</p>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="{{__('ui.name')}}">
                    <label for="floatingName">{{__('ui.name')}}</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                    <label for="floatingEmail">{{__('ui.email')}}</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="{{__('ui.password')}}">
                    <label for="floatingPassword">{{__('ui.password')}}</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" name="password_confirmation" class="form-control" id="floatingConfermaPassword" placeholder="{{__('ui.confirm_password')}}">
                    <label for="floatingConfermaPassword">{{__('ui.confirm_password')}}</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-dark mt-3 mb-2" type="submit">{{__('ui.register')}}</button>
                  {{-- <hr class="my-4"> --}}
                  <small class="text-body-secondary">{{__('ui.by_clicking_on_register_accept_the_terms')}}.</small>
                  <p class="mt-5 fs-5">{{__('ui.already_have_an_account')}}<a href="{{route('login')}}" class="fw-semibold text-decoration-none text-reset"> {{__('ui.sign_in_now')}}</a> </p>
                </form>
              </main>
            </div>
            
        </div>
    </div>
</x-layout>