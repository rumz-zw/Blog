<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>Blog</title>

    <!-- Theme style CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Header Area -->
    <header class="main_header_area" id="header">
        <div class="container">
            <div class="header_menu">
                <nav class="navbar navbar-expand-lg">
                    @guest
                    <a class="nav-link" href="/login">Login</a>
                    @else
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('Logout-form').submit();">Logout</a>
                    @endguest
                    <form id="Logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <!-- Small Divice Menu-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>

                    <div class="collapse navbar-collapse navbar_supported">
                        <ul class="navbar-nav">
                            <li><a class="nav-link" href="/">Home</a></li>
                            <li><a class="nav-link" href="/about">About</a></li>
                            <li><a class="nav-link" href="/blog">Blog</a></li>
                            <li><a class="nav-link" href="/contact">Contact us</a></li>
                            <li class="search_box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type and hit enter">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <ul class="search_button_content nav">
                    <li class="dropdown search_dropbown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-search"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <input type="text" placeholder="Search..">
                                <span><i class="fa fa-search"></i></span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Header Area -->

    @yield('content')

    <!-- Connect with us -->
    <section class="connect_with_us">
        <div class="container">
            <h2>Connect with us</h2>
            <ul class="contact_with_socail">
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- End Connect with us -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_inner row">
                <div class="col-lg-5 col-md-6 footer_logo">
                    <a href="index-2.html"><img src="images/logo.png" alt=""></a>
                    <p>Established in 2013 as the first cloud mining provider, Blog has become a multi-functional Blog Categories, trusted by over a million users.</p>
                    <address>
                        <span>LOCATION</span>
                        <p>12/4 New Yourk R Block Street 2101 USA</p>
                    </address>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="subscribe">
                        <h4>Subscribe</h4>
                        <p>Sign up for our mailing list to get latest updates and offers</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                            </div>
                        </div>
                        <h6>Working Hours : Monday-Saturday <span>Close : Sunday</span></h6>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 resources">
                    <h4>Short Link</h4>
                    <ul class="resources_list">
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Bug Bounty Program</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="shop.html">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- jQuery v3.2.1 -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap v4.1.0 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Extra Plugin -->
    <script src="vendors/animate-css/wow.min.js"></script>

    <!-- Theme js / Custom js -->
    <script src="js/theme.js"></script>
</body>

</html>