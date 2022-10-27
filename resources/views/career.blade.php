@extends('layouts.app')

@section('content')
    
    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout4 text-center bg-overlay bg-overlay-gradient bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/7.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Careers</h1>
            <p class="pagetitle__desc">Trusted by the world's best organizations, for 21 years and running, it has been
              delivering smiles to hundreds of IT advisors, developers, users, and business owners.
            </p>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================= 
         careers
    =========================  -->
    <section class="careers">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__subtitle color-body">We Prepare For The Future.</h2>
              <h3 class="heading__title">Inspire And Get Inspired By Professional Experts</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <!-- career item #1 -->
            @if(!empty($careerJobs))
            @foreach($careerJobs as $key=>$value)
            <div class="job-item">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                  <div class="job-item__meta">
                    <span class="job-item__type">
                      @if($value->type == 1)
                      Full Time
                      @else
                      Part Time
                      @endif
                    </span>
                    <span class="job-item__location">Mohali</span>
                  </div>
                  <h4 class="job-item__title">{{$value->title}}</h4>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                  <p class="job-item__desc">{{$value->description}}</p>
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-3 d-flex align-items-center justify-content-end btn-wrap">
                  <a href="mailto:contact@synswift.com?Subject=Apply for job &Body=Body" data-mailto="somebody@email.com" target="_blank" class="btn btn__secondary btn__icon">
                    <span>Apply Now</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.col-lg-3 -->
              </div><!-- /.row -->
            </div><!-- /.job-item -->
            @endforeach
            @endif
          
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.careers -->
@endsection
