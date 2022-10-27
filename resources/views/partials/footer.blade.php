   <!-- ========================
      Footer
    ========================== -->
    <footer class="footer footer-light">
        <div class="footer-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
                        <div class="footer-widget__content">
                            <img src="assets/images/logo/1.logo.png" alt="logo" class="mb-30">
                        </div><!-- /.footer-widget__content -->
                    </div><!-- /.col-xl-3 -->
                    <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                        <h6 class="footer-widget__title">Company</h6>
                        <div class="footer-widget__content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('career')}}">Careers</a></li>
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget__content -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                        <h6 class="footer-widget__title">Solutions</h6>
                        <div class="footer-widget__content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('application')}}">Applications</a></li>
                                    <li><a href="{{route('webdevelopment')}}">Web Development</a></li>
                                    <li><a href="{{route('uiuxPage')}}">UI/UX</a></li>
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget__content -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-sm-6 col-md-4 col-lg-2 footer-widget footer-widget-nav">
                        <h6 class="footer-widget__title">Resources</h6>
                        <div class="footer-widget__content">
                            <nav>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                    <!--                                    <li><a href="#">Site map</a></li>-->
                                </ul>
                            </nav>
                        </div><!-- /.footer-widget__content -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-sm-6 col-md-6 col-lg-3 footer-widget">
                        <h6 class="footer-widget__title">Newsletter</h6>
                        <div class="footer-widget__content">
                            <form class="footer-form">
                                <div class="form-group mb-20">
                                    <input type="text" class="form-control" placeholder="Your Email Address">
                                    <button type="submit" class="footer-form__submit"><i class="icon-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-20">
                                    <input type="checkbox" class="custom-control-input" id="terms">
                                    <label class="custom-control-label" for="terms">I accept the privacy and
                                        terms.</label>
                                </div>
                            </form>
                        </div><!-- /.footer-widget__content -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-primary -->
        <div class="footer-secondary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-5 col-lg-5">
                        <div class="footer__copyrights">
                            <span class="fz-14">&copy; 2021 Synswift, All Rights Reserved. With Love by</span>
                            <a class="fz-14 color-primary" href="https://synswift.com">synswift</a>
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-2 col-lg-2 text-center">
                        <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
                    </div><!-- /.col-lg-2 -->
                    <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
                        <ul class="social-icons list-unstyled mb-0 mr-30">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/Synswift/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/synswift/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.linkedin.com/company/synswift/">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                        </ul><!-- /.social-icons -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->

    <div class="login-popup" id="login-popup">
        <div class="login-popup-wrapper">
            <form class="login-popup__form">
                <h3 class="login-popup__title">Login!</h3>
                <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
                <div class="form-group mb-20">
                    <i class="icon-mail input-icon"></i>
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mb-20">
                    <i class="icon-lock input-icon"></i>
                    <input type="password" class="form-control" placeholder="********">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-20">
                    <div class="custom-control custom-checkbox d-flex align-items-center">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember Me!</label>
                    </div>
                    <a href="#" class="fz-14 font-weight-bold color-secondary">Forget Password?</a>
                </div>
                <button type="submit" class="btn btn__primary btn__block btn__xl">Login</button>
            </form>
            <div class="d-flex justify-content-center align-items-center mt-20">
                <span class="color-white fz-14 font-weight-bold">Don’t Have An Account?</span>
                <button id="go-register" class="go-register fz-14 font-weight-bold">
                    <span>Register Here</span><i class="icon-arrow-right"></i>
                </button>
            </div>
        </div>
    </div><!-- /.login-popup -->

    <div class="login-popup" id="register-popup">
        <div class="login-popup-wrapper">
            <form class="login-popup__form">
                <h3 class="login-popup__title">Register!</h3>
                <p class="login-popup__desc">Connect, organize and get things done to keep your IT business safe.</p>
                <div class="form-group mb-20">
                    <i class="icon-mail input-icon"></i>
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mb-20">
                    <i class="icon-lock input-icon"></i>
                    <input type="password" class="form-control" placeholder="********">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-20">
                    <div class="custom-control custom-checkbox d-flex align-items-center">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">I read & agree to <a href="#">Terms &
                            Conditions</a></label>
                    </div>
                </div>
                <button type="submit" class="btn btn__primary btn__block btn__xl">Register</button>
            </form>
            <div class="d-flex justify-content-center align-items-center mt-20">
                <span class="color-white fz-14 font-weight-bold">Have An Account?</span>
                <button id="go-login" class="go-login fz-14 font-weight-bold">
                    <span>Login Here</span><i class="icon-arrow-right"></i>
                </button>
            </div>
        </div>
    </div><!-- /.login-popup -->