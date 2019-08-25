@extends('layout')

@section('pathCssPage'){{asset('/css/home.css')}}@endsection

@section('content')
    <h1>Prueba del Inicio</h1>

    <div class="row justify-content-between">
        <div class="col-xl-9">
             Carousel
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{asset('/images/fotoP1.jpeg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/images/fotoP2.jpeg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/images/fotoP3.jpeg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    <!-- Plugin Facebook -->
        <div class="col-xl-3">
            Plugin de Facebook
            <div class="fb-page" data-href="https://www.facebook.com/CompuNerd/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CompuNerd/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CompuNerd/">CompuNerd</a></blockquote></div>
        </div>
    </div>
    <hr>
    <div class="">
        <h3>Nuestros servicios</h3>
        <div class="row">

        </div>
    </div>
@endsection

@section('scripts')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0"></script>
    <script type="text/javascript"></script>
@endsection
