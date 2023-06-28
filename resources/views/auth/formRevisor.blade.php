<x-layout>
    <div class="container my-5">
        <div class="row my-5">
            @if (session()->has('message'))
            <div class="alert alert-success">
             {{session('message')}}
            </div>
            @endif
        </div>
        <div class="row my-5">
            <main class="form-signin w-100 m-auto">
              <form method="post" action="{{route('become.revisor')}}" class="p-4 p-md-5 border rounded-3 bg-body-tertiary my-5">
                @csrf
                <div class="d-flex justify-content-center mb-5">
                  <p><i class="fa-brands fa-artstation fs-2 me-1"></i><span class="fs-2 fw-semibold"> Presto.it</span></p>
                </div>
                <div class="my-5">
                  <h1 class="text-center mb-2">Diventa revisore</h1>
                  <p class="text-center fs-5">Inserisci i tuoi dati</p>
                </div>
                <div class="form-floating mb-4">
                  <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Nome" value="{{Auth::user()->name}} ">
                  <label for="floatingInput">Nome</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="surname" class="form-control" id="floatingInput" placeholder="Cognome">
                    <label for="floatingInput">Cognome</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="email" class="form-control" id="floatingEmail" placeholder="Email" value="{{Auth::user()->email}} ">
                    <label for="floatingEmail">Email</label>
                </div>
                  <div class="mb-4">
                    <textarea name="motivazione" class="form-control" placeholder="Perché vuoi diventare un revisore?" id="floatingTextarea" maxlength="130" rows="4"></textarea>
                    {{-- <label for="floatingTextarea">Comments</label> --}}
                  </div>
                <button class="w-100 btn btn-lg btn-dark mt-3 mb-2" type="submit">Invia la tua richiesta</button>
                {{-- <hr class="my-4"> --}}
                <small class="text-body-secondary">Facendo clic su Invia, accetti i termini di utilizzo.</small>
              </form>
            </main>
        </div>
    </div>
  </x-layout>