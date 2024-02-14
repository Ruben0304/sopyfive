<main>
    <section class="blog_area single-post-area section-padding" style="padding-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ Storage::url('articles/' . $article->id . '.jpg') }}" alt="article img">
                        </div>
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">{{$article->title}}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> {{$article->comunity->title}}</a></li>
{{--                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>--}}
                            </ul>
                            <p class="excert">
                                {{$article->content}}
                            </p>

                        </div>
                    </div>
{{--                    <div class="navigation-top">--}}
{{--                        <div class="d-sm-flex justify-content-between text-center">--}}
{{--                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and--}}
{{--                                4--}}
{{--                                people like this</p>--}}
{{--                            <div class="col-sm-4 text-center my-2 my-sm-0">--}}
{{--                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->--}}
{{--                            </div>--}}
{{--                            <ul class="social-icons">--}}
{{--                                <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                </li>--}}
{{--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>--}}
{{--                                <li><a href="#"><i class="fab fa-behance"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="navigation-area">--}}
{{--                            <div class="row">--}}
{{--                                <div--}}
{{--                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">--}}
{{--                                    <div class="thumb">--}}
{{--                                        <a href="#">--}}
{{--                                            <img class="img-fluid" src="assets/img/post/preview.png" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="arrow">--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="lnr text-white ti-arrow-left"></span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="detials">--}}
{{--                                        <p>Prev Post</p>--}}
{{--                                        <a href="#">--}}
{{--                                            <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div--}}
{{--                                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">--}}
{{--                                    <div class="detials">--}}
{{--                                        <p>Next Post</p>--}}
{{--                                        <a href="#">--}}
{{--                                            <h4 style="color: #2d2d2d;">Telescopes 101</h4>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="arrow">--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="lnr text-white ti-arrow-right"></span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="thumb">--}}
{{--                                        <a href="#">--}}
{{--                                            <img class="img-fluid" src="assets/img/post/next.png" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="comment-form">--}}
{{--                        <h4>Leave a Reply</h4>--}}
{{--                        <form class="form-contact comment_form" action="#" id="commentForm">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-group">--}}
{{--     <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"--}}
{{--               placeholder="Write Comment"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input class="form-control" name="name" id="name" type="text"--}}
{{--                                               placeholder="Name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input class="form-control" name="email" id="email" type="email"--}}
{{--                                               placeholder="Email">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input class="form-control" name="website" id="website" type="text"--}}
{{--                                               placeholder="Website">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Categorías</h4>
                            <livewire:landing.blog-categories-count>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title" style="color: #2d2d2d;">Similares</h3>
                            @foreach($similar as $a)
                            <div class="media post_item">
                                <img src="{{ Storage::url('articles/' . $article->id . '.jpg') }}" width="80" height="80" alt="post">
                                <div class="media-body">
                                    <a href="{{route('blog-details',['id'=>$a->id])}}">
                                        <h3 style="color: #2d2d2d;">{{Str::limit($a->title,22)}}</h3>
                                    </a>
                                    <p>{{$a->created_at->format('F d, Y')}}</p>
                                </div>
                            </div>
                            @endforeach
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
                            <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Introduzca email'" placeholder='Introduzca email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribirse
                                </button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
