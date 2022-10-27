@extends('layouts.app')

@section('content')
  <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                    <h1 class="pagetitle__heading">Help Challenge Critical Activities</h1>
                    <p class="pagetitle__desc">We are experienced professionals who understand that It services is
                        changing, and
                        are true partners who care about your success.</p>
                    <div class="d-flex justify-content-center align-items-center flex-wrap">
                        <a href="projects-grid.html" class="btn btn__primary mx-3">Our Services</a>
                        <a class="video__btn video__btn-rounded video__btn-white popup-video mx-3"
                           href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                            <span class="video__btn-title color-white">Our Video!</span>
                        </a>
                    </div>
                    <nav>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about</li>
                        </ol>
                    </nav>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading mb-30">
                        <div class="d-flex align-items-center mb-20">
                            <div class="divider divider-primary mr-30"></div>
                            <h2 class="heading__subtitle mb-0">Timely Service Delivery & Incident Resolutions!! </h2>
                        </div>
                        <h3 class="heading__title mb-40">Manages service delivery across various business like, HR,
                            Legal and
                            other IT departments!!
                        </h3>
                    </div><!-- /heading -->
                    <div class="position-relative offset-xl-1">
                        <i class="icon-quote"></i>
                        <p class="mb-40">Synswift has been helping organizations throughout the World to manage
                            their IT with our unique approach to technology management and consultancy solutions with
                            appropriate
                            view and permissions to requests, problems, changes, contracts, assets..</p>
                        <ul class="list-items list-items-layout2 list-unstyled d-flex flex-wrap list-horizontal mb-50">
                            <li>Eliminate Repeat Entry</li>
                            <li>Simplify Communication</li>
                            <li>Drive Business Process</li>
                            <li>Speed Up Transactions</li>
                            <li>Structure Data & Docs</li>
                            <li>Automate Workflows</li>
                        </ul>
                        <img src="assets/images/about/singnture.png" alt="singnture">
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                    <div class="about__img mb-40">
                        <img src="assets/images/about/1.jpg" alt="about">
                        <blockquote class="blockquote d-flex align-items-end mb-0">
                            <div class="blockquote__avatar">
                                <img src="assets/images/testimonials/thumbs/1.png" alt="thumb">
                            </div>
                            <div class="blockquote__content">
                                <h4 class="blockquote__title mb-0">As one of the world's largest ITService Providers
                                    with over 120
                                    engineers and IT support staff are ready to help.
                                </h4>
                            </div><!-- /.blockquote__content -->
                        </blockquote><!-- /.blockquote -->
                    </div><!-- /.about-img -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

@endsection