<!DOCTYPE html>
<html class="wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="page-loader page-loader-variant-1">
      <div><img width='173' height='30' src='images/logo.png' alt=''/>
        <div class="offset-top-41 text-center">
          <div class="spinner"></div>
        </div>
      </div>
    </div>
    <div class="page text-center">
      <header class="page-head slider-menu-position" data-preset='{"title":"Header with slider","category":"header, slider","reload":true,"id":"header-1"}'>
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              </div>
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                <div class="rd-navbar-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
                    <ul class="rd-navbar-nav" id="navbar">
                      <li class="active"><a href="/"><span>Home</span></a></li>
                      <li><a href="about-coach"><span>About Coach</span></a></li>
                      <li><a href="contacts"><span>Contact Us</span></a></li>
                      <li><form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                      this.closest('form').submit(); " role="button">
                      <span>Log Out</span></a>
                    </form>
                      </li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <div class="context-dark">
        <div class="swiper-container swiper-slider" data-loop="false" data-autoplay="5500" data-dragable="false">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/background-01-1920x750.jpg" data-preview-bg="images/background-01-1920x750.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">No Pain No Gain</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                          Having a perfect body requires a lot of training. Nice-looking body and
                          powerful organism are interconnected – and we can help you with both.
                        </h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/background-02-1920x750.jpg" data-preview-bg="images/background-02-1920x750.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">never give up</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Every bodybuilder requires a lot of dedication and effort to shape his/her body into something to be proud of. We can give you everything you need for it.</h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/background-03-1920x750.jpg" data-preview-bg="images/background-03-1920x750.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">You can go the distance</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Clients of our gym receive not only necessary equipment for their workouts but also friendly support in achieving their number one training goal.</h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
          <div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
          <div class="swiper-pagination"></div>
        </div>
      </header>
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 1","category":"content","id":"content-block-1"}'>
        <div class="container">
          <h1>Welcome</h1>
          <hr class="divider bg-red">
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-xl-8">
              <p>Welcome to  Intense Gym! We hope that you will appreciate our services and opportunities we offer our loyal and potential customers. Here are some of them:</p>
            </div>
          </div>
          <div class="row justify-content-center grid-group-lg offset-top-98">
            <div class="col-md-8 col-lg-4">
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-account-multiple"></span>
                <h4 class="text-danger offset-top-20">Qualified Coaches</h4>
                <p>Our coaches have years of experience in various types of fitness and sports.</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-4">
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-xs icon-dark-filled mdi mdi-thumb-up"></span>
                <h4 class="text-danger offset-top-20">Individual Approach</h4>
                <p>Every client of Intense has a personalized program of training and nutrition.</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-4">
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-dumbbell"></span>
                <h4 class="text-danger offset-top-20">Modern Fitness Equipment</h4>
                <p>We cooperate with leading fitness equipment suppliers to give you the superior results.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section data-preset='{"title":"Carousel 1","category":"content, carousel","reload":true,"id":"carousel-1"}'>
        <div class="owl-carousel owl-carousel-default d-lg-none-owl-dots veil-owl-nav d-lg-owl-nav" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
          <div>
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="{{asset('images/home-01-480x480.jpg')}}" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Bodybuilding</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">free first lesson</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/home-02-480x480.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Fitness</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">free first lesson</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/home-03-480x480.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Crossfit</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">free first lesson</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/home-04-480x480.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Circle Studio</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">free first lesson</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/home-06-480x480.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Strength Training</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">free first lesson</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/home-05-480x480.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Yoga</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">free first lesson</a>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Team","category":"content, team","reload":false,"id":"team"}'>
        <div class="container">
          <h1>Coaches</h1>
          <hr class="divider bg-danger">
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-md-10 col-xl-12">
              <div class="row">
                <div class="col-md-6 col-xl-3">
                  <div class="box-member"><img class="img-fluid" src="images/foto 270x270.png" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.html">Cléber Junior</a> <small class="text-danger">CrossFit</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">He has more than 10 years of experience in CrossFit and professional athletics.</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-md-top-0 offset-xl-top-0">
                  <div class="box-member"><img class="img-fluid" src="images/foto2 270x270.png" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.html">Lucas Alberto</a> <small class="text-danger">Fitness</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Emily can teach you all peculiarities of fitness and aerobics in a group or individually.</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-xl-top-0">
                  <div class="box-member"><img class="img-fluid" src="images/foto4 270x270.png" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.html">Julia Silva</a> <small class="text-danger">Yoga</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Our leading yoga coach, Samantha, will help you reach full harmony with your body.</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-xl-top-0">
                  <div class="box-member"><img class="img-fluid" src="images/foto3 270x270.png" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.html">João Fortão</a> <small class="text-danger">Bodybuilding</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Austin is not only our most called-for coach, but also a winner of many championships.</p>
                </div>
              </div><a class="offset-top-66 btn btn-danger" href="about-coach">view all coaches</a>
            </div>
          </div>
        </div>
      </section>
      <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
        <div class="container">
          <div class="row justify-content-md-center text-xl-left">
            <div class="col-md-12">
              <div class="row justify-content-sm-center">
                    <div class="offset-top-30">
                            <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                              <div class="form-group">
                                <div class="input-group input-group-sm"><span class="input-group-prepend"></span>
                                </div>
                              </div>
                              <div class="form-output" id="form-subscribe-footer"></div>
                            </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 order-md-1 offset-md-top-0 col-md-6 col-xl-3 order-xl-1">
                  <div class="footer-brand"><a href="index"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
                  <div class="offset-top-50 text-sm-center text-xl-left">
                          <ul class="list-inline">
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          </ul>
                  </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>