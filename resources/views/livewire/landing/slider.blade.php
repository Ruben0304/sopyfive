<div class="slider-active dot-style">
    @foreach ($sliders as $slider)
        <div class="single-slider d-flex align-items-center slider-height">

            <div class="container" >

                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-10 ">
                        <div class="hero-wrapper">
                            <!-- Video icon -->
                            {{-- <div class="video-icon">
                        <a class="popup-video btn-icon" href="landing/video/video (720p).mp4"
                            data-animation="bounceIn" data-delay=".4s">
                            <i class="fas fa-play"></i>
                        </a>
                    </div> --}}
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".3s" style="color: white">{{$slider->title}}
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".6s" style="color: white">
                                    {{$slider->paragraph}}<br>
                                </p>
                                @if($slider->id != 1)
                                <a href="{{route('comunidad',['id' => $slider->comunity->id])}}" class="btn" data-animation="fadeInLeft"
                                    data-delay=".3s" style="background-color: #7D525E" >Ir a ver</a>
                                @else
                                    <a href="{{route('encuesta')}}" class="btn" data-animation="fadeInLeft"
                                       data-delay=".3s" style="background-color: #7D525E" >¡Recibe un regalo!</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
