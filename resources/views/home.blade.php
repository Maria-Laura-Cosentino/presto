<x-layout>





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

                        <form class="d-flex px-2 px-md-4 px-xl-5 mt-3 mt-md-5" role="search" action="{{route('announcements.search')}}" method="get">
                            <input name="searched" class="form-control me-2" type="search" type="search" placeholder="{{__('ui.search')}}" aria-label="Search">
                            <button class="btn btn_Search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 p-0">
                <div class=" fadeHead"></div>
            </div>
        </div>
            

        
    </header>

    {{-- Messaggi di allert da Session --}}
    <div class="container">
        <div class="row my-3">
            @if (session()->has('access.denied'))
            <div class="alert alert-danger">
             {{session('access.denied')}}
            </div>
            @endif

            @if (session()->has('message'))
            <div class="alert alert-success">
             {{session('message')}}
            </div>
            @endif
        
          
        </div>
    </div>


    <!-- sez 1 / testi-->
    <section class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-11 col-md-10 col-xl-8 row justify-content-center justify-content-md-between align-items-center">
                <div class="col-12 col-md-4 p-2 sez1BigP">
                    <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                </div>

                <div class=" col-12 col-md-4 p-2 text-center text-md-start black85">
                    <p class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio sit animi dolor, ducimus aspernatur quas nobis corrupti laboriosam fuga at accusamus beatae consectetur dolore, dicta odit.</p>
                </div>

            </div>
        </div>

    </section>


    <!-- sez2 / ultimi annunci-->
    <section  class="container-fluid pt-4 pt-md-5 pb-4">
        <div class="row justify-content-center pt-0 pt-md-5">
            <div class="col-12">
                <h2 class="text-center h2Sez2 black85 f-title fs-2">{{__('ui.latest_announcements')}}</h2>
            </div>
            <div class="col-11 row justify-content-between">
                @foreach ($announcements as $announcement)                    
                <!-- Card -->
                <div class="col-12 col-sm-6 col-md-5 col-xl-4 d-flex justify-content-center pt-4 pt-xl-5 px-5">
                    <div class="maxWCardHome p-4">
                        <img class="rounded-circle w-100 shadowCard" src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(800, 800) : "https://picsum.photos/800/800"}}" alt="{{$announcement->title}}">
                        <div class="pt-2 pt-lg-4 pb-2 w-100 d-lg-flex justify-content-between">
                           <h3 class="text-start fs-4">{{$announcement->title}}</h3> 
                           <h3 class=" fs-4">{{$announcement->price}} €</h3>
                        </div>

                        <div class=" w-100 d-lg-flex justify-content-between"> 
                            <div class="badge bg-dark bg-gradient rounded-pill mb-3 p-2">{{__('ui.category')}}: {{$announcement->category->name}} </div>
                            <a href="{{route('detailShow',compact('announcement'))}}" class="text-reset text-decoration-none fw-semibold fs-5">{{__('ui.detail')}} <i class="fa-solid fa-circle-arrow-right"></i></a>
                            
                            {{-- <p class="list-group-item">{{__('ui.published_on')}}: {{$announcement->created_at->format('d/m/Y')}}</p> --}}
                        </div>
                        {{-- <p class="PcardAnnHome">
                            {{substr($announcement->body, 0, 100)}}
                        </p> --}}

                    </div>
                </div>
                @endforeach
                

            </div>
        </div>
    </section>

    

    <!-- sez3 / Benefict -->
    <!-- <section class="container-fluid py-3">
        <div class="row  justify-content-center">
            <h2 class="col-12 text-center h2Sez2 black85 f-title fs-2">Titolo Sez</h2>
        </div>
        <div class="row justify-content-center align-items-center bg">
            <div class="col-11 col-sm-6 col-xl-4">
                <div class="rounded-circle bg_yellow contImgSez3"><i class="fa-solid fa-truck-fast imgSez3"></i></div>
                <h3>Spedizioni veloci</h3>
            </div>
        </div>
    </section> -->

     <!-- sez5 / Categorie -->
     <section id="h1_header" class="container-fluid py-3"></section>

    <!-- sez4 / Our Artists-->
    <section class="container-fluid py-3">
        <div class="row justify-content-center">
            <div class="col-11 row justify-content-center justify-content-lg-between">

                <div class="col-12 col-sm-10 col-lg-6 col-xl-6 px-0 shadowCard">
                    <div class="w-100 h-100 rounded-2 bigImgSez4 d-flex flex-column align-items-center justify-content-center">
                        <h2 class=" fw-semibold h2Sez4">Frase motivazione <br> da pensare</h2>
                    </div>
                    
                </div>

                <div class="col-12 col-sm-10 col-lg-6 col-xl-6 row flex-row flex-lg-column justify-content-center justify-content-md-between align-items-center pt-3 pt-lg-0  px-0 ps-xl-4">

                    <div class="col-9 col-sm-6 artistImg rounded-2 ps-0 pe-0 pe-sm-2 px-lg-2 pb-2 pb-lg-0 pb-lg-2">
                        <div class="  rounded-2 h-100  d-flex align-items-end shadowCard" style="background: url(https://picsum.photos/600/600); background-size: cover; ">

                            <div class="w-100 d-flex bg-white rounded-bottom-2 p-3 align-items-center justify-content-between">
                                <div>
                                <h3 class="m-0 fs-6">Nome Artista</h3> 
                                <p class="small black85 m-0 d-none d-xl-block"> Lorem ipsum dolor sit amet.</p>
                                </div>
                                <a class="ms-2 btnCardSez4 rounded-2 py-2 px-4 text-decoration-none text-white text-center" href="">Scopri</a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-9 col-sm-6 artistImg  rounded-2 ps-0 ps-sm-2 pe-0 px-lg-2 pb-2 pb-lg-0 pt-lg-2 ">
                        <div class="  rounded-2 h-100  d-flex align-items-end shadowCard" style="background: url(https://picsum.photos/600/600); background-size: cover; ">

                            <div class="w-100 d-flex bg-white rounded-bottom-2 p-3 align-items-center justify-content-between">
                                <div>
                                <h3 class="m-0 fs-6">Nome Artista</h3> 
                                <p class="small black85 m-0 d-none d-xl-block"> Lorem ipsum dolor sit amet.</p>
                                </div>
                                <a class="ms-2 btnCardSez4 rounded-2 py-2 px-4 text-decoration-none text-white text-center" href="">Scopri</a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-9 col-sm-6 artistImg  rounded-2 ps-0 pe-0 pe-sm-2 px-lg-2 pt-2 pt-lg-0 pb-lg-2">
                        <div class="  rounded-2 h-100  d-flex align-items-end shadowCard" style="background: url(https://picsum.photos/600/600); background-size: cover; ">

                            <div class="w-100 d-flex bg-white rounded-bottom-2 p-3 align-items-center justify-content-between">
                                <div>
                                <h3 class="m-0 fs-6">Nome Artista</h3> 
                                <p class="small black85 m-0 d-none d-xl-block"> Lorem ipsum dolor sit amet.</p>
                                </div>
                                <a class="ms-2 btnCardSez4 rounded-2 py-2 px-4 text-decoration-none text-white text-center" href="">Scopri</a>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-9 col-sm-6 artistImg  rounded-2 ps-0 ps-sm-2 pe-0 px-lg-2 pt-2 pt-lg-0 pt-lg-2 ">
                        <div class="  rounded-2 h-100  d-flex align-items-end shadowCard" style="background: url(https://picsum.photos/600/600); background-size: cover; ">

                            <div class="w-100 d-flex bg-white rounded-bottom-2 p-3 align-items-center justify-content-between">
                                <div>
                                <h3 class="m-0 fs-6">Nome Artista</h3> 
                                <p class="small black85 m-0 d-none d-xl-block"> Lorem ipsum dolor sit amet.</p>
                                </div>
                                <a class="ms-2 btnCardSez4 rounded-2 py-2 px-4 text-decoration-none text-white text-center" href="">Scopri</a>
                                
                            </div>
                        </div>
                    </div>
                </div>  

            </div>
        </div>

        <div class="row justify-content-center py-4 py-sm-5">
            <div class="col-11 col-md-5 col-lg-3 py-0 py-md-3">
                <a class="shadowBtn py-2 px-3 bg-warning w-100 text-decoration-none text-white rounded-2 text-center d-block fw-semibold f-text charSpace1 fs-4" href="">{{__('ui.find_out_more')}} <i class="ps-2 fa-solid fa-right-to-bracket"></i></a>
            </div>
        </div>
    </section>

    <!-- sez6 / Coupon -->
    <section class="container-fluid py-3"></section>






   
    {{-- genratore card da togliere --}}
    {{-- <div class="container my-5">
        <div class="row my-3">
            @foreach ($announcements as $announcement)                    
            <x-card
            :announcement="$announcement"></x-card>
            @endforeach
        </div>
    </div> --}}
</x-layout>