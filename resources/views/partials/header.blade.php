    <!-- =========================
        Header 
    =========================== -->


<div class="wrapper">
    <div class="preloader">
        <div class="sk-cube-grid">
            <img src="{{asset('assets/images/logo/syn-logo.gif')}}" alt="gif"/>
        </div>
    </div><!-- /.preloader -->
    <header class="header header-transparent">
        <nav class="navbar navbar-expand-lg sticky-navbar">
            <div class="container">

                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('assets/images/logo/2.logo.png')}}" class="logo-light" alt="logo">
                    <img src="{{asset('assets/images/logo/1.logo.png')}}" class="logo-dark" alt="logo">
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav__item  has-dropdown">
                            <a href="index.html" data-toggle="dropdown" class="nav__item-link active">Home</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item  has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                            <ul class="dropdown-menu">
                                <li class="nav__item">
                                    <a href="{{route('about')}}" class="nav__item-link">About Us</a>
                                </li><!-- /.nav-item -->
                                <li class="nav__item">
                                    <a href="{{route('career')}}" class="nav__item-link">Careers</a>
                                </li><!-- /.nav-item -->
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->
                        <li class="nav__item  has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">IT Solutions</a>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a class="nav__item-link"
                                                         href="{{route('application')}}">
                                    Applications
                                </a>
                                </li> <!-- /.nav-item -->
                                <li class="nav__item"><a class="nav__item-link"
                                                         href="{{route('webdevelopment')}}">
                                    Web Development
                                </a>
                                </li> <!-- /.nav-item -->
                                <li class="nav__item"><a class="nav__item-link"
                                                         href="{{route('uiuxPage')}}">
                                    UI/UX
                                </a>
                                </li> <!-- /.nav-item -->
                            </ul>
                        </li><!-- /.nav-item -->
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->
                <ul class="navbar-actions list-unstyled mb-0 d-flex align-items-center">
                    <li class="d-none d-xl-block">
                        <a href="{{route('contact')}}" class="btn action__btn-contact">Contacts</a>
                    </li>
                </ul><!-- /.navbar-actions -->
            </div><!-- /.container -->
        </nav><!-- /.navabr -->
    </header><!-- /.Header -->