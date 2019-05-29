<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Portfolio personal de Francesc Retamal Requena">
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

        @yield('title')


        <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/template.css') }}">
        <link href="{{ asset('libs/md-bootstrap/css/mdb.min.css') }}" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ asset('libs/fontawesome-free-5.8.2-web/css/all.css') }}">
        @yield('css')

    </head>
    <body>

        @yield('cuerpo')

        {{-- footer --}}

        <footer class="page-footer mt-5 darken-3" id="footer">
            <div class="container">
                <div class="row mt-3 text-center">
                    <div class="col-12 text-center p-3">
                        <a id="topLink" class="p-3" href="#" aria-label="{{ __('navbar.inici') }}" style="background-color:#ffffff11"><i class="fas fa-angle-double-up" style="color:#007cc4"></i></a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6 m-auto text-center p-3" id="infoContacto">
                        <p>{{ __('footer.descripcio') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 py-3">
                        <div class="mb-5 flex-center" id="listaContacto">
                            <a class="gplus-ic" href=mailto:franrere.6.97@gmail.com aria-label="email" title="email">
                                <i class="fas fa-envelope fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                            </a>
                            <a class="tw-ic" href="https://twitter.com/Francesc_dev" target="_blank" aria-label="twitter" title="twitter">
                                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                            </a>
                            <a class="li-ic" href="https://es.linkedin.com/in/francescretamal" target="_blank" aria-label="linkedin" title="linkedin">
                                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">
                <div class="text-center">Francesc Retamal © 2019 Copyright</div>
                <div class="text-center">{{ __('footer.made1') }} &#x02665; {{ __('footer.made2') }}</div>
            </div>
        </footer>


        <script src="{{ asset('libs/jquery/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('libs/popper/js/popper.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/js/bootstrap.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
