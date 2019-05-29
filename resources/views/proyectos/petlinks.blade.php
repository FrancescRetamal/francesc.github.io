@extends('templates.plantilla')

@section('title')
    <title>Francesc Retamal: PetLinks</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/proyectos/petlinks.css') }}">
@endsection

@section('cuerpo')
    <div class="bg-dark barReturnBack">
        <a class="my-auto px-4 py-2 ml-5" href="javascript:history.back()" aria-label=""><i class="fas fa-angle-double-left"></i></a>
    </div>

    <div class="container">
        <div class="row col-12 mb-3 mt-4 align-items-center justify-content-center">
            <h1 class="font-weight-bold">PetLinks</h1>
            <img src="{{ asset('assets/img/proyectos/favicon_spam.png') }}" style="width:50px;height:50px;" class="ml-4" alt="...">
        </div>

        <div class="row col-12 mb-3">
            <div class="separation-bar"></div>
        </div>

        <div id="carouselExampleInterval" class="carousel slide m-5 col-10 m-auto p-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleInterval" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleInterval" data-slide-to="1"></li>
                <li data-target="#carouselExampleInterval" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="{{ asset('assets/img/proyectos/petlinks_landing.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="{{ asset('assets/img/proyectos/petlinks_landing_admin.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="{{ asset('assets/img/proyectos/petlinks_tabla.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <p class="descripcionProyecto m-5">
            {{ __('petlinks.descripcio1') }}<br><br>
            {{ __('petlinks.descripcio2') }}<br><br>
            {{ __('petlinks.descripcio3') }}<br><br>
            {{ __('petlinks.descripcio4') }}<br><br>
            {{ __('petlinks.descripcio5') }}<br><br>
            <a href="http://www.abp-politecnics.com/2019/daw/projecte02/dw05/public/" target="_blank">http://www.petlinks.com/</a>
        </p>

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('a[href="#"]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0,
                    }, 500, 'linear');
            });

            $('.carousel').carousel();
        });
    </script>
@endsection
