<!DOCTYPE html>
<!-- saved from url=(0050)https://themes.materializecss.com/pages/horizontal -->
<html lang="en"
><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Infinite Love</title>

    <link href="{{ asset('materialize/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('materialize/icon') }}" rel="stylesheet">
    <link href="{{ asset('materialize/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('materialize/css/css') }}" rel="stylesheet">
    <link href="{{ asset('materialize/css/gallery-materialize.min.opt.css') }}" rel="stylesheet">
</head>

  <body>
  <div id="app">
    <!-- Navbar and Header -->
    <nav class="nav-extended" style="background-color: #f7574c">
      <div class="nav-background">
          <img class="k" src="{{ asset('materialize/img/cora.jpg') }}" alt="cityscape">
      </div>
      <div class="nav-wrapper db">
        <a href="" class="brand-logo"><i class="material-icons">all_inclusive</i>Infinite Love</a>
        <a href="" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="bt hide-on-med-and-down">
          <li><a href="">Gallery</a></li>
          <li><a href="">Dark Theme</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Docs</a></li>
          <li class="k" src="{{ asset('materialize/img/cora.jpg') }}"><a class="dropdown-button" href="" data-activates="feature-dropdown" data-beloworigin="true" data-constrainwidth="false">Features<i class="material-icons bt">arrow_drop_down</i></a><ul id="feature-dropdown" class="dropdown-content">
          <li><a href="">Fullscreen Header</a></li>
          <li><a href="">Horizontal Style</a></li>
          <li><a href="">No Image Expand</a></li>
        </ul></li>
        </ul>
        <!-- Dropdown Structure -->
        

      </div>
      <div class="nav-header valign-wrapper" style="height: 280px;">
          <img class="k" src="{{ asset('materialize/img/1.png') }}" alt="cityscape" style="height: 250px;width: 700px;">
      </div>
    </nav>
    <ul class="side-nav" id="nav-mobile" style="transform: translateX(-100%);">
      <li><a href=""><i class="material-icons">camera</i>Gallery</a></li>
      <li><a href=""><i class="material-icons">brightness_3</i>Dark Theme</a></li>
      <li><a href=""><i class="material-icons">edit</i>Blog</a></li>
      <li><a href=""><i class="material-icons">school</i>Docs</a></li>
      <li><a href=""><i class="material-icons">fullscreen</i>Fullscreen Header</a></li>
      <li class="k"><a href=""><i class="material-icons">swap_horiz</i>Horizontal Style</a></li>
      <li><a href=""><i class="material-icons">texture</i>No Image Expand</a></li>
    </ul>


<!-- Gallery -->
<div id="portfolio" class="cx gray">
    <div class="db">
        <div class="b e" style="position: relative; height: 567px;">

            <div class="d hf gu gallery-item en gallery-expand ce polygon" style="position: absolute; left: 0px; top: 0px;">
                <div class="placeholder">
                    <div class="gallery-curve-wrapper">
                        <a class="gallery-cover gray" style="height: 250px; width: 170px;">
                            <img src="{{ asset('materialize/img/uñas/comun.png') }}" alt="placeholder" crossorigin="anonymous">
                        </a>
                        <div class="gallery-header">
                            <h5>Esmaltado Com&uacute;n</h5>
                            <p>El esmalte normal es aquel que todas tenemos en casa. Se aplica y se quita sin ningún problema, solamente usando un pincel para su aplicación y un quitaesmalte sin acetona para su retirado...</p>
                        </div>
                        <div class="gallery-body">
                            <div class="title-wrapper">
                                <h3>Esmaltado Com&uacute;n</h3>
                                <span class="gk">$11.99</span>
                            </div>
                            <p class="fi">El esmalte normal es aquel que todas tenemos en casa. Se aplica y se quita sin ningún problema, solamente usando un pincel para su aplicación y un quitaesmalte sin acetona para su retirado. Los tenemos en cualquier tono, gama y textura, y puedes combinarlos con bases y top coat para alargar su duración.</p>
                            <!--
                            <div class="carousel-wrapper">
                                <div class="t initialized">
                                    <a class="carousel-item active" href="https://themes.materializecss.com/pages/horizontal#one!" style="z-index: 0; opacity: 1; display: block; transform: translateX(-150px) translateY(-100px) translateX(0px) translateX(0px) translateZ(0px);"><img src="./Gallery2_files/geometric-sun.jpg" crossorigin="anonymous"></a>
                                    <a class="carousel-item" href="https://themes.materializecss.com/pages/horizontal#two!" style="transform: translateX(-150px) translateY(-100px) translateX(305px) translateZ(0px); z-index: -1; opacity: 0.6; display: block;"><img src="./Gallery2_files/geometric-maze.jpg" crossorigin="anonymous"></a>
                                    <a class="carousel-item" href="https://themes.materializecss.com/pages/horizontal#three!" style="transform: translateX(-150px) translateY(-100px) translateX(610px) translateZ(0px); z-index: -2; opacity: 0.2; display: block;"><img src="./Gallery2_files/geometric-ice.jpg" crossorigin="anonymous"></a>
                                    <a class="carousel-item" href="https://themes.materializecss.com/pages/horizontal#four!" style="transform: translateX(-150px) translateY(-100px) translateX(-610px) translateZ(0px); z-index: -2; opacity: 0.2; display: block;"><img src="./Gallery2_files/geometric-cave.jpg" crossorigin="anonymous"></a>
                                    <a class="carousel-item" href="https://themes.materializecss.com/pages/horizontal#five!" style="transform: translateX(-150px) translateY(-100px) translateX(-305px) translateZ(0px); z-index: -1; opacity: 0.6; display: block;"><img src="./Gallery2_files/geometric-grapefruit.jpg" crossorigin="anonymous"></a>
                                </div>
                            </div>
                            -->
                        </div>
                        <!--
                            <div class="gallery-action">
                                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                            </div>
                        -->
                    </div>
                </div>
            </div>




            <div class="d hf gu gallery-item en gallery-expand ce polygon" style="position: absolute; left: 481px; top: 0px;">
                <div class="placeholder">
                    <div class="gallery-curve-wrapper">
                        <a class="gallery-cover gray" style="height: 250px; width: 170px;">
                            <img src="{{ asset('materialize/img/uñas/semi.png') }}" alt="placeholder" crossorigin="anonymous">
                        </a>
                        <div class="gallery-header">
                            <h5>Semi-Permanente</h5>
                            <p>El esmaltado semipermanente es una técnica que mantiene las uñas perfectamente pintadas hasta dos semanas ininterrumpidas…</p>
                        </div>
                        <div class="gallery-body">
                            <div class="title-wrapper">
                                <h3>Semi-Permanente</h3>
                                <span class="gk">$14.99</span>
                            </div>
                            <p class="fi">El esmaltado semipermanente es una técnica que mantiene las uñas perfectamente pintadas hasta dos semanas ininterrumpidas. ... Para lograr este efecto duradero, el esmalte semipermanente se compone de un gel acrílico mezclado con esmalte que se aplica sobre la uña y después se endurece con rayos ultravioleta.</p>
                            <!--
                                <div class="carousel-wrapper">
                                <div class="t initialized">
                                <a class="carousel-item active" href="https://themes.materializecss.com/pages/horizontal#one!" style="z-index: 0; opacity: 1; display: block; transform: translateX(-150px) translateY(-100px) translateX(0px) translateX(0px) translateZ(0px);"><img src="./Gallery2_files/geometric-sun.jpg" crossorigin="anonymous"></a>
                                <a class="carousel-item" href="https://themes.materializecss.com/pages/horizontal#two!" style="transform: translateX(-150px) translateY(-100px) translateX(305px) translateZ(0px); z-index: -1; opacity: 0.6; display: block;"><img src="./Gallery2_files/geometric-maze.jpg" crossorigin="anonymous"></a>
                                <a class="carousel-item" href="https://themes.materializecss.com/pages/horizontal#three!" style="transform: translateX(-150px) translateY(-100px) translateX(610px) translateZ(0px); z-index: -2; opacity: 0.2; display: block;"><img src="./Gallery2_files/geometric-ice.jpg" crossorigin="anonymous"></a>
                                <a class="carousel-item" href="https://themes.materializecss.com/pages/horizontal#four!" style="transform: translateX(-150px) translateY(-100px) translateX(-610px) translateZ(0px); z-index: -2; opacity: 0.2; display: block;"><img src="./Gallery2_files/geometric-cave.jpg" crossorigin="anonymous"></a>
                                <a class="carousel-item" href="https://themes.materializecss.com/pages/horizontal#five!" style="transform: translateX(-150px) translateY(-100px) translateX(-305px) translateZ(0px); z-index: -1; opacity: 0.6; display: block;"><img src="./Gallery2_files/geometric-grapefruit.jpg" crossorigin="anonymous"></a>
                                </div>
                                </div>
                            -->
                        </div>
                        <!--
                        <div class="gallery-action">
                            <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
                        </div>
                        -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div><!-- /.container -->


<!-- Core Javascript -->


      @csrf
<div class="hiddendiv common"></div>
<div class="drag-target" data-sidenav="nav-mobile" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></div>


  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
  <script src="{{ asset('materialize/js/gallery.min.opt.js') }}"></script>
  </body></html>

@push('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({ //Cantidad de mensajes sin leer
            url: '{{ route('registro') }}',
            type: "GET",
            dataType: 'json',
            success: function (data) {
                alert("asdasd");
               // if (data!=0) {
                    //$('#lectura_mjs').append('<i class="fa fa-envelope"></i>&nbsp;'+data+' mensajes');
                    console.log(data);
               // }
            }
        });

    </script>
@endpush