 @extends('layouts.app')

@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout8 bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <h1 class="pagetitle__heading">Application Development</h1>
                    <p class="pagetitle__desc text-center">We are experienced professionals who understand that It services is
                        changing, and
                        are true partners who care about your success. Our team provides a consultative approach on
                        emerging
                        technology.</p>
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
            <div class="row justify-content-center">
                <!-- service item #1 -->
                @if(!empty($projects))
                @foreach($projects as $key=>$value)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="{{route('singleProject',$value->id)}}">
                    <div class="service-item">
                        <div class="service__content">
                            <div class="service__icon">
                                <img src="assets/images/projects/spacium.png" alt="spacium store"/>
                            </div><!-- /.service__icon -->
                            <h4 class="service__title">{{$value->title}}</h4>
                            <p class="service__desc">{{$value->description}}</p>
                            <ul class="list-items list-unstyled mb-30">
                                <li>React Native</li>
                                <li>Laravel</li>
                                <li>Electron</li>
                            </ul>
                        </div><!-- /.service-content -->
                    </div><!-- /.service-item -->
                    </a>
                </div><!-- /.col-lg-4 -->
                @endforeach
                @endif
                <!-- service item #6 -->
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
                    <h3 class="heading__title">Trusted by the world's best organizations.
                    </h3>
                </div><!-- /col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-2">
                    <p class="heading__desc">Synswift been helping organizations and Providers through the World to
                        manage
                        their IT with our unique approach to technology management and consultancy solutions. </p>
                    <a href="#" class="btn btn__primary btn__icon mt-20">
                        <span>Get Started</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.col-lg-5 -->
        </div><!-- /.container -->
    </section><!-- /.Awards -->
@endsection
