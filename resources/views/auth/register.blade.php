<x-layout>
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="post" action="{{route('register')}}">
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
                  </form>
            </div>
        </div>
    </div>
</x-layout>