@extends('layouts user.admin')
@section('titulo', 'Cursos')
@section('conteudo')
    <div class="iner_banner">
        <div class="container">
            <h5>Cursos</h5>
            <div class="banner_iner_capstion">
                <ul>
                    <li><a href="#">ínicio</a></li>
                    <li><a href="#">Cursos</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="iq_content_wrap">
        <!--OUR CORSES INPNER PAGE Start-->
        <section class="iqoniq1_our_courses_inpg">
            <div class="container">
                <!-- Courses Tabs -->
                <div class="list_setting">
                    <!-- Courses Tabs Nav Start -->
                    <ul class="iqoniq-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Todos" aria-controls="Todos" role="tab"
                                data-toggle="tab">Todos</a></li>
                        <li role="presentation"><a href="#recommended" aria-controls="recommended" role="tab"
                                data-toggle="tab">Recomendado</a></li>
                        <li role="presentation"><a href="#newcourses" aria-controls="newcourses" role="tab"
                                data-toggle="tab">Novos Cursos</a></li>
                        <li role="presentation"><a href="#lastcall" aria-controls="lastcall" role="tab"
                                data-toggle="tab">Last Call</a></li>
                    </ul>
                    <!-- Courses Tabs Nav End -->
                </div>
                <!-- Courses Tabs -->
                <div class="courses_tabs">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Todos">
                            <!-- Courses Slider Start -->

                                <div class="courses-slider">
                                    
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Computer &amp; IT Courses</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-2.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Photography lectures</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-08.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Developing Mobile Apps</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-4.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Business & Finance</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Computer &amp; IT Courses</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                </div>
                                <!-- Courses Slider End -->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="recommended">
                                <!-- Courses Slider Start -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Computer &amp; IT Courses</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-2.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Photography lectures</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-08.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Developing Mobile Apps</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-4.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Business & Finance</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Computer &amp; IT Courses</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-2.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Photography lectures</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                </div>
                                <!-- Courses Slider End -->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="newcourses">
                                <!-- Courses Slider Start -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Computer &amp; IT Courses</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->

                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-2.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Photography lectures</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-08.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Developing Mobile Apps</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-4.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Business & Finance</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-2.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Photography lectures</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Computer &amp; IT Courses</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                </div>
                                <!-- Courses Slider End -->
                            </div>
                            <div role="tabpanel" class="tab-pane" id="lastcall">
                                <!-- Courses Slider Start -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Computer &amp; IT Courses</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-2.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Photography lectures</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-08.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Developing Mobile Apps</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-4.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Business & Finance</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                            <!-- popular thumb end -->
                                        </div>
                                        <!--courses popular thumb end -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--courses popular thumb start -->
                                        <div class="coureses_Popular_thumb">
                                            <figure>
                                                <img alt="Image Here"
                                                    src="{{ asset('Template User/extra-images/featured-course-2.jpg') }}">
                                                <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                            </figure>
                                            <!-- popular thumb start -->
                                            <div class="Popular_capstion_thumb">
                                                <!-- popular caption start -->
                                                <div class="popular_capstion">
                                                    <h5><a href="#">Photography lectures</a></h5>
                                                    <div class="map_icon"><i class="fa fa-map-marker"></i>Education
                                                        University
                                                    </div>
                                                    <!--RATING AREA START-->
                                                    <div class="rating_down">
                                                        <div class="rating_up" style="width:100%;"></div>
                                                    </div>
                                                    <!--RATING AREA End-->
                                                    <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit
                                                        auctor
                                                        aliquet. </p>
                                                </div>
                                                <!-- popular caption end -->
                                                <!-- popular caption bottom start -->
                                                <ul class="popular_capstion_bottom">
                                                    <li>
                                                        <span>Undergraduate</span>
                                                        <span class="right">Full Time</span>
                                                    </li>
                                                    <li>
                                                        <span>3 Years</span>
                                                        <span class="right">13 +</span>
                                                    </li>
                                                </ul>
                                                <!-- popular caption bottom end -->
                                                <span class="price"><strong>$ 69, 00</strong>per year</span>
                                            </div>
                                        </div>
                                        <!-- popular thumb end -->
                                    </div>
                                    <!--courses popular thumb end -->
                                </div>
                                <div class="col-md-4">
                                    <!--courses popular thumb start -->
                                    <div class="coureses_Popular_thumb">
                                        <figure>
                                            <img alt="Image Here"
                                                src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}">
                                            <a class="iq_link_1" href="{{ url('show', []) }}">Ver Detalhes</a>
                                        </figure>
                                        <!-- popular thumb start -->
                                        <div class="Popular_capstion_thumb">
                                            <!-- popular caption start -->
                                            <div class="popular_capstion">
                                                <h5><a href="#">Computer &amp; IT Courses</a></h5>
                                                <div class="map_icon"><i class="fa fa-map-marker"></i>Education University
                                                </div>
                                                <!--RATING AREA START-->
                                                <div class="rating_down">
                                                    <div class="rating_up" style="width:100%;"></div>
                                                </div>
                                                <!--RATING AREA End-->
                                                <p>This is Photoshop's version of Lorem Ipsum. Proin nibh vel velit auctor
                                                    aliquet. </p>
                                            </div>
                                            <!-- popular caption end -->
                                            <!-- popular caption bottom start -->
                                            <ul class="popular_capstion_bottom">
                                                <li>
                                                    <span>Undergraduate</span>
                                                    <span class="right">Full Time</span>
                                                </li>
                                                <li>
                                                    <span>3 Years</span>
                                                    <span class="right">13 +</span>
                                                </li>
                                            </ul>
                                            <!-- popular caption bottom end -->
                                            <span class="price"><strong>$ 69, 00</strong>per year</span>
                                        </div>
                                        <!-- popular thumb end -->
                                    </div>
                                    <!--courses popular thumb end -->
                                </div>
                            </div>
                            <!-- Courses Slider End -->
                        </div>
                    </div>
                    <!-- Tab panes -->
                </div>
                <!-- Courses Tabs -->
            </div>
        </section>
        <section>
            <div class="container">
                <!--Heading 1 Start-->
                <div class="iq_heading_1 text-center">
                    <h4>related<span> courses</span></h4>
                </div>
                <!--Heading 1 End-->
                <div class="owl-carousel owl-theme">

                    <!--Courses List Start-->
                    <div class="testimonial item">
                        <div class="">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/featured-course-07.jpg') }}"
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
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet.
                                    Aenean sollicitudin, lorem quis bibendum </p>
                                <ul>
                                    <li>
                                        <!--RATING AREA START-->
                                        <div class="rating_down">
                                            <div class="rating_up" style="width:100%;"></div>
                                        </div>
                                        <!--RATING AREA End-->
                                    </li>
                                    <li>101 Visto</li>
                                    <li><i class="fa fa-user"></i>3.1 k</li>
                                </ul>
                            </div>
                            <a class="iq_link_1" href="#">Inscrever-se</a>
                        </div>
                    </div>
                    <!--Courses List End-->
                    <!--Courses List Start-->
                    <div class="testimonial item">
                        <div class="">
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
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet.
                                    Aenean sollicitudin, lorem quis bibendum </p>
                                <ul>
                                    <li>
                                        <!--RATING AREA START-->
                                        <div class="rating_down">
                                            <div class="rating_up" style="width:100%;"></div>
                                        </div>
                                        <!--RATING AREA End-->
                                    </li>

                                    <li>101 Visto</li>
                                    <li><i class="fa fa-user"></i>3.1 k</li>
                                </ul>
                            </div>
                            <a class="iq_link_1" href="#">Inscrever-se</a>
                        </div>
                    </div>
                    <!--Courses List End-->
                    <!--Courses List Start-->
                    <div class="testimonial item">
                        <div class="">
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
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet.
                                    Aenean sollicitudin, lorem quis bibendum </p>
                                <ul>
                                    <li>
                                        <!--RATING AREA START-->
                                        <div class="rating_down">
                                            <div class="rating_up" style="width:100%;"></div>
                                        </div>
                                        <!--RATING AREA End-->
                                    </li>
                                    <li>101 Visto</li>
                                    <li><i class="fa fa-user"></i>3.1 k</li>
                                </ul>
                            </div>
                            <a class="iq_link_1" href="#">Inscrever-se</a>
                        </div>
                    </div>
                    <!--Courses List End-->
                    <!--Courses List Start-->
                    <div class="item">
                        <div class="">
                            <figure>
                                <img src="{{ asset('Template User/extra-images/featured-course-04.jpg') }}"
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
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet.
                                    Aenean sollicitudin, lorem quis bibendum </p>
                                <ul>
                                    <li>
                                        <!--RATING AREA START-->
                                        <div class="rating_down">
                                            <div class="rating_up" style="width:100%;"></div>
                                        </div>
                                        <!--RATING AREA End-->
                                    </li>
                                    <li><i class="fa fa-user"></i>3.1 k</li>
                                </ul>
                            </div>
                            <a class="iq_link_1" href="#">Inscrever-se</a>
                        </div>
                    </div>
                    <!--Courses List End-->
                </div>
            </div>
    </div>
    </section>
    </div>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000, // Tempo de transição mais suave
                smartSpeed: 1000, // Suavidade na transição manual
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

@endsection
