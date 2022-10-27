@extends('layouts.app')

@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout8 bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">Keep Business Safe And Ensure High Availability.</h1>
            <p class="pagetitle__desc">We are experienced professionals who understand that It services is changing, and
              are true partners who care about your success. Our team provides a consultative approach on emerging
              technology.</p>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 cta-banner-wrapper d-flex justify-content-end">
            <div class="cta-banner text-center">
              <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                <div class="cta__item">
                  <div class="cta__icon"><i class="icon-operating-system"></i></div>
                  <h4 class="cta__title">Software License</h4>
                  <p class="cta__desc">Build dynamic request templates with associated workflows, and tasks.</p>
                </div><!-- /.cta__item -->
                <div class="cta__item">
                  <div class="cta__icon"><i class="icon-dos"></i></div>
                  <h4 class="cta__title">Privileged Access</h4>
                  <p class="cta__desc">Extend proven Tech best practices to HR, finance, and other service
                    delivery areas.</p>
                </div><!-- /.cta__item -->
              </div><!-- /.slick-carousel -->
            </div><!-- /.cta-banner -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    <section class="services-layout2 pt-130 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle">Nationwide Service, Local Expertise</h2>
              <h3 class="heading__title"> Offering the latest software and IT services to our customers!</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- service item #1 -->
          @if(!empty($projects))
          @foreach($projects as $key=>$value)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <a href="{{route('singleProject',$value->id)}}">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <img src="assets/images/projects/creator-stock.png" alt="creator stock"/>
                </div><!-- /.service__icon -->
                <h4 class="service__title">{{$value->title}}</h4>
                <p class="service__desc">{{$value->description}} </p>
                <ul class="list-items list-unstyled mb-30">
                  <li>Business IT alignment</li>
                  <li> IT financial management</li>
                  <li> IT service management</li>
                </ul>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            </a>
          </div><!-- /.col-lg-4 -->
          @endforeach
          @endif
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- =========================
      Awards
      =========================== -->
    <section class="awards pb-70">
      <div class="container">
        <div class="row heading mb-60">
          <div class="col-12 d-flex align-items-center mb-20">
            <div class="divider divider-primary mr-30"></div>
            <h2 class="heading__subtitle mb-0">Timely Service Delivery & Incident Resolutions!! </h2>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h3 class="heading__title">Trusted by the world's best organizations for 21 years.
            </h3>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-2">
            <p class="heading__desc">Synswift been helping organizations and Providers through the World to manage
              their IT with our unique approach to technology management and consultancy solutions. </p>
            <a href="#" class="btn btn__primary btn__icon mt-20">
              <span>Get Started</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
        <div class="row awards-wrapper">
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #1 -->
            <div class="fancybox-item">
              <div class="fancybox__icon-img">
                <img src="assets/images/awards/icons/1.png" alt="icon">
              </div><!-- /.fancybox__icon-img -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">CSS Design Award</h4>
                <p class="fancybox__desc">A web design & development award platform for digital folk, UI/UX peeps
                  and inspiring leaders of the web.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #2 -->
            <div class="fancybox-item">
              <span class="pinned-ribbon"></span>
              <div class="fancybox__icon-img">
                <img src="assets/images/awards/icons/2.png" alt="icon">
              </div><!-- /.fancybox__icon-img -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">W3 Design Award</h4>
                <p class="fancybox__desc">Awards celebrates digital by honoring outstanding Websites, Web
                  Marketing, Video, Sites, Apps & Social content.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #3 -->
            <div class="fancybox-item">
              <div class="fancybox__icon-img">
                <img src="assets/images/awards/icons/3.png" alt="icon">
              </div><!-- /.fancybox__icon-img -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">The FWA Award</h4>
                <p class="fancybox__desc">Showcasing innovation every day since 2000, our mission is to showcase
                  cutting edge creativity, regardless
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- fancybox item #4 -->
            <div class="fancybox-item">
              <div class="fancybox__icon-img">
                <img src="assets/images/awards/icons/3.png" alt="icon">
              </div><!-- /.fancybox__icon-img -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">WWW Awards</h4>
                <p class="fancybox__desc">The awards that recognize the talent and effort of the best web
                  designers, developers and agencies in the world.
                </p>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Awards -->
@endsection