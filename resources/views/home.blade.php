@extends('layout.app')

@section('content')


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
                @isset($trabajos)
                    @foreach($trabajos as $trabajo)
                        <div class="d hf gu gallery-item en gallery-expand ce polygon" style="position: absolute; left: 481px; top: 0px;">
                            <div class="placeholder">
                                <div class="gallery-curve-wrapper">
                                    <a class="gallery-cover gray" style="height: 250px; width: 170px;">
                                        <img src="{{ asset('materialize/img/uñas/'.$trabajo->id.'.png') }}" alt="placeholder" crossorigin="anonymous">
                                    </a>
                                    <div class="gallery-header">
                                        <h5>{{$trabajo->nombre}}</h5>
                                        <p>{{$trabajo->descripcion}}</p>
                                    </div>
                                    <div class="gallery-body">
                                        <div class="title-wrapper">
                                            <h3>{{$trabajo->nombre}}</h3>
                                            <span class="gk">$14.99</span>
                                        </div>
                                        <p class="fi">{{$trabajo->descripcion}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset




            </div>
        </div>
    </div><!-- /.container -->


    <!-- Core Javascript -->






    <div class="hiddendiv common"></div>
    <div class="drag-target" data-sidenav="nav-mobile" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></div>





@endsection

@push('scripts')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Paginado Datatables
        $.ajax({ //Cantidad de mensajes sin leer
            url: '{{ route('registro') }}',
            type: "GET",
            dataType: 'json',
            success: function (data) {
                // if (data!=0) {
                //$('#lectura_mjs').append('<i class="fa fa-envelope"></i>&nbsp;'+data+' mensajes');
                console.log(data);
                // }
            }
        });

    </script>
@endpush



