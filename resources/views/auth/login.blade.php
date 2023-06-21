<x-layout>
  <div class="container my-5">
      <div class="row my-5">
          {{-- <div class="col-12 col-md-6">
              <form method="post" action="{{route('login')}}">
                @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
              </form>
          </div> --}}
          
          <main class="form-signin w-100 m-auto">
            <form method="post" action="{{route('login')}}" class="p-4 p-md-5 border rounded-3 bg-body-tertiary my-5">
              @csrf
              <div class="d-flex justify-content-center mb-5">
                <p><i class="fa-brands fa-artstation fs-2 me-1"></i><span class="fs-2 fw-semibold"> Presto.it</span></p>
              </div>
              <div class="my-5">
                <h1 class="text-center mb-2">Accedi al tuo account</h1>
                <p class="text-center fs-5">Inserisci i tuoi dati</p>
              </div>
              <div class="form-floating mb-4">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Ricordami
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-dark mt-3 mb-2" type="submit">Login</button>
              {{-- <hr class="my-4"> --}}
              <small class="text-body-secondary">Facendo clic su Login, accetti i termini di utilizzo.</small>
              <p class="mt-5 fs-5">Prima volta su Presto.it?<a href="{{route('register')}}" class="fw-semibold text-decoration-none text-reset"> Registrati</a> </p>
            </form>
          </main>
      </div>
  </div>
</x-layout>