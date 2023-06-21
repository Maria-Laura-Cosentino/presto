<x-layout>
    <div class="container my-5">
        <div class="row g-0 my-5">
            <div class="col-12 col-md-6">
                {{-- <form method="post" action="{{route('register')}}">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="name">
                        </div>
                      </div>
                    <div class="row mb-3">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="password" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="password">
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password_confirmation" class="col-sm-2 col-form-label">Conferma password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form> --}}
                  <img src="/images/giovane-donna-che-posa-ricoperta-di-vernice-nera.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-12 col-md-6 p-4 p-md-5 border border-start-0 rounded-3 bg-body-tertiary">
              <main class="form-signin w-100 m-auto">
                <form method="post" action="{{route('register')}}" class="">
                  @csrf
                  <div class="d-flex justify-content-center mb-5">
                    <p><i class="fa-brands fa-artstation fs-2 me-1"></i><span class="fs-2 fw-semibold"> Presto.it</span></p>
                  </div>
                  <div class="my-5">
                    <h1 class="text-center mb-2">Crea il tuo account</h1>
                    <p class="text-center fs-5">Inserisci i tuoi dati</p>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="Nome">
                    <label for="floatingName">Nome</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                    <label for="floatingEmail">Email</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" name="password_confirmation" class="form-control" id="floatingConfermaPassword" placeholder="Conferma password">
                    <label for="floatingConfermaPassword">Conferma password</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-dark mt-3 mb-2" type="submit">Registrati</button>
                  {{-- <hr class="my-4"> --}}
                  <small class="text-body-secondary">Facendo clic su Registrati, accetti i termini di utilizzo.</small>
                  <p class="mt-5 fs-5">Hai già un account?<a href="{{route('login')}}" class="fw-semibold text-decoration-none text-reset"> Accedi ora</a> </p>
                </form>
              </main>
            </div>
            
        </div>
    </div>
</x-layout>