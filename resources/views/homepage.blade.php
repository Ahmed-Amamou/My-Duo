<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{asset('import/assetss/images/controller.svg')}}">


    <title>My Duo</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('import/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('import/assetss/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('import/assetss/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{asset('import/assetss/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('import/assetss/css/lightbox.css')}}">

</head>

<body>


<!--header-->
<header class="main-header clearfix" role="header">
    <div class="logo">
        <a href="#">My <em>DUO</em> </a>
    </div>

    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
        <ul class="main-menu">
            <li><a href="#section1">Home</a></li>
            <li class="has-submenu"><a href="#section3">Communities</a>
                <ul class="sub-menu">
                    @if(count($games) > 4)
                        @foreach($games->sortBy('id')->take(4) as $game)
                            <li><a href="#">{{ $game->name }}</a></li>
                        @endforeach
                        <li><a href="#">More</a></li>
                    @else
                        @foreach($games as $game)
                            <li><a href="#">{{ $game->name }}</a></li>
                        @endforeach
                    @endif
                </ul>
            <li><a href="#section4">Find Friends</a></li>
            @if(Route::has('login'))
                @auth()
                    <li><a id="profile-link"  href="{{url('/profile')}}">Profile</a></li>
                @endauth
            @endif

        </ul>

    </nav>


</header>


<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('import/assetss/images/va.mp4')}}" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Find your perfect gaming partner</h6>
            <h2>My <em>Duo</em></h2>
            @if (Route::has('login'))

                @auth
                    <li><a href="{{ url('/dashboard') }}" >Dashboard</a></li>
                @else
                    <li><a class="block px-4 py-2 mb-2 mt-2 font-semibold text-white bg-purple-600 rounded shadow hover:bg-purple-700" href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a class="block px-4 py-2 mb-2 mt-2 font-semibold text-white bg-blue-600 rounded shadow hover:bg-blue-700" href="{{ route('register') }}" >Register</a></li>
                @endif
            @endauth

            @endif
        </div>
    </div>

</section>
<!-- ***** Main Banner Area End ***** -->






<section class="section coming-soon" data-section="section3">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <div class="continer centerIt">
                    <div>
                        <h4>Join a <em>Community</em> of gamers and make new friends and duo together</h4>
                        {{--                        <div class="counter">--}}

                        {{--                            <div class="days">--}}
                        {{--                                <div class="value">00</div>--}}
                        {{--                                <span>Days</span>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="hours">--}}
                        {{--                                <div class="value">00</div>--}}
                        {{--                                <span>Hours</span>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="minutes">--}}
                        {{--                                <div class="value">00</div>--}}
                        {{--                                <span>Minutes</span>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="seconds">--}}
                        {{--                                <div class="value">00</div>--}}
                        {{--                                <span>Seconds</span>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right-content">
                    <div class="top-content">
                        <h6>Register your free account and <em>get immediate</em> interaction with communties</h6>
                    </div>
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">Get it now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section courses" data-section="section4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Connect with gamers</h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-01.jpg')}}" alt="Course #1">
                    <div class="down-content">
                        <h4>Digital Marketing</h4>
                        <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-01.png')}}" alt="Author 1">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-02.jpg')}}" alt="Course #2">
                    <div class="down-content">
                        <h4>Business World</h4>
                        <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-02.png')}}" alt="Author 2">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('/import/assetss/images/courses-03.jpg')}}" alt="Course #3">
                    <div class="down-content">
                        <h4>Media Technology</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-03.png')}}" alt="Author 3">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-04.jpg')}}" alt="Course #4">
                    <div class="down-content">
                        <h4>Communications</h4>
                        <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-04.png')}}" alt="Author 4">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-05.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Business Ethics</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-05.png')}}" alt="">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-01.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Photography</h4>
                        <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-01.png')}}" alt="">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-02.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Web Development</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-02.png')}}" alt="">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-03.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Learn HTML CSS</h4>
                        <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-03.png')}}" alt="">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-04.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Social Media</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-04.png')}}" alt="">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-05.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Digital Arts</h4>
                        <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-05.png')}}" alt="">
                        </div>
                        <div class="text-button-free">
                            <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('import/assetss/images/courses-01.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Media Streaming</h4>
                        <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
                        <div class="author-image">
                            <img src="{{asset('import/assetss/images/author-01.png')}}" alt="">
                        </div>
                        <div class="text-button-pay">
                            <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{--<section class="section video" data-section="section5">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6 align-self-center">--}}
{{--                <div class="left-content">--}}
{{--                    <span>our presentation is for you</span>--}}
{{--                    <h4>Watch the video to learn more <em>about Grad School</em></h4>--}}
{{--                    <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> for details.--}}
{{--                        <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>--}}
{{--                    <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6">--}}
{{--                <article class="video-item">--}}
{{--                    <div class="video-caption">--}}
{{--                        <h4>Power HTML Template</h4>--}}
{{--                    </div>--}}
{{--                    <figure>--}}
{{--                        <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img src="{{asset('import/assetss/images/main-thumb.png')}}"></a>--}}
{{--                    </figure>--}}
{{--                </article>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="section contact" data-section="section6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Let’s Keep In Touch</h2>
                </div>
            </div>
            <div class="col-md-6">

                <!-- Do you need a working HTML contact-form script?

                            Please visit https://templatemo.com/contact page -->

                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="button">Send Message Now</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div id="map">
                    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Stolen by <em>Hamood</em> </p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('import/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('import/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('import/assetss/js/isotope.min.js')}}"></script>
<script src="{{asset('import/assetss/js/owl-carousel.js')}}"></script>
<script src="{{asset('import/assetss/js/lightbox.js')}}"></script>
<script src="{{asset('import/assetss/js/tabs.js')}}"></script>
<script src="{{asset('import/assetss/js/video.js')}}"></script>
<script src="{{asset('import/assetss/js/slick-slider.js')}}"></script>
<script src="{{asset('import/assetss/js/custom.js')}}"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function () {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
        if($(e.target).hasClass('external')) {
            return;
        }
        e.preventDefault();
        $('#menu').removeClass('active');
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
        checkSection();
    });

    $('#profile-link').on('click', function ($) {
        window.location = "http://myduoapp.test/profile"
    })
</script>
</body>
</html>
