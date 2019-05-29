@extends('templates.plantilla')

@section('title')
    <title>Francesc Retamal</title>
@endsection

@section('css')
    <link rel="stylesheet" media="screen" href="{{ asset('libs/particles/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('cuerpo')

    <section id="home" class="">
        <div id="particles-js" class="">
            <div class="container m-auto" id="contenedorTitulo">
                <div class="row">
                    <h1 class="titulo col-12 m-auto"><span class="colorNombre">{{ __('index.nom') }}</span>,<br>{{ __('index.nom_continuacio') }}.</h1>
                </div>
                <div class="row mt-4">
                    <a class="btn btnMore m-auto" href="#sobreMi" aria-label="{{ __('index.veu_mes') }}">{{ __('index.veu_mes') }} &nbsp;&nbsp;&nbsp;<i id="arrow" class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" id="barraSuperior">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav enlaces">
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="#home" aria-label="{{ __('navbar.inici') }}">{{ __('navbar.inici') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="#sobreMi" aria-label="{{ __('navbar.sobre_mi') }}">{{ __('navbar.sobre_mi') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-3" href="#portfolio" aria-label="{{ __('navbar.portfolio') }}">{{ __('navbar.portfolio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer" aria-label="{{ __('navbar.contacta') }}">{{ __('navbar.contacta') }}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    {{-- Selección de idioma --}}
                    <li class="dropdown nav-item">
                        <a href="" class="dropdown-toggle nav-link text-black font-weight-bold" data-toggle="dropdown" aria-label="{{ Config::get('app.locale') }}">
                            <span class="align-middle text-uppercase text-black font-weight-bold">{{ Config::get('app.locale') }}</span>
                            <i class="fas fa-globe"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-with-icons">
                            <a id="lang_ca" class="dropdown-item text-black" href="{{ url('/language', ['locale' => 'ca']) }}"><img class="mr-2" src="{{ asset('assets/img/icon_catalonia.png') }}" alt="">Català</a>
                            <a id="lang_es" class="dropdown-item text-black" href="{{ url('/language', ['locale' => 'es']) }}"><img class="mr-2" src="{{ asset('assets/img/icon_spain.png') }}" alt="">Español</a>
                            <a id="lang_en" class="dropdown-item text-black" href="{{ url('/language', ['locale' => 'en']) }}"><img class="mr-2" src="{{ asset('assets/img/eng_icon.png') }}" alt="">English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="container">
        <section id="sobreMi">
            <div class="row col-12 mb-3 tituloSeccion" id="tituloSobreMi">
                <h1 class="m-auto font-weight-bold">{{ __('index.titol_sobreMi') }}</h1>
            </div>

            <div class="row col-12 mb-3">
                <div class="separation-bar"></div>
            </div>

            <div class="row">
                <div class="card col-xl-6 col-md-6 col-sm-12 border-0 bg-transparent" id="cardQuiSoc">
                    <svg width="100%" height="350px" viewBox="0 0 100 100" class="mx-auto mb-4">
                        <defs>
                            <clipPath id="shape">
                            <path d="M20,0 L80,0 L100,60 L50,100 L0,60z"></path>
                            </clipPath>
                        </defs>
                        <image clip-path="url(#shape)" xlink:href="{{ asset('assets/img/perfilPorfolio.JPG') }}" x="0" y="0" height="120%" width="120%"></image>
                    </svg>
                    <div class="card-body col-12 text-center mt-0">
                        <h3 class="card-title font-weight-bold">{{ __('index.qui_soc') }}</h3>
                        <p class="descripcion">{{ __('index.descripcio_personal') }}</p>
                        <a href="openModal" data-toggle="modal" data-target="#myModal" class="font-weight-bold" style="font-size: x-large;">{{ __('index.descripcio_saberMes') }}</a>
                    </div>
                </div>

                <div class="card col-xl-6 col-md-6 col-sm-12 border-0 bg-transparent" id="cardSkills">
                    <div class="card-body text-center">
                        <h4 class="card-title" id="tituloSkills"><b>{{ __('index.habilitats') }}</b></h4>
                        {{-- lo de aqui dentro de carga con jquery --}}
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio">
            <div class="row col-12 mb-3 tituloSeccion">
                <h1 class="m-auto font-weight-bold">{{ __('index.titol_projectes') }}</h1>
            </div>
            <div class="row col-12 mb-3">
                <div class="separation-bar"></div>
            </div>

            <div class="row mx-auto mb-3" id="barraProjectes">
                <ul class="list-inline mx-auto mb-0">
                    <li class="list-inline-item clicado py-2 px-4 mx-0" data-tipo="todos">{{ __('index.projectes_tots') }}</a></li>
                    <li class="list-inline-item py-2 px-4 mx-0" data-tipo="php">PHP/Laravel</a></li>
                    <li class="list-inline-item py-2 px-4 mx-0" data-tipo="ionic">Angular/Ionic</a></li>
                    <li class="list-inline-item py-2 px-4 mx-0" data-tipo="android">Android</a></li>
                </ul>
            </div>

            <div class="row justify-content-center" id="gridProyectos">

                <figure data-tipo="php">
                    <img src="{{ asset('assets/img/proyectos/spam_logo.png') }}" style="background-color: #99CC33;" alt="Portfolio Item">
                    <figcaption class="text-center">
                        <h3>PetLinks</h3>
                        <a class="btn" href="{{ url('petlinks/') }}">{{ __('index.apren_mes') }}</a>
                    </figcaption>
                </figure>

                <figure data-tipo="php">
                    <img src="{{ asset('assets/img/proyectos/titulonf.png') }}" style="background-color: #000;" alt="Portfolio Item">
                    <figcaption class="text-center">
                        <h3>Never Forget</h3>
                        <a class="btn" href="{{ url('neverforget/') }}">{{ __('index.apren_mes') }}</a>
                    </figcaption>
                </figure>

                <figure data-tipo="ionic">
                    <img src="{{ asset('assets/img/proyectos/fondo_tareas.jpg') }}" style="background-color: #99CC33;" alt="Portfolio Item">
                    <figcaption class="text-center">
                        <h3>{{ __('index.proyecto_tareas') }}</h3>
                        <a class="btn" href="{{ url('tareas/') }}">{{ __('index.apren_mes') }}</a>
                    </figcaption>
                </figure>

                <figure data-tipo="ionic">
                    <img src="{{ asset('assets/img/proyectos/fondo_recetas.jpg') }}" style="background-color: #99CC33;" alt="Portfolio Item">
                    <figcaption class="text-center">
                        <h3>{{ __('index.proyecto_recetas') }}</h3>
                        <a class="btn" href="{{ url('recetas/') }}">{{ __('index.apren_mes') }}</a>
                    </figcaption>
                </figure>

                <figure data-tipo="android">
                    <img src="{{ asset('assets/img/proyectos/fondo_cookingmate.jpg') }}" style="background-color: #99CC33;" alt="Portfolio Item">
                    <figcaption class="text-center">
                        <h3>Cookingmate</h3>
                        <a class="btn" href="{{ url('cookingmate/') }}">{{ __('index.apren_mes') }}</a>
                    </figcaption>
                </figure>
            </div>
        </section>
    </div>



    {{-- modal --}}
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="{{ asset('assets/img/logo_definitivo.svg') }}" alt="logo" style="max-height:50px;" class="mr-3">
                    <h4 class="float-left">Francesc Retamal Requena</h4>
                    <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times" style="color:white;"></i></button>
                </div>
                <div class="modal-body">
                    <div class="w-100 text-center">
                        <div class="col-10 mx-auto mb-3">
                            <button id="btnVideoInicio" type="button" class="btn bg-primary py-2 px-4 mx-2 font-weight-bold text-lowercase" style="font-size:large;">{{ __('modal.btnInicio') }}</button>
                            <button id="btnVideoHobbies" type="button" class="btn bg-primary py-2 px-4 mx-2 font-weight-bold text-lowercase" style="font-size:large;">{{ __('modal.btnHobbies') }}</button>
                            <button id="btnVideoEstudis" type="button" class="btn bg-primary py-2 px-4 mx-2 font-weight-bold text-lowercase" style="font-size:large;">{{ __('modal.btnEstudios') }}</button>
                            <button id="btnVideoFutur" type="button" class="btn bg-primary py-2 px-4 mx-2 font-weight-bold text-lowercase" style="font-size:large;">{{ __('modal.btnFuturo') }}</button>
                            <button id="btnVideoDespido" type="button" class="btn bg-primary py-2 px-4 mx-2 font-weight-bold text-lowercase" style="font-size:large;">{{ __('modal.btnDespido') }}</button>
                        </div>
                        <video class="col-10 p-0" id="videoInteractivo" muted autoplay controls loop>
                            <source src="{{ asset('assets/video/entrevista-interactiva.mp4') }}" type="video/mp4">
                        </video>

                        <div class="arrow bounce mt-4">
                            <a class="fa fa-arrow-down fa-2x" href="#"></a>
                        </div>

                        <div class="row col-12 mt-5 mx-auto text-center">
                            <div class="col-6 skillsTitle">
                                <h2>Soft skills</h2>
                            </div>
                            <div class="col-6 skillsTitle">
                                <h2>Hard skills</h2>
                            </div>
                        </div>
                        <div class="row col-12 mt-3 mx-auto skills">
                            <div class="col-6">
                                <p>{{ __('modal.softSkill1') }}</p>
                                <p>{{ __('modal.softSkill2') }}</p>
                                <p>{{ __('modal.softSkill3') }}</p>
                                <p>{{ __('modal.softSkill4') }}</p>
                                <p>{{ __('modal.softSkill5') }}</p>
                                <p>{{ __('modal.softSkill6') }}</p>
                                <p>{{ __('modal.softSkill7') }}</p>
                                <p>{{ __('modal.softSkill8') }}</p>
                            </div>
                            <div class="col-6">
                                <p>{{ __('modal.hardSkill1') }}</p>
                                <p>{{ __('modal.hardSkill2') }}</p>
                                <p>{{ __('modal.hardSkill3') }}</p>
                                <p>{{ __('modal.hardSkill4') }}</p>
                                <p>{{ __('modal.hardSkill5') }}</p>
                                <p>{{ __('modal.hardSkill6') }}</p>
                                <p>{{ __('modal.hardSkill7') }}</p>
                                <p>{{ __('modal.hardSkill8') }}</p>
                                <p>{{ __('modal.hardSkill9') }}</p>
                                <p>{{ __('modal.hardSkill10') }}</p>
                                <p>{{ __('modal.hardSkill11') }}</p>
                            </div>
                        </div>

                        <div class="row col-12 mt-3 mx-auto text-center">
                            <div class="col-6 skillsTitle">
                                <h2>{{ __('modal.llengues') }}</h2>
                            </div>
                            <div class="col-6 skillsTitle">

                            </div>
                        </div>

                        <div class="row col-12 mt-3 mx-auto skills">
                            <div class="col-6">
                                <p>Català - {{ __('modal.natiu') }}</p>
                                <p>Español - {{ __('modal.natiu') }}</p>
                                <p>English - B1</p>
                            </div>
                        </div>

                        <div class="row col-12 mt-3 mx-auto text-center">
                            <div class="col-12 skillsTitle">
                                <h2>{{ __('modal.estudis') }}</h2>
                            </div>

                        </div>

                        <div class="row col-12 mt-3 mx-auto skills">
                            <div class="col-12">
                                <p>CFGS DAW - (2018-2019) <a href="https://maps.google.com/?q=41.388687,2.173313" target="_blank">&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Centre d'Estudis Politècnics</a></p>
                                <p>CFGS DAM - (2016-2018) <a href="https://maps.google.com/?q=41.388687,2.173313" target="_blank">&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Centre d'Estudis Politècnics</a></p>
                                <p>CFGM SMX - (2014-2016) <a href="https://maps.google.com/?q=41.340743,1.692656" target="_blank">&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Institut Eugeni d'Ors</a></p>
                                <p>ESO - (2009-2013) <a href="https://maps.google.com/?q=41.348653,1.693420" target="_blank">&nbsp;&nbsp;&nbsp;<i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Institut Milà i Fontanals</a></p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('libs/particles/js/particles.js') }}"></script>
    <script src="{{ asset('libs/particles/js/app.js') }}"></script>
    <script src="{{ asset('js/events/events.js') }}"></script>
    <script src="{{ asset('js/events/sobreMi.js') }}"></script>
    <script src="{{ asset('js/events/modal.js') }}"></script>
@endsection
