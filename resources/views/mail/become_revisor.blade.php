{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        <h1>Un utente ha richiesto di lavorare con noi</h1>
        <h2>Ecco i suoi dati:</h2>
        <p>Nome: {{$request->name}}</p>
        <p>Cognome: {{$request->surname}}</p>
        <p>Email: {{$request->email}}</p>
        <p>Motivazione: {{$request->motivazione}}</p>
        <p>Se vuoi renderlo revisore clicca qui:</p>
        <a href="{{route('make.revisor', compact ('user'))}}">Rendi revisore</a>
    </div>
</body>
</html> --}}

<x-br_layout>

    <header class="container-fluid ">
        <div class="row flex-column justify-content-between headerCust">
            <div class="col-12 p-0">
                <div class="spacer1Head"></div>
            </div>
            <div class="col-12 ">
                <div class="row justify-content-center align-items-center">
                    <div class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-6">
                        <h1 class="text-center h1_home m-0">Presto.it</h1>
                        <h2 class="text-center h2_home m-0">Arte a portata di click</h2> 
                    </div>
                </div>
            </div>

            <div class="col-12 p-0">
                <div class=" fadeHead"></div>
            </div>
        </div> 
    </header>

    <section class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-11 col-md-10 col-xl-8 row justify-content-center justify-content-md-between align-items-center">
                <div class="col-12 col-md-5 py-2 px-0 sez1BigP">
                    <h1 class="f-title">Un utente ha richiesto di <span class="highlighted-text">lavorare</span> con noi</h1>
                </div>

                <div class=" col-12 col-md-2 p-2 py-0 px-1 d-flex d-md-block justify-content-center">
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                    <i class="fa-solid fa-circle dim_decoration5 p-1 text-center"></i>
                </div>

                <div class=" col-12 col-md-5 py-2 px-0 text-center text-md-start">
                    <div class="container-box">
                        <div class="box pt-20">
                            <div><i class="fa-solid fa-user-tie mb-3 fs-1"></i></div>
                            <div>
                                <h4 class="h4_mail fs-4 my-1">Ecco i suoi dati:</h4>
                                <ul class="nav flex-column mt-3">
                                    <li class="nav-item">
                                        <p class="mb-1 fs-6"><span class="label fw-semibold">Nome:</span> {{$request->name}}</p>
                                    </li>
                                    <li class="nav-item">
                                        <p class="mb-1 fs-6"><span class="label fw-semibold">Cognome:</span> {{$request->surname}}</p>
                                    </li>
                                    <li class="nav-item">
                                        <p class="mb-1 fs-6"><span class="label fw-semibold">Email:</span> {{$request->email}}</p>
                                    </li>
                                    <li class="nav-item">
                                        <p class="mb-1 fs-6"><span class="label fw-semibold">Motivazione:</span> {{$request->motivazione}}</p>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h2 class="f-title mb-3 text-center">Vuoi renderlo revisore?</h2>
                <div class="d-flex justify-content-center">
                    <a class="ms-2 btn-revisor rounded-2 py-2 px-4 text-decoration-none text-dark text-center" href="{{route('make.revisor', compact ('user'))}}">Rendi Revisore</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid footer-email">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
          
              <p class="col-md-4 d-flex align-items-center justify-content-center my-3 mx-auto link-body-emphasis text-decoration-none">
                <i class="fa-brands fa-artstation fs-3 logo-mail"></i><span class="fw-semibold ms-2 logo-mail">Presto.it</span>
              </p>
          
            </footer>
        </div>
    </div>

</x-br_layout>