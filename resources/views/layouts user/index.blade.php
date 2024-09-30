<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Santa Cruz - Centro de Formação</title>
    {{-- {{ asset('Template User/') }} --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- Custom CSS -->
    <style>
        .navbar {
            margin-bottom: 0;
        }

        .navbar-brand img {
            height: 50px;
        }

        /* Mouse hover no menu dropdown */
        .dropdown-menu a:hover {
            background-color: #ffa500;
            color: white;
        }

        /* Carousel altura personalizada */
        .carousel-item img {
            height: 600px;
            object-fit: cover;
        }

        /* Estilo para o botão "READ MORE" */
        .btn-warning {
            background-color: #ffa500;
            border: none;
        }

        .btn-warning:hover {
            background-color: #ff8c00;
        }

        /* Texto sobreposto no carrossel */
        .carousel-caption {
            bottom: 150px;
        }

        .carousel-caption h1 {
            font-size: 3.5rem;
        }

        /* Estilo do bloco de informações abaixo do carrossel */
        .info-text {
            text-align: center;
            margin-top: 50px;
        }

        #testimonials {
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        #testimonials {
            padding: 50px 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        .owl-carousel .item {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 18px;
        }

        .owl-carousel .owl-nav button {
            background-color: transparent;
            border: none;
            font-size: 24px;
            color: #333;
        }
    </style>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('Template User/css/bootstrap.css') }}">
    <!-- DL Menu CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/js/dl-menu/component.css') }}">
    <!--SLICK SLIDER CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Template User/css/slick.css') }}" />
    <!-- Font Awesome StyleSheet CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/css/font-awesome.min.css') }}">
    <!-- Font Awesome StyleSheet CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/css/svg.css') }}">
    <!-- Pretty Photo CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/css/prettyPhoto.css') }}">
    <!-- Shortcodes CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/css/shortcodes.css') }}">
    <!-- Widget CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/css/widget.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/css/typography.css') }}">
    <!-- Custom Main StyleSheet CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/style.css') }}">
    <!-- Color CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/css/color.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('Template User/css/responsive.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


</head>

<body>
    <!--iqoniq Wrapper Start-->
    <div class="iq_wrapper">
        <!--Header Wrap Start-->
        <header class="iq_header_1">
            <div class="container">
                <!--Logo Wrap Start-->
                <div class="iq_logo">
                    <a href="#"><img src="{{ asset('Template User/images/logo.jpg') }}" alt="Iqoniq Themes"></a>
                </div>
                <!--Logo Wrap Start-->
                <!--Top Strip Wrap Start-->
                <div class="iq_ui_element">
                    <!--Top Strip Wrap Start-->
                    <div class="iq_top_strip">
                        <div class="iq_top_contact pull-left">
                            <a href="#"> Call us : +01 123 456</a>
                            <a href="#"> Email : info@info.com</a>
                        </div>
                        <div class="iq_time_wrap pull-right"><i class="fa fa-clock-o"></i> Mon - Sat : 09:00 am - 05:30
                            pm </div>
                    </div>
                    <!--Top Strip Wrap End-->
                    <!--Navigation wrap Start-->
                    <div class="navigation-wrapper pull-left">
                        <div class="navigation pull-left">
                            <ul>
                                <li class="active"><a href="index-2.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Courses</a>
                                    <ul class="children">
                                        <li><a href="course-detail.html">course detail</a></li>
                                        <li><a href="courses-small.html">Courses Small</a></li>
                                        <li><a href="our-courses-list.html">Our Courses List</a></li>
                                        <li><a href="our-courses.html">Our Courses</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul class="children">
                                        <li><a href="blog-large.html">Blog Large</a></li>
                                        <li><a href="blog-medium.html">blog medium</a></li>
                                        <li><a href="blog-small.html">Blog small</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Event</a>
                                    <ul class="children">
                                        <li><a href="event-detail.html">Event Detail</a></li>
                                        <li><a href="event-calender.html">Even Calender</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Staff</a>
                                    <ul class="children">
                                        <li><a href="our-teachers.html">Our Staff</a></li>
                                        <li><a href="staff-detail.html">Staff Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Gallery</a>
                                    <ul class="children">
                                        <li><a href="gallery-medium.html">Gallery medium</a></li>
                                        <li><a href="gallery-small.html">Gallery small</a></li>
                                        <li><a href="gallery-mesnory.html">Masonry Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Countact Us</a></li>
                                {{-- <li><a href="{{route("login")}}">Entrar</a></li> --}}
                            </ul>
                        </div>
                        <!--DL Menu Start-->
                        <div id="mg-responsive-navigation" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li class="menu-item mg-parent-menu">
                                    <a href="index-2.html">home</a>
                                </li>
                                <li><a href="about-us.html">About us</a></li>
                                <li class="menu-item mg-parent-menu"><a href="#">course</a>
                                    <ul class="dl-submenu">
                                        <li><a href="course-detail.html">course detail</a></li>
                                        <li><a href="courses-small.html">Courses Small</a></li>
                                        <li><a href="our-courses-list.html">Our Courses List</a></li>
                                        <li><a href="our-courses.html">Our Courses</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item mg-parent-menu"><a href="#">Blog</a>
                                    <ul class="dl-submenu">
                                        <li><a href="blog-large.html">Blog Large</a></li>
                                        <li><a href="blog-medium.html">blog medium</a></li>
                                        <li><a href="blog-small.html">Blog small</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item mg-parent-menu"><a href="#">Event</a>
                                    <ul class="dl-submenu">
                                        <li><a href="event-detail.html">Event Detail</a></li>
                                        <li><a href="event-calender.html">Even Calender</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item mg-parent-menu"><a href="#">Staff</a>
                                    <ul class="dl-submenu">
                                        <li><a href="our-teachers.html">Our Staff</a></li>
                                        <li><a href="staff-detail.html">Staff Detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item mg-parent-menu"><a href="#">Gallery</a>
                                    <ul class="dl-submenu">
                                        <li><a href="gallery-medium.html">Gallery medium</a></li>
                                        <li><a href="gallery-small.html">Gallery small</a></li>
                                        <li><a href="gallery-mesnory.html">Masonry Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item mg-parent-menu">
                                    <a href="contact-us.html">contact us</a>
                                </li>
                            </ul>
                        </div>
                        <!--DL Menu END-->
                        <!--Search Wrap Start-->
                        <div class="iq_search pull-right">
                            <button data-toggle="modal" data-target="#search-box"><i
                                    class="fa fa-search"></i></button>
                        </div>
                        <!--Search Wrap End-->
                    </div>
                    <!--Navigation wrap End-->
                </div>
                <!--Top Strip Wrap End-->
            </div>
        </header>
        <!--Header Wrap End-->
        <!--Banner Wrap Start-->

        {{-- carousel --}}
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('Template User/extra-images/banner-01.jpg') }}" class="d-block w-100"
                        alt="Imagem 1">
                    <div class="iq-caption-wrapper text-left">
                        <div class="iq_banner_caption container">
                            <div class="iq-caption">
                                <div class="iq-caption-title">The Best Learning Institution</div>
                                <div class="iq-caption-text">welcome to our university</div>
                                <div class="iq-caption-contant">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </div>
                                <div class="iq_link_1">Read More</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Template User/extra-images/banner-02.jpg') }}" class="d-block w-100"
                        alt="Imagem 2">
                    <div class="iq-caption-wrapper text-center">
                        <div class="iq_banner_caption container">
                            <div class="iq-caption">
                                <div class="iq-caption-title">The Best Learning Institution</div>
                                <div class="iq-caption-text">welcome to our university</div>
                                <div class="iq-caption-contant">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </div>
                                <div class="iq_link_1">Read More</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Template User/extra-images/banner-03.jpg') }}" class="d-block w-100"
                        alt="Imagem 3">
                    <div class="iq-caption-wrapper text-right">
                        <div class="iq_banner_caption container">
                            <div class="iq-caption">
                                <div class="iq-caption-title">The Best Learning Institution</div>
                                <div class="iq-caption-text">welcome to our university</div>
                                <div class="iq-caption-contant">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </div>
                                <div class="iq_link_1">Read More</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{-- carouse end --}}

        <!--Iqoniq Content Start-->
        <div class="iq_content_wrap">
            <!--We Are Professional Wrap Start-->
            <div class="we_professional_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <section>
                                <!--Heading Wrap Start-->
                                <div class="iq_heading_1 text-left">
                                    <h4>We Are <span>Professional</span></h4>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudin,
                                        <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh
                                        id elit.
                                    </p>
                                </div>
                                <!--Heading Wrap End-->
                                <div class="row">
                                    <!--Services Start-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="iq_professional_services">
                                            <span class="icon-lecture">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span><span class="path18"></span><span
                                                    class="path19"></span><span class="path20"></span><span
                                                    class="path21"></span><span class="path22"></span><span
                                                    class="path23"></span><span class="path24"></span><span
                                                    class="path25"></span><span class="path26"></span><span
                                                    class="path27"></span><span class="path28"></span><span
                                                    class="path29"></span><span class="path30"></span><span
                                                    class="path31"></span><span class="path32"></span><span
                                                    class="path33"></span><span class="path34"></span><span
                                                    class="path35"></span><span class="path36"></span><span
                                                    class="path37"></span><span class="path38"></span>
                                            </span>
                                            <h5><a href="#">Business</a></h5>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                                auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat
                                                ipsum nec sagittis.</p>
                                        </div>
                                    </div>
                                    <!--Services End-->
                                    <!--Services Start-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="iq_professional_services">
                                            <span class="icon-doctor-2">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span><span class="path18"></span><span
                                                    class="path19"></span><span class="path20"></span><span
                                                    class="path21"></span><span class="path22"></span><span
                                                    class="path23"></span><span class="path24"></span><span
                                                    class="path25"></span><span class="path26"></span><span
                                                    class="path27"></span><span class="path28"></span><span
                                                    class="path29"></span><span class="path30"></span><span
                                                    class="path31"></span><span class="path32"></span><span
                                                    class="path33"></span><span class="path34"></span><span
                                                    class="path35"></span><span class="path36"></span><span
                                                    class="path37"></span><span class="path38"></span>
                                            </span>
                                            <h5><a href="#">Neuroscience</a></h5>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                                auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat
                                                ipsum nec sagittis.</p>
                                        </div>
                                    </div>
                                    <!--Services End-->
                                    <!--Services Start-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="iq_professional_services">
                                            <span class="icon-medical-3">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span><span class="path18"></span><span
                                                    class="path19"></span><span class="path20"></span><span
                                                    class="path21"></span><span class="path22"></span><span
                                                    class="path23"></span><span class="path24"></span>
                                            </span>
                                            <h5><a href="#">Zoology</a></h5>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                                auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat
                                                ipsum nec sagittis.</p>
                                        </div>
                                    </div>
                                    <!--Services End-->
                                    <!--Services Start-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="iq_professional_services">
                                            <span class="icon-debate">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span>
                                            </span>
                                            <h5><a href="#">Politics</a></h5>
                                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                                auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat
                                                ipsum nec sagittis.</p>
                                        </div>
                                    </div>
                                    <!--Services End-->
                                </div>
                                <!--Professional Services Wrap End-->
                            </section>
                        </div>
                        <!--Search Wrap Start-->
                        <div class="col-md-4">
                            <div class="iq_search_courses">
                                <h4>Search Courses</h4>
                                <form>
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <!--Input End-->
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <input type="email" placeholder="E-mail">
                                    </div>
                                    <!--Input End-->
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <!--Input End-->
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <select name="Dicipline">
                                            <option value="0">Dicipline</option>
                                            <option value="9">Saab</option>
                                            <option value="2">Fiat</option>
                                            <option value="3">Audi</option>
                                        </select>
                                    </div>
                                    <!--Input End-->
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <select name="Course_Length">
                                            <option value="0">Course Length</option>
                                            <option value="9">Saab</option>
                                            <option value="2">Fiat</option>
                                            <option value="3">Audi</option>
                                        </select>
                                    </div>
                                    <!--Input End-->
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <select name="Study_Level">
                                            <option value="0">Study Level</option>
                                            <option value="9">Saab</option>
                                            <option value="2">Fiat</option>
                                            <option value="3">Audi</option>
                                        </select>
                                    </div>
                                    <!--Input End-->
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <select name="Campus_Location">
                                            <option value="0">Campus Location</option>
                                            <option value="9">Saab</option>
                                            <option value="2">Fiat</option>
                                            <option value="3">Audi</option>
                                        </select>
                                    </div>
                                    <!--Input End-->
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <input type="text" placeholder="Key Words">
                                    </div>
                                    <!--Input End-->
                                    <!--Input Start-->
                                    <div class="iq-input">
                                        <input class="iq_link_1" type="submit" value="Search">
                                    </div>
                                    <!--Input End-->
                                </form>
                            </div>
                        </div>
                        <!--Search Wrap End-->
                    </div>
                </div>
            </div>
            <!--We Are Professional Wrap End-->
            <!--Get Best Knowledge Wrap Start-->
            <section class="iq_best_knowledge_bg">
                <!--Best Knowledge Description Wrap Start-->
                <div class="col-md-6 col-sm-offset-6 col-md-offset-6">
                    <div class="iq_knowledge_des">
                        <!--Heading Wrap Start-->
                        <div class="iq_heading_1 text-left">
                            <h4>Get The <span>Best knowledge</span><br>From Us</h4>
                        </div>
                        <!--Heading Wrap End-->
                        <h5>Have the Courage to have Convictions</h5>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                            nibh id elit</p>
                        <a class="iq_link_1" href="#">Join Us</a>
                    </div>
                </div>
                <!--Best Knowledge Description Wrap Start-->
            </section>
            <!--Get Best Knowledge Wrap End-->
            <!--Our Featured Courses Wrap Start-->
            <section>
                <div class="container">
                    <!--Heading Wrap Start-->
                    <div class="iq_heading_1 text-center">
                        <h4>Our Featured <span>Courses</span></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin,
                            <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                    </div>
                    <!--Heading Wrap End-->
                    <!--Tab Menu Wrap Start-->
                    <div class="iq_tab_menu">
                        <ul id="tabs" data-tabs="tabs">
                            <li class="active"><a data-toggle="tab" href="#featured">Featured</a></li>
                            <li><a data-toggle="tab" href="#popular">popular</a></li>
                        </ul>
                    </div>
                    <!--Tab Menu Wrap End-->
                    <!--Tab Menu Detail Wrap Start-->
                    <div id="my-tab-content" class="tab-content">
                        <div class="row tab-pane active" id="featured">
                            <!--Courses List Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="iq_course_list">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/featured-course-1.jpg') }}"
                                            alt="Image Here">
                                    </figure>
                                    <div class="iq_course_list_des">
                                        <div class="iq_course_icon">
                                            <span class="icon-student">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span><span class="path18"></span><span
                                                    class="path19"></span>
                                            </span>
                                        </div>
                                        <h5><a href="#">Computer & IT Courses</a></h5>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                                        <ul>
                                            <li>
                                                <!--RATING AREA START-->
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:100%;"></div>
                                                </div>
                                                <!--RATING AREA End-->
                                            </li>
                                            <li>101 Reviews</li>
                                            <li><i class="fa fa-user"></i>3.1 k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Courses List End-->
                            <!--Courses List Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="iq_course_list">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/featured-course-02.jpg') }}"
                                            alt="Image Here">
                                    </figure>
                                    <div class="iq_course_list_des">
                                        <div class="iq_course_icon">
                                            <span class="icon-lecture">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span><span class="path18"></span><span
                                                    class="path19"></span><span class="path20"></span><span
                                                    class="path21"></span><span class="path22"></span><span
                                                    class="path23"></span><span class="path24"></span><span
                                                    class="path25"></span><span class="path26"></span><span
                                                    class="path27"></span><span class="path28"></span><span
                                                    class="path29"></span><span class="path30"></span><span
                                                    class="path31"></span><span class="path32"></span><span
                                                    class="path33"></span><span class="path34"></span><span
                                                    class="path35"></span><span class="path36"></span><span
                                                    class="path37"></span><span class="path38"></span>
                                            </span>
                                        </div>
                                        <h5><a href="#">Business & Finance</a></h5>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                                        <ul>
                                            <li>
                                                <!--RATING AREA START-->
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:100%;"></div>
                                                </div>
                                                <!--RATING AREA End-->
                                            </li>

                                            <li>101 Reviews</li>
                                            <li><i class="fa fa-user"></i>3.1 k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Courses List End-->
                            <!--Courses List Start-->
                            <div class="col-md-4 hidden-sm">
                                <div class="iq_course_list">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/featured-course-03.jpg') }}"
                                            alt="Image Here">
                                    </figure>
                                    <div class="iq_course_list_des">
                                        <div class="iq_course_icon">
                                            <span class="icon-molecule">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span>
                                            </span>
                                        </div>
                                        <h5><a href="#">Social Courses</a></h5>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                                        <ul>
                                            <li>
                                                <!--RATING AREA START-->
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:100%;"></div>
                                                </div>
                                                <!--RATING AREA End-->
                                            </li>
                                            <li>101 Reviews</li>
                                            <li><i class="fa fa-user"></i>3.1 k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Courses List End-->
                        </div>
                        <div class="row tab-pane" id="popular">
                            <!--Courses List Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="iq_course_list">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/featured-course-01.jpg') }}"
                                            alt="Image Here">
                                    </figure>
                                    <div class="iq_course_list_des">
                                        <div class="iq_course_icon">
                                            <span class="icon-doctor-2">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span><span class="path18"></span><span
                                                    class="path19"></span><span class="path20"></span><span
                                                    class="path21"></span><span class="path22"></span><span
                                                    class="path23"></span><span class="path24"></span><span
                                                    class="path25"></span><span class="path26"></span><span
                                                    class="path27"></span><span class="path28"></span><span
                                                    class="path29"></span><span class="path30"></span><span
                                                    class="path31"></span><span class="path32"></span><span
                                                    class="path33"></span><span class="path34"></span><span
                                                    class="path35"></span><span class="path36"></span><span
                                                    class="path37"></span><span class="path38"></span>
                                            </span>
                                        </div>
                                        <h5><a href="#">Neuroscience Courses</a></h5>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                                        <ul>
                                            <li>
                                                <!--RATING AREA START-->
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:100%;"></div>
                                                </div>
                                                <!--RATING AREA End-->
                                            </li>
                                            <li>101 Reviews</li>
                                            <li><i class="fa fa-user"></i>3.1 k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Courses List End-->
                            <!--Courses List Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="iq_course_list">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/featured-course-02.jpg') }}"
                                            alt="Image Here">
                                    </figure>
                                    <div class="iq_course_list_des">
                                        <div class="iq_course_icon">
                                            <span class="icon-debate">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span>
                                            </span>
                                        </div>
                                        <h5><a href="#">Politics Courses</a></h5>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                                        <ul>
                                            <li>
                                                <!--RATING AREA START-->
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:100%;"></div>
                                                </div>
                                                <!--RATING AREA End-->
                                            </li>

                                            <li>101 Reviews</li>
                                            <li><i class="fa fa-user"></i>3.1 k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Courses List End-->
                            <!--Courses List Start-->
                            <div class="col-md-4 hidden-sm">
                                <div class="iq_course_list">
                                    <figure>
                                        <img src="{{ asset('Template User/extra-images/featured-course-03.jpg') }}"
                                            alt="Image Here">
                                    </figure>
                                    <div class="iq_course_list_des">
                                        <div class="iq_course_icon">
                                            <span class="icon-medical-3">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span><span
                                                    class="path11"></span><span class="path12"></span><span
                                                    class="path13"></span><span class="path14"></span><span
                                                    class="path15"></span><span class="path16"></span><span
                                                    class="path17"></span><span class="path18"></span><span
                                                    class="path19"></span><span class="path20"></span><span
                                                    class="path21"></span><span class="path22"></span><span
                                                    class="path23"></span><span class="path24"></span>
                                            </span>
                                        </div>
                                        <h5><a href="#">Zoology Courses</a></h5>
                                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                            auctor aliquet. Aenean sollicitudin, lorem quis bibendum </p>
                                        <ul>
                                            <li>
                                                <!--RATING AREA START-->
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:100%;"></div>
                                                </div>
                                                <!--RATING AREA End-->
                                            </li>
                                            <li>101 Reviews</li>
                                            <li><i class="fa fa-user"></i>3.1 k</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Courses List End-->
                        </div>
                    </div>
                    <!--Tab Menu Detail Wrap End-->
                </div>
            </section>
            <!--Our Featured Courses Wrap End-->
            <!--Our Gallery Wrap Start-->
            <section class="iq_gallery_bg">
                <!--Heading Wrap Start-->
                <div class="iq_heading_1 text-center">
                    <h4>Our <span>Gallery</span></h4>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin,
                        <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                    </p>
                </div>
                <!--Heading Wrap End-->
                <!--Gallery Menu Wrap Start-->
                <div id="filters" class="iq_gallery_menu">
                    <ul id="filterable-item-filter-1">
                        <li><a class="active" data-value="all">All</a></li>
                        <li><a data-value="1">Accounting</a></li>
                        <li><a data-value="2">Economics</a></li>
                        <li><a data-value="3">Finance</a></li>
                        <li><a data-value="4">Technologies</a></li>
                        <li><a data-value="5">Management</a></li>
                    </ul>
                </div>
                <!--Gallery Menu Wrap End-->
                <div id="filterable-item-holder-1" class="filterable_container main-gallery">
                    <!--Gallery List Wrap Start-->
                    <div class="col-md-4 col-sm-6 filterable-item all 1 2 3">
                        <div class="thumb">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/gallery-01.jpg') }}" alt="Image Here">
                                <figcaption class="overlay1">
                                    <div class="link-wrapper">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <h6>Lorem Ipsum</h6>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery List Wrap End-->
                    <!--Gallery List Wrap Start-->
                    <div class="col-md-4 col-sm-6 filterable-item all 1  5">
                        <div class="thumb">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/gallery-02.jpg') }}" alt="Image Here">
                                <figcaption class="overlay1">
                                    <div class="link-wrapper">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <h6>Lorem Ipsum</h6>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery List Wrap End-->
                    <!--Gallery List Wrap Start-->
                    <div class="col-md-4 col-sm-6 filterable-item all 1 2 5">
                        <div class="thumb">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/gallery-03.jpg') }}" alt="Image Here">
                                <figcaption class="overlay1">
                                    <div class="link-wrapper">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <h6>Lorem Ipsum</h6>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery List Wrap End-->
                    <!--Gallery List Wrap Start-->
                    <div class="col-md-4 col-sm-6 filterable-item all  2 4">
                        <div class="thumb">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/gallery-04.jpg') }}" alt="Image Here">
                                <figcaption class="overlay1">
                                    <div class="link-wrapper">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <h6>Lorem Ipsum</h6>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery List Wrap End-->
                    <!--Gallery List Wrap Start-->
                    <div class="col-md-4 col-sm-6 filterable-item all 1 2">
                        <div class="thumb">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/gallery-05.jpg') }}" alt="Image Here">
                                <figcaption class="overlay1">
                                    <div class="link-wrapper">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <h6>Lorem Ipsum</h6>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery List Wrap End-->
                    <!--Gallery List Wrap Start-->
                    <div class="col-md-4 col-sm-6 filterable-item all 1 3">
                        <div class="thumb">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/gallery-06.jpg') }}" alt="Image Here">
                                <figcaption class="overlay1">
                                    <div class="link-wrapper">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                        <h6>Lorem Ipsum</h6>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--Gallery List Wrap End-->
                </div>
                <div class="load-more">
                    <a class="iq_link_1" href="#">LOAD MORE</a>
                </div>
            </section>
            <!--Our Gallery Wrap End-->
            <!--UpComming Event Wrap Start-->
            <section class="iq_upcomming_bg">
                <div class="container">
                    <!--Heading Wrap Start-->
                    <div class="iq_heading_1 text-center">
                        <h4>Up Coming <span>Events</span></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin,
                            <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                    </div>
                    <!--Heading Wrap End-->
                    <!--Upcomming List Wrap Start-->
                    <div class="row">
                        <!--UpComming Event Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/upcomming-event-01.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>21 aug</span>
                                    <p>10:00 am</p>
                                    <h5><a href="#">Join us on the day of event</a></h5>
                                </div>
                            </div>
                        </div>
                        <!--UpComming Event End-->
                        <!--UpComming Event Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/upcomming-event-02.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>21 aug</span>
                                    <p>10:00 am</p>
                                    <h5><a href="#">Join us on the day of event</a></h5>
                                </div>
                            </div>
                        </div>
                        <!--UpComming Event End-->
                        <!--UpComming Event Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/upcomming-event-03.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>21 aug</span>
                                    <p>10:00 am</p>
                                    <h5><a href="#">Join us on the day of event</a></h5>
                                </div>
                            </div>
                        </div>
                        <!--UpComming Event End-->
                        <!--UpComming Event Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/upcomming-event-04.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>21 aug</span>
                                    <p>10:00 am</p>
                                    <h5><a href="#">Join us on the day of event</a></h5>
                                </div>
                            </div>
                        </div>
                        <!--UpComming Event End-->
                        <!--UpComming Event Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/upcomming-event-05.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>21 aug</span>
                                    <p>10:00 am</p>
                                    <h5><a href="#">Join us on the day of event</a></h5>
                                </div>
                            </div>
                        </div>
                        <!--UpComming Event End-->
                        <!--UpComming Event Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/upcomming-event-06.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>21 aug</span>
                                    <p>10:00 am</p>
                                    <h5><a href="#">Join us on the day of event</a></h5>
                                </div>
                            </div>
                        </div>
                        <!--UpComming Event End-->
                        <!--UpComming Event Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/upcomming-event-07.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>21 aug</span>
                                    <p>10:00 am</p>
                                    <h5><a href="#">Join us on the day of event</a></h5>
                                </div>
                            </div>
                        </div>
                        <!--UpComming Event End-->
                        <!--UpComming Event Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="iq_upcomming_event">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/upcomming-event-08.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="iq_upcomming_des">
                                    <span>21 aug</span>
                                    <p>10:00 am</p>
                                    <h5><a href="#">Join us on the day of event</a></h5>
                                </div>
                            </div>
                        </div>
                        <!--UpComming Event End-->
                    </div>
                    <!--Upcomming List Wrap End-->
                </div>
            </section>
            <!--UpComming Event Wrap End-->
            <!--Number Counter Wrap Start-->
            <section class="iq_number_count_bg">
                <div class="container">
                    <div class="row">
                        <!--Number Counter Start-->
                        <div class="col-md-3 col-sm-3">
                            <div class="iq_counter">
                                <i class="icon-lecture">
                                    <span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span
                                        class="path17"></span><span class="path18"></span><span
                                        class="path19"></span><span class="path20"></span><span
                                        class="path21"></span><span class="path22"></span><span
                                        class="path23"></span><span class="path24"></span><span
                                        class="path25"></span><span class="path26"></span><span
                                        class="path27"></span><span class="path28"></span><span
                                        class="path29"></span><span class="path30"></span><span
                                        class="path31"></span><span class="path32"></span><span
                                        class="path33"></span><span class="path34"></span><span
                                        class="path35"></span><span class="path36"></span><span
                                        class="path37"></span><span class="path38"></span>
                                </i>
                                <span class="counter">2021</span>
                                <h6>Total Lectures</h6>
                            </div>
                        </div>
                        <!--Number Counter End-->
                        <!--Number Counter Start-->
                        <div class="col-md-3 col-sm-3">
                            <div class="iq_counter">
                                <i class="icon-books">
                                    <span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span
                                        class="path17"></span>
                                </i>
                                <span class="counter">1411</span>
                                <h6>Total Courses</h6>
                            </div>
                        </div>
                        <!--Number Counter End-->
                        <!--Number Counter Start-->
                        <div class="col-md-3 col-sm-3">
                            <div class="iq_counter">
                                <i class="icon-drawing">
                                    <span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span
                                        class="path17"></span><span class="path18"></span><span
                                        class="path19"></span><span class="path20"></span><span
                                        class="path21"></span><span class="path22"></span><span
                                        class="path23"></span><span class="path24"></span><span
                                        class="path25"></span><span class="path26"></span><span
                                        class="path27"></span><span class="path28"></span><span
                                        class="path29"></span><span class="path30"></span><span
                                        class="path31"></span><span class="path32"></span><span
                                        class="path33"></span><span class="path34"></span><span
                                        class="path35"></span>
                                </i>
                                <span class="counter">1591</span>
                                <h6>Total Tests</h6>
                            </div>
                        </div>
                        <!--Number Counter End-->
                        <!--Number Counter Start-->
                        <div class="col-md-3 col-sm-3">
                            <div class="iq_counter">
                                <i class="icon-diploma-1">
                                    <span class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span
                                        class="path7"></span><span class="path8"></span><span
                                        class="path9"></span><span class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span class="path14"></span><span
                                        class="path15"></span><span class="path16"></span><span
                                        class="path17"></span><span class="path18"></span><span
                                        class="path19"></span><span class="path20"></span><span
                                        class="path21"></span><span class="path22"></span><span
                                        class="path23"></span><span class="path24"></span><span
                                        class="path25"></span><span class="path26"></span><span
                                        class="path27"></span><span class="path28"></span>
                                </i>
                                <span class="counter">9921</span>
                                <h6>Total Classes</h6>
                            </div>
                        </div>
                        <!--Number Counter End-->
                    </div>
                </div>
            </section>
            <!--Number Counter Wrap End-->
            <!--Our Teacher Wrap Start-->
            <section>
                <div class="container">
                    <!--Heading Wrap Start-->
                    <div class="iq_heading_1 text-center">
                        <h4>Our <span>Teachers</span></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, </p>
                        <p>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                    </div>
                    <!--Heading Wrap End-->
                    <!--Teacher Wrap List Start-->
                    <div class="row">
                        <!--Teacher Thumb Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_teacher_style_1">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/teacher-01.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="text">
                                    <h4><a href="#">Anna Doe</a></h4>
                                    <h6>Language Instructor</h6>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudinris.</p>
                                    <ul class="iq_footer_social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Teacher Thumb End-->
                        <!--Teacher Thumb Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="iq_teacher_style_1">
                                <div class="text">
                                    <h4><a href="#">John Doe</a></h4>
                                    <h6>Vice President</h6>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudinris.</p>
                                    <ul class="iq_footer_social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/teacher-02.jpg') }}"
                                        alt="Image Here">
                                </figure>
                            </div>
                        </div>
                        <!--Teacher Thumb End-->
                        <!--Teacher Thumb Start-->
                        <div class="col-md-4 hidden-sm">
                            <div class="iq_teacher_style_1">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/teacher-03.jpg') }}"
                                        alt="Image Here">
                                </figure>
                                <div class="text">
                                    <h4><a href="#">Sara Adward</a></h4>
                                    <h6>Manager</h6>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                        aliquet. Aenean sollicitudinris.</p>
                                    <ul class="iq_footer_social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Teacher Thumb End-->
                    </div>
                    <!--Teacher Wrap List End-->
                </div>
            </section>
            <!--Our Teacher Wrap End-->
            <!--Our Blog Slider Start-->
            <section class="center-slider-wrap">
                <div class="container">
                    <!--Heading 1 Start-->
                    <div class="iq_heading_1 text-center">
                        <h4>Latest From <span> Our Blog</span></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin,
                            <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                        </p>
                    </div>
                    <!--Heading 1 End-->
                    <!--Slider Strat Start-->

                    <div class="blog-slider">
                        <div class="col-md-4 col-sm-6">
                            <!--Center Dec Start-->
                            <div class="center-dec">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/center-img.jpg') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h5><a href="#">Sed ut perspiciatis unde omnis iste natus error sit</a></h5>
                                    <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.
                                        Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
                                    <div class="text-footer pull-left">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-comments-o"></i></a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="iq_link_1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!--Center Dec End-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!--Center Dec Start-->
                            <div class="center-dec">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/center-img2.jpg') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h5><a href="#">Sed ut perspiciatis unde omnis iste natus error sit</a></h5>
                                    <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.
                                        Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
                                    <div class="text-footer pull-left">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-comments-o"></i></a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="iq_link_1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!--Center Dec End-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!--Center Dec Start-->
                            <div class="center-dec">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/center-img3.jpg') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h5><a href="#">Sed ut perspiciatis unde omnis iste natus error sit</a></h5>
                                    <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.
                                        Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
                                    <div class="text-footer pull-left">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-comments-o"></i></a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="iq_link_1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!--Center Dec End-->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!--Center Dec Start-->
                            <div class="center-dec">
                                <figure>
                                    <img src="{{ asset('Template User/extra-images/center-img.jpg') }}"
                                        alt="">
                                </figure>
                                <div class="text">
                                    <h5><a href="#">Sed ut perspiciatis unde omnis iste natus error sit</a></h5>
                                    <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.
                                        Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
                                    <div class="text-footer pull-left">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#"><i class="fa fa-comments-o"></i></a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="iq_link_1">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!--Center Dec End-->
                        </div>
                    </div>
                    <!--Slider Strat Start-->
                </div>
            </section>
            <!--Our Blog Slider End-->

            <!--Testimonial Slider Wrap Start-->
            <br>
            <div class="iq_heading_1 text-center">
                <h4>Testemunho de<span> Formandos</span></h4>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin,
                    <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                </p>
            </div>
            <section>
                <div class="container">
                    <div class="owl-carousel owl-theme">
                        <!--Testimonial Start-->
                        <div>
                            <div class="testimonial item">
                                <p>“ Recomendo para todos que querem melhorar suas habilidades na área. Muito prático e
                                    direto ao
                                    ponto! ”</p>
                                <div class="coures_instractor_thumb">
                                    <figure>
                                        <img src="extra-images/testimonial-nav1.jpg" alt="">
                                    </figure>
                                    <div class="thumb_capstion">
                                        <h5><a href="#">Jonatahan James</a></h5>
                                        <p>Former Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial End-->
                        <!--Testimonial Start-->
                        <div>
                            <div class="testimonial item">
                                <p>“ Ótima experiência de aprendizado, com suporte rápido e eficiente. Amei! ”</p>
                                <div class="coures_instractor_thumb">
                                    <figure>
                                        <img src="extra-images/testimonial-nav2.jpg" alt="">
                                    </figure>
                                    <div class="thumb_capstion">
                                        <h5><a href="#">Jonatahan James</a></h5>
                                        <p>Former Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial End-->
                        <!--Testimonial Start-->
                        <div>
                            <div class="testimonial item">
                                <p>“ O curso mudou minha vida! Os professores são excelentes e o material é muito
                                    completo. ”</p>
                                <div class="coures_instractor_thumb">
                                    <figure>
                                        <img src="extra-images/testimonial-nav3.jpg" alt="">
                                    </figure>
                                    <div class="thumb_capstion">
                                        <h5><a href="#">Jonatahan James</a></h5>
                                        <p>Former Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial End-->
                    </div>
                    <!--Testimonial Slider End-->
                </div>
            </section>

            <!--Testimonial Slider Wrap End-->
        </div>
        <!--Iqoniq Content End-->
        <!--Brand Slider Start-->
        <div class="brnd-slider-wrap">
            <div class="container">
                <div class="brnd-slider">
                    <div>
                        <a href="#" class="thumb">
                            <img src="{{ asset('Template User/extra-images/brand1.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="#" class="thumb">
                            <img src="{{ asset('Template User/extra-images/brand2.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="#" class="thumb">
                            <img src="{{ asset('Template User/extra-images/brand3.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="#" class="thumb">
                            <img src="{{ asset('Template User/extra-images/brand4.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="#" class="thumb">
                            <img src="{{ asset('Template User/extra-images/brand5.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="#" class="thumb">
                            <img src="{{ asset('Template User/extra-images/brand6.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="#" class="thumb">
                            <img src="{{ asset('Template User/extra-images/brand1.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Brand Slider End-->
        <!--Contact Info Wrap Start-->
        <div class="iq_contact_info">
            <div class="container">
                <ul>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <div class="iq_info_wrap">
                            <h5>University Address</h5>
                            <p>Abc Street , new town <span>Sydney</span></p>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <div class="iq_info_wrap">
                            <h5>Contact Number</h5>
                            <span>+ (0) 123 456 7891</span>
                            <span>+ (0) 123 456 7891</span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <div class="iq_info_wrap">
                            <h5>Email;</h5>
                            <a href="mailto:Info@info.com">Info@info.com</a>
                            <a href="mailto:Support@support.com">Support@support.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--Contact Info Wrap End-->
        <!--Footer Wrap Start-->
        <footer class="iq_footer_bg">
            <div class="container">
                <div class="row">
                    <!--Widget About Start-->
                    <div class="col-md-3 col-sm-6">
                        <div class="iq_uni_title">
                            <!--Widget Title Start-->
                            <h4>university of <span>education</span></h4>
                            <!--Widget Title End-->
                            <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et dolore .
                            </p>
                            <ul>
                                <li><span>Moday - Friday</span> 08:00- 05:00</li>
                                <li><span>Saturday</span> Closed</li>
                                <li><span>Sunday</span> Closed</li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget About End-->
                    <!--Widget Archive Start-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget_archive">
                            <!--Widget Title Start-->
                            <h5 class="widget-title"><span>Our</span> Services</h5>
                            <!--Widget Title End-->
                            <!--Social Media Start-->
                            <ul>
                                <li>
                                    <a href="#">Safety & Risk Management</a>
                                </li>
                                <li>
                                    <a href="#">Facilities Services</a>
                                </li>
                                <li>
                                    <a href="#">University Police</a>
                                </li>
                                <li>
                                    <a href="#">Campus Planning</a>
                                </li>
                                <li>
                                    <a href="#">Mail Services</a>
                                </li>
                                <li>
                                    <a href="#">Facilities IT</a>
                                </li>
                            </ul>
                            <!--Social Media End-->
                        </div>
                    </div>
                    <!--Widget Archive End-->
                    <!--Widget Flickr Start-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-flickr">
                            <!-- Widget Title Start-->
                            <h5 class="widget-title"><span>Our</span> Photo</h5>
                            <!-- Widget Title End-->
                            <div class="flickr-wrap">
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr1.jpg') }}"
                                        alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr2.jpg') }}"
                                        alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr3.jpg') }}"
                                        alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr4.jpg') }}"
                                        alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr5.jpg') }}"
                                        alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr6.jpg') }}"
                                        alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr4.jpg') }}"
                                        alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr5.jpg') }}"
                                        alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr6.jpg') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--Widget Flickr End-->
                    <!--Widget News Letter Start-->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget iq_footer_newsletter">
                            <!--Widget Title Start-->
                            <h5 class="widget-title"><span>Our</span> Newsletter</h5>
                            <!--Widget Title End-->
                            <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et dolore .
                            </p>
                            <form class="iq-input">
                                <input placeholder="Search ..." type="text">
                                <label class="iq-input-icon"><input type="submit"></label>
                            </form>
                            <!--Widget Title Start-->
                            <h5 class="widget-title border-none"><span>Our</span> Connected</h5>
                            <!--Widget Title Start-->
                            <ul class="iq_footer_social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Widget News Letter End-->
                </div>
            </div>
        </footer>
        <!--Footer Wrap End-->
        <!--Copy Right Start-->
        <div class="footer_strip">
            <h5><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></h5>
        </div>
        <!--Copy Right End-->
        <!-- Modal -->
        <div class="modal fade" id="search-box" role="dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-dialog">
                <!--SEARCH section STARTS-->
                <div class="iqoniq_courses_search">
                    <div class="container">
                        <!--Heading Wrap Start-->
                        <div class="iq_heading_1 text-center">
                            <h4>Search For<span>Our Courses</span></h4>
                            <p>Fill The Below Form and Star Searching</p>
                        </div>
                        <!--Heading Wrap End-->
                        <!--iqoniq FORM STARTS-->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!--Iconiq Input STARTS-->
                                <div class="iq-input">
                                    <input class="first_input" type="text" placeholder="Search Words">
                                </div>
                                <!--Iconiq Input End-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!--Iconiq Input STARTS-->
                                <div class="iq-input">
                                    <select name="Category">
                                        <option value="0">Category</option>
                                        <option value="9">Publishing Date</option>
                                        <option value="2">Publishing Date</option>
                                        <option value="3">Publishing Date</option>
                                    </select>
                                </div>
                                <!--Iconiq Input End-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!--Iconiq Input STARTS-->
                                <div class="iq-input">
                                    <select name="Category">
                                        <option value="0">Category</option>
                                        <option value="9">Publishing Date</option>
                                        <option value="2">Publishing Date</option>
                                        <option value="3">Publishing Date</option>
                                    </select>
                                </div>
                                <!--Iconiq Input End-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!--Iconiq Input STARTS-->
                                <div class="iq-input">
                                    <input class="iq_link_1" type="submit" value="Start Search">
                                </div>
                                <!--Iconiq Input End-->
                            </div>
                        </div>
                        <!--iqoniq FROM END-->
                    </div>
                </div>
                <!--SEARCH section ENDS-->
            </div>
        </div>
    </div>
    <!--iqoniq Wrapper End-->
    <!--Javascript Library-->
    <script src="{{ asset('Template User/js/jquery.js') }}"></script>
    <!--Bootstrap core JavaScript-->
    <script src="{{ asset('Template User/js/bootstrap.min.js') }}"></script>
    <!--SLICK SLIDER JavaScript-->
    <script src="{{ asset('Template User/js/slick.min.js') }}"></script>
    <!--Dl Menu Script-->
    <script src="{{ asset('Template User/js/dl-menu/modernizr.custom.js') }}"></script>
    <script src="{{ asset('Template User/js/dl-menu/jquery.dlmenu.js') }}"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('Template User/js/jquery.prettyPhoto.js') }}"></script>
    <!--Image Filterable JavaScript-->
    <script src="{{ asset('Template User/js/jquery-filterable.js') }}"></script>
    <!--Number Count (Waypoints) JavaScript-->
    <script src="{{ asset('Template User/js/waypoints-min.js') }}"></script>
    <!--Custom JavaScript-->

    {{-- é neste script ou arquivo onde esta o problema: custom.js --}}
    <script src="{{ asset('Template User/js/custom.js') }}"></script>
    <!-- Scripts do Bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>

</html>
