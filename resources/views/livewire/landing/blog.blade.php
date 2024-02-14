<main>
    <!--? Slider Area Start-->
    <div class="slider-area">

        <img src=" {{ asset('landing/assets/img/slider/' . $id . '.jpg') }}  "
             style="position: absolute;width: 100%;height: 95%;object-fit: cover ">
        <livewire:landing.hero :$id>

    </div>


    <section class="wantToWork-area section-bg3" style="padding-bottom: 0px">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Blog</h2>
                            <p style="font-size: 16px"> Este es un espacio diseñado para que aprendas sobre cada uno de
                                nuestros pilares con artículos de calidad diseñados para ti..
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="services.html" class="btn f-right sm-left">Agregar área a favoritas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        @if(!$articles->isEmpty())
                        @foreach($articles as $a)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0"
                                         src="{{ Storage::url('articles/' . $a->id . '.jpg') }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{$a->created_at->format('d')}}</h3>
                                        <p>{{$a->created_at->format('M')}}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{route('blog-details',['id'=>$a->id])}}">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{{$a->title}}</h2>
                                    </a>
                                    <p>{{Str::limit($a->content,200)}}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> {{$a->comunity->title}}</a></li>
                                        {{--                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>--}}
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                        @else
                            <p style="color: #999999;">No hay artículos de esta comunidad &#128580;</p>

                        @endif
                        {{--                        <nav class="blog-pagination justify-content-center d-flex">--}}
                        {{--                            <ul class="pagination">--}}
                        {{--                                <li class="page-item">--}}
                        {{--                                    <a href="#" class="page-link" aria-label="Previous">--}}
                        {{--                                        <i class="ti-angle-left"></i>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="page-item">--}}
                        {{--                                    <a href="#" class="page-link">1</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="page-item active">--}}
                        {{--                                    <a href="#" class="page-link">2</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="page-item">--}}
                        {{--                                    <a href="#" class="page-link" aria-label="Next">--}}
                        {{--                                        <i class="ti-angle-right"></i>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </nav>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        {{--                        <aside class="single_sidebar_widget search_widget">--}}
                        {{--                            <form action="#">--}}
                        {{--                                <div class="form-group">--}}
                        {{--                                    <div class="input-group mb-3">--}}
                        {{--                                        <input type="text" class="form-control" placeholder='Search Keyword'--}}
                        {{--                                               onfocus="this.placeholder = ''"--}}
                        {{--                                               onblur="this.placeholder = 'Search Keyword'">--}}
                        {{--                                        <div class="input-group-append">--}}
                        {{--                                            <button class="btns" type="button"><i class="ti-search"></i></button>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"--}}
                        {{--                                        type="submit">Search</button>--}}
                        {{--                            </form>--}}
                        {{--                        </aside>--}}
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Categorías</h4>

                            <livewire:landing.blog-categories-count>

                        </aside>

                        {{--                        <aside class="single_sidebar_widget tag_cloud_widget">--}}
                        {{--                            <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>--}}
                        {{--                            <ul class="list">--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">project</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">love</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">technology</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">travel</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">restaurant</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">life style</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">design</a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">illustration</a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </aside>--}}

                        {{--                        <aside class="single_sidebar_widget instagram_feeds">--}}
                        {{--                            <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>--}}
                        {{--                            <ul class="instagram_row flex-wrap">--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">--}}
                        {{--                                        <img class="img-fluid" src="assets/img/post/post_5.png" alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">--}}
                        {{--                                        <img class="img-fluid" src="assets/img/post/post_6.png" alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">--}}
                        {{--                                        <img class="img-fluid" src="assets/img/post/post_7.png" alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">--}}
                        {{--                                        <img class="img-fluid" src="assets/img/post/post_8.png" alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">--}}
                        {{--                                        <img class="img-fluid" src="assets/img/post/post_9.png" alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#">--}}
                        {{--                                        <img class="img-fluid" src="assets/img/post/post_10.png" alt="">--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </aside>--}}
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Haz tu propuesta</h4>
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Escribe un tema de tu interés'"
                                           placeholder='Escribe un tema de tu interés' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Enviar
                                </button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
