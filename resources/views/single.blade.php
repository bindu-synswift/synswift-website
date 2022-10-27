@extends('layouts.app')

@section('content')
   <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout11 text-center bg-overlay bg-overlay-gradient bg-parallax" style="padding: 150px 0 50px">
      <div class="bg-img"><img src="{{asset('assets/images/page-titles/1.jpg')}}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-lg-3">
            <h1 class="pagetitle__heading">{{$project->name}}</h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About Layout 1
    =========================== -->
    <section id="about" class="about-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading mb-30">
              <div class="d-flex align-items-center mb-20">
                <div class="divider divider-primary mr-30"></div>
                <h2 class="heading__subtitle mb-0">Timely Service Delivery & Incident Resolutions!! </h2>
              </div>
              <h3 class="heading__title mb-40">{{$project->title}}
              </h3>
            </div><!-- /heading -->
            <div class="position-relative offset-xl-1">
              <i class="icon-quote"></i>
              <p class="mb-30">{{$project->description}}</p>
            <!--  <p class="mb-30">You need information security services to proactively prevent and protect confidential
                data, as well as detect internal and external threats. Protect your business by choosing managed
                security service provider. Our security services can help ensure your business Trusted by the world's
                best organizations.</p>
              <p class="mb-30">for 15 years and running, it has been delivering smiles to hundreds of IT advisors,
                developers, users, and business owners. Easy solutions for all difficult IT problems to ensure high
                availability.</p>
              <p class="mb-30">Provide users with appropriate view and access permissions to requests, problems,
                changes, contracts, assets, solutions, and reports with our experienced professionals. </p>-->
              <ul class="list-items list-items-layout2 list-unstyled d-flex flex-wrap list-horizontal mb-50">
                <li>Eliminate Repeat Entry</li>
                <li>Simplify Communication</li>
                <li>Drive Business Process</li>
                <li>Speed Up Transactions</li>
                <li>Structure Data & Docs</li>
                <li>Automate Workflows</li>
              </ul>
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
                  <h4 class="blockquote__title mb-0">As one of the world's largest ITService Providers with over 120
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
