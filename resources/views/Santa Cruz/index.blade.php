@extends('Santa Cruz.admin')
@section('titulo', 'ínicio')
@section('conteudo')
    <!-- Section: home -->
    <section id="home">

        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
            <div class="rev_slider" data-version="5.0">
                <ul>

                    <!-- SLIDE 1 -->
                    <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                        data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="{{ asset('LearnPress-Education-Courses/images/bg/bg5.jpg') }}" data-rotate="0"
                        data-saveperformance="off" data-title="Slide 1" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('LearnPress-Education-Courses/images/bg/bg5.jpg') }}" alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                            data-bgparallax="10" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway" id="rs-1-layer-1"
                            data-x="['left']" data-hoffset="['30']" data-y="['middle']" data-voffset="['-110']"
                            data-fontsize="['100']" data-lineheight="['110']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:700;">Formação
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                            id="rs-1-layer-2" data-x="['left']" data-hoffset="['35']" data-y="['middle']"
                            data-voffset="['-25']" data-fontsize="['35']" data-lineheight="['54']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:600;">Educação para Todos
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme text-white" id="rs-1-layer-3" data-x="['left']"
                            data-hoffset="['35']" data-y="['middle']" data-voffset="['35']" data-fontsize="['16']"
                            data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Oferecemos sempre
                            os melhores serviços para os nossos clientes e<br> buscamos sempre conquistar a confiança e a
                            satisfação de todos.
                        </div>


                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" id="rs-1-layer-4" data-x="['left']" data-hoffset="['35']"
                            data-y="['middle']" data-voffset="['100']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:1px;">

                            @guest
                                <a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                    href="#">Inscreva-se Agora</a>
                                <a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                    href="#">Faça Login</a>
                            @endguest
                            @auth
                                <a class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                    href="#">Dashboard</a>
                            @endauth

                        </div>
                    </li>

                    <!-- SLIDE 2 -->
                    <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                        data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="{{ asset('LearnPress-Education-Courses/images/bg/bg7.jpg') }}" data-rotate="0"
                        data-saveperformance="off" data-title="Slide 2" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('LearnPress-Education-Courses/images/bg/bg7.jpg') }}" alt=""
                            data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-bgparallax="10" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                            id="rs-2-layer-1" data-x="['center']" data-hoffset="['0']" data-y="['middle']"
                            data-voffset="['-90']" data-fontsize="['28']" data-lineheight="['54']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Alimente Seu
                            Conhecimento
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                            id="rs-2-layer-2" data-x="['center']" data-hoffset="['0']" data-y="['middle']"
                            data-voffset="['-20']" data-fontsize="['48']" data-lineheight="['70']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">O Melhor Centro
                            de Formação
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme text-white text-center" id="rs-2-layer-3" data-x="['center']"
                            data-hoffset="['0']" data-y="['middle']" data-voffset="['50']" data-fontsize="['16']"
                            data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                            Oferecemos sempre os melhores serviços aos nossos formandos e<br> nos esforçamos para conquistar
                            sua confiança e satisfação.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" id="rs-2-layer-4" data-x="['center']" data-hoffset="['0']"
                            data-y="['middle']" data-voffset="['115']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                            @guest
                                <a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Inscreva-se
                                    Agora</a>
                                <a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Faça
                                    Login</a>
                            @endguest
                            @auth
                                <a class="btn btn-default btn-circled btn-transparent pl-20 pr-20"
                                    href="#">Dashboard</a>
                            @endauth

                        </div>

                    </li>

                    <!-- SLIDE 3 -->
                    <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                        data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="{{ asset('LearnPress-Education-Courses/images/bg/bg1.jpg') }}" data-rotate="0"
                        data-saveperformance="off" data-title="Slide 3" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('LearnPress-Education-Courses/images/bg/bg1.jpg') }}" alt=""
                            data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"
                            class="rev-slidebg" data-bgparallax="10" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                            id="rs-3-layer-1" data-x="['right']" data-hoffset="['30']" data-y="['middle']"
                            data-voffset="['-90']" data-fontsize="['64']" data-lineheight="['72']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:600;">Melhor Educação
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway" id="rs-3-layer-2"
                            data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['-25']"
                            data-fontsize="['32']" data-lineheight="['54']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:600;">Para Seu Futuro Melhor
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme text-white text-right" id="rs-3-layer-3" data-x="['right']"
                            data-hoffset="['35']" data-y="['middle']" data-voffset="['30']" data-fontsize="['16']"
                            data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                            Oferecemos sempre os melhores serviços para nossos formandos e<br> buscamos conquistar sua
                            confiança e satisfação.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" id="rs-3-layer-4" data-x="['right']" data-hoffset="['35']"
                            data-y="['middle']" data-voffset="['95']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                            @guest
                                <a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                    href="#">Inscreva-se Agora</a>
                                <a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                    href="#">Faça Login</a>
                            @endguest
                            @auth
                                <a class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                    href="#">Dashboard</a>
                            @endauth

                        </div>
                    </li>


                </ul>
            </div>
            <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
            $(document).ready(function(e) {
                $(".rev_slider").revolution({
                    sliderType: "standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            style: "metis",
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 30,
                            space: 5,
                            tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">nenhum</span>'
                        }
                    },
                    responsiveLevels: [1240, 1024, 778],
                    visibilityLevels: [1240, 1024, 778],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [650, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        origo: "slidercenter",
                        speed: 1000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                        type: "scroll"
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            });
        </script>
        <!-- Slider Revolution Ends -->

    </section>

    <!-- Section: home-boxes -->
    <section class="bg-silver-light">
        <div class="container pt-0 pb-0">
            <div class="section-content">
                <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
                    <div
                        class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                        <div class="sm-height-auto bg-theme-colored">
                            <div class="text-center pt-30 pb-30">
                                <i class="fa fa-user text-white font-64"></i>
                                <h4 class="text-uppercase mt-20"><a href="#" class="text-white">24 Hours
                                        Service</a></h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                        <div class="sm-height-auto bg-theme-colored-darker2">
                            <div class="text-center pt-30 pb-30">
                                <i class="fa fa-comments-o text-white font-64"></i>
                                <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Help</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                        <div class="sm-height-auto bg-theme-colored-darker3">
                            <div class="text-center pt-30 pb-30">
                                <i class="fa fa-cc-paypal text-white font-64"></i>
                                <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Payment</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                        <div class="sm-height-auto bg-theme-colored-darker4">
                            <div class="text-center pt-30 pb-30">
                                <i class="fa fa-mobile text-white font-64"></i>
                                <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Call +(012) 345
                                        6789</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: About -->
    <section id="about">
        <div class="container mt-50 pb-70 pt-0">
            <div class="section-content">
                <div class="row mt-10">
                    <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h3 class="text-uppercase mt-15">Seja Bem-Vindo ao <span class="text-theme-color-2">Centro de
                                Formação Profissional Santa Cruz</span></h3>
                        <p class="lead">O Centro de Formação Profissional Santa Cruz é comprometido em proporcionar uma
                            educação de qualidade e preparar os nossos formandos para os desafios do mercado de trabalho.
                        </p>
                        <p class="mb-15">Com uma infraestrutura moderna e uma equipe de profissionais qualificados,
                            oferecemos cursos que visam o desenvolvimento das habilidades necessárias para a formação de
                            especialistas em diversas áreas. Nosso foco está em capacitar cada estudante com conhecimento
                            prático e teórico.</p>
                        <p class="mb-10">A nossa missão é formar profissionais que possam contribuir de forma
                            significativa para o crescimento de suas comunidades, com ética, responsabilidade e excelência.
                            Junte-se a nós e comece a construir um futuro promissor.</p>
                        <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-0" href="#">Ver
                            Detalhes</a>
                    </div>
                    <div class="col-sm-12 col-md-6 mt-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="video-popup">
                            <a href="https://www.youtube.com/watch?v=pW1uVUg5wXM" data-lightbox-gallery="youtube-video"
                                title="Vídeo">
                                <img alt="Imagem do Centro de Formação Profissional Santa Cruz"
                                    src="{{ asset('LearnPress-Education-Courses/images/about/5.jpg') }}"
                                    class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: About -->
    <section id="about">
        <div class="container pb-70">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-sm-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2 class="text-uppercase mt-0">Cursos em <span class="text-theme-color-2">Promoção</span></h2>
                        <p class="lead">Aproveite nossos cursos com descontos especiais. Invista no seu futuro e garanta
                            sua vaga agora mesmo!</p>

                        <div class="row mt-40">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="1s">
                                <div class="mb-sm-30">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/about/7.jpg') }}"
                                        alt="">
                                    <h4 class="letter-space-1 mt-10">Graduation<span class="text-theme-color-2">
                                            Degree</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, magnam dolore
                                        tempore.</p>
                                    <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="1.2s">
                                <div class="mb-sm-30">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/about/8.jpg') }}"
                                        alt="">

                                    <h4 class=" letter-space-1 mt-10">Online<span class="text-theme-color-2">
                                            Learning</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, magnam dolore
                                        tempore.</p>
                                    <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        @auth
                            <br><br>
                            <center>
                                <h2>Aproveite! <br>{{ Auth::user()->name }}</h2>
                            </center>
                        @endauth
                        @guest
                            <div class="p-30 bg-theme-colored mt-10">
                                <h3 class="text-white mt-0 mb-10">Registe-se é Grátis</h3>
                                <!-- Appilication Form Start-->
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group mb-20">
                                                <input placeholder="Nome de Utilizador" id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    autofocus>
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-20">
                                                <input placeholder="exemplo@email.com" id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-20">
                                                <input placeholder="Palavra Passe" id="password" type="password"
                                                    class="form-control pwstrength @error('password') is-invalid @enderror"
                                                    data-indicator="pwindicator" name="password">
                                                <div id="pwindicator" class="pwindicator">
                                                    <div class="bar"></div>
                                                    <div class="label"></div>
                                                </div>
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-20">
                                                <input placeholder="Confirmar Palavra Passe" id="password_confirmation"
                                                    type="password"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    name="password_confirmation">
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-20">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agree" class="custom-control-input"
                                                        id="agree">
                                                    <label class="custom-control-label" for="agree">Eu concordo com os
                                                        Termos</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-0 mt-10">
                                                <input name="form_botcheck" class="form-control" type="hidden"
                                                    value="">
                                                <button type="submit"
                                                    class="btn btn-colored btn-default text-black btn-lg btn-block"
                                                    data-loading-text="Por Favor Aguarde...">Registrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Application Form End-->

                                <!-- Application Form Validation Start-->
                                <script type="text/javascript">
                                    $("#reservation_form").validate({
                                        submitHandler: function(form) {
                                            var form_btn = $(form).find('button[type="submit"]');
                                            var form_result_div = '#form-result';
                                            $(form_result_div).remove();
                                            form_btn.before(
                                                '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                            );
                                            var form_btn_old_msg = form_btn.html();
                                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                            $(form).ajaxSubmit({
                                                dataType: 'json',
                                                success: function(data) {
                                                    if (data.status == 'true') {
                                                        $(form).find('.form-control').val('');
                                                    }
                                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                    $(form_result_div).html(data.message).fadeIn('slow');
                                                    setTimeout(function() {
                                                        $(form_result_div).fadeOut('slow')
                                                    }, 6000);
                                                }
                                            });
                                        }
                                    });
                                </script>
                                <!-- Application Form Validation Start -->
                            </div>
                        @endguest

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Mission -->
    <section id="mission">
        <div class="container-fluid pt-0 pb-0">
            <div class="row equal-height">
                <div class="col-sm-6 col-md-6 xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s"
                    data-wow-delay="0.3s">
                    <div class="pt-60 pb-40 pl-90 pr-160 p-md-30">
                        <h2 class="title text-white text-uppercase line-bottom mt-0 mb-30">Por Que Escolher-nos?</h2>
                        <div class="icon-box clearfix m-0 p-0 pb-10">
                            <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                <i class="fa fa-desktop text-theme-color-2 font-36"></i>
                            </a>
                            <div class="ml-120 ml-sm-0">
                                <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Melhor Laboratório</h4>
                                <p class="text-white">Oferecemos instalações modernas e equipamentos de última geração para
                                    garantir o melhor aprendizado prático aos nossos alunos.</p>
                            </div>
                        </div>
                        <div class="icon-box clearfix m-0 p-0 pb-10">
                            <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                <i class="fa fa-user text-theme-color-2 font-36"></i>
                            </a>
                            <div class="ml-120 ml-sm-0">
                                <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Melhores Professores</h4>
                                <p class="text-white">Nossa equipe de instrutores é altamente qualificada e dedicada a
                                    proporcionar um ensino de excelência.</p>
                            </div>
                        </div>
                        <div class="icon-box clearfix m-0 p-0 pb-10">
                            <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                <i class="fa fa-money text-theme-color-2 font-36"></i>
                            </a>
                            <div class="ml-120 ml-sm-0">
                                <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Serviços a Baixo Custo</h4>
                                <p class="text-white">Oferecemos cursos de alta qualidade a preços acessíveis, garantindo
                                    que todos tenham acesso à educação profissional.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-6 p-0 bg-img-cover wow fadeInRight hidden-xs"
                    data-bg-img="{{ asset('LearnPress-Education-Courses/images/photos/best-knowledge-01.jpg') }}"
                    data-wow-duration="1s" data-wow-delay="0.3s">
                </div>
            </div>
        </div>
    </section>

    <!-- Section: courses -->
    <section>
        <div class="container pt-70 pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">
                                Nossos <span class="text-theme-color-2">Cursos</span>
                            </h2>
                            <p>Capacitação de qualidade para transformar seu futuro. Aprenda, cresça e conquiste com nossos
                                cursos práticos e direcionados ao mercado de trabalho!</p>
                        </div>
                    </div>
                </div>
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col owl-nav-top" data-dots="true">
                            @forelse ($cursos as $item)
                                <div class="item">
                                    <div class="project mb-30 border-2px">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt=""
                                                src="{{ asset('LearnPress-Education-Courses/images/team/1.jpg') }}">
                                            <div class="hover-link">
                                                <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20"
                                                    href="#"><span>{{ $item->preco }} Kz</span> </a>
                                            </div>
                                        </div>
                                        <div class="project-details p-15 pt-10 pb-10">
                                            {{-- <h5 class="font-14 font-weight-500 mb-5">Subtitle place here</h5> --}}
                                            <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                    href="page-courses-accounting-technologies.html">{{ $item->nome }}</a>
                                            </h4>
                                            <p>{{ $item->descricao }}.</p>
                                            <ul class="list-inline project-conditions text-center m-0 p-10">
                                                <li class="current-fund"><strong>Ínicio</strong>
                                                    {{ \Carbon\Carbon::parse($item->data_inicio)->format('F d') }}</li>
                                                <li class="remaining-days"><strong>Duração</strong> {{ $item->duracao }}
                                                </li>
                                                @if (\Carbon\Carbon::now()->greaterThan(\Carbon\Carbon::parse($item->data_inicio)))
                                                    <li class="target-fund"><strong>Inscrições</strong><label
                                                            for="" class="text-success"> Abertas</label></li>
                                                @else
                                                    <li class="target-fund"><strong>Inscrições</strong><label
                                                            for="" class="text-danger"> Encerradas</label></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h2>Nenhum Curso Encontrado!</h2>
                            @endforelse
                        </div>
                        <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">Todos Cursos</a>
                    </div>
                </div>
            </div>
    </section>


    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay"
        data-bg-img="{{ asset('LearnPress-Education-Courses/images/bg/bg6.jpg') }}" data-parallax-ratio="0.7">
        <div class="container pt-70 pb-60">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="fa fa-users mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="{{$Totalformadores}}"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h4 class="text-white text-uppercase">Professors</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="fa fa-book mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="{{$totalCurs}}"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h4 class="text-white text-uppercase">Tipos de Cursos</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="fa fa-home mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="{{$totalSalas}}"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h4 class="text-white text-uppercase">Salas de Aulas</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="fa  fa-graduation-cap mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="{{$totalFormando}}"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h4 class="text-white text-uppercase">Formandos</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Teachers -->
    <section id="teachers">
        <div class="container pt-70 pb-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">
                            Nossos <span class="text-theme-color-2">Formadores</span>
                        </h2>
                        <p>Profissionais experientes, apaixonados por ensinar e comprometidos com o seu sucesso. Aprenda com
                            os melhores e esteja preparado para os desafios do mercado!</p>
                    </div>
                </div>

            </div>
            <div class="row mtli-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-4col">
                        @forelse ($funcionarios as $item)
                            <div class="item">
                                <div class="hover-effect mb-30">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('LearnPress-Education-Courses/images/team/lg1.jpg') }}">
                                        <div class="hover-link">
                                            <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details p-15 pt-10 pb-10">
                                        <h4 class="title mb-5">{{ $item->nome }}</h4>
                                        <h5 class="sub-title mt-0 mb-15">
                                            {{ $item->cursos()->inRandomOrder()->first()->nome }}</h5>
                                        <a class="btn btn-theme-colored btn-sm" href="page-doctor-details.html">Ver
                                            Detalhes</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h2 class="text-center">Nenhum Formador Encontrado</h2>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: events -->
    <section id="events" class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5"
        data-bg-img="{{ asset('LearnPress-Education-Courses/images/bg/bg1.jpg') }}">
        <div class="container pt-70 pb-40">
            <div class="section-title mb-30">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="mt-0 line-height-1 text-center mb-10 text-white text-uppercase">Eventos Futuros</h2>
                        <p class="text-white">
                            Participe dos nossos eventos e aproveite oportunidades de aprendizado e networking. Confira a
                            lista abaixo!
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @forelse ($eventos as $item)
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                            data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <img class="img-fullwidth mb-sm-0"
                                                src="{{ asset('LearnPress-Education-Courses/images/about/as10.jpg') }}"
                                                alt="{{ $item->titulo }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-30 pl-sm-50">
                                        <h4 class="mt-0 mb-5"><a href="#"
                                                class="text-white">{{ $item->titulo }}</a></h4>
                                        <ul class="list-inline mb-5 text-white">
                                            <li class="pr-0"><i
                                                    class="fa fa-calendar mr-5"></i>{{ \Carbon\Carbon::parse($item->data_inicio)->format('F d, Y') }}
                                                |</li>
                                            <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>{{ $item->local }}
                                            </li>
                                        </ul>
                                        <p class="mb-15 mt-15 text-white">{!! Str::limit($item->resumo, 50) !!}</p>
                                        <a class="text-white font-weight-600" href="{{route("evento_detalhes", $item->id )}}">Leia Mais →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h2 class="text-center">Nenhum Evento Encontrado</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Grid 3 -->
    <section id="gallery">
        <div class="container pt-70 pb-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-center mb-10 text-black-333 text-uppercase">Nossa <span
                                class="text-theme-color-2">Galeria</span></h2>
                        <p class="mb-0 pb-20 text-center">Descubra os melhores momentos e eventos do nosso Centro de
                            Formação. Veja abaixo as imagens que representam nossa dedicação e aprendizado!</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Portfolio Filter -->
                        <div class="portfolio-filter font-alt align-center text-center mb-6 0">
                            <a href="#" class="active" data-filter="*">All</a>
                            <a href="#photos" class="" data-filter=".photos">Photos</a>
                            <a href="#campus" class="" data-filter=".campus">Campus</a>
                            <a href="#students" class="mt-10" data-filter=".students">Students</a>
                        </div>
                        <!-- End Portfolio Filter -->

                        <!-- Portfolio Gallery Grid -->
                        <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                            <!-- Portfolio Item Start -->
                            <div class="gallery-item campus">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/1.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/1.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item photos students">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/2.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/2.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item campus">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/3.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/3.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item photos">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/4.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/4.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item campus students">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/5.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/5.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item students">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/6.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/6.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item photos">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/7.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/7.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item students">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/8.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/8.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item photos">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/4.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/4.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item campus students">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/5.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/5.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item students">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/6.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/6.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item photos">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('LearnPress-Education-Courses/images/gallery/7.jpg') }}"
                                        alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('LearnPress-Education-Courses/images/gallery/7.jpg') }}"
                                                    data-lightbox-gallery="gallery" title="Your Title Here"><i
                                                        class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->
                        </div>
                        <!-- End Portfolio Gallery Grid -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Client Say -->
    <section class="divider parallax layer-overlay overlay-dark-4" data-background-ratio="0.5"
        data-bg-img="{{ asset('LearnPress-Education-Courses/images/bg/bg2.jpg') }}">
        <div class="container pt-60 pb-60">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-uppercase mt-0 pb-0 text-center text-white">O que nossos alunos dizem</h2>
                    <div class="owl-carousel-1col" data-dots="true">
                        <div class="item">
                            <div class="testimonial-wrapper text-center">
                                <div class="thumb">
                                    <img class="img-responsive" alt="Catherine Grace"
                                        src="{{ asset('LearnPress-Education-Courses/images/testimonials/1.jpg') }}">
                                </div>
                                <div class="content pt-10">
                                    <p class="lead text-white">“A experiência no Centro de Formação Santa Cruz foi
                                        transformadora. Aprendi muito e fiz amigos para a vida!”</p>
                                    <h4 class="author text-white mb-0">Catherine Grace</h4>
                                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapper text-center">
                                <div class="thumb">
                                    <img class="img-responsive" alt="John Doe"
                                        src="{{ asset('LearnPress-Education-Courses/images/testimonials/2.jpg') }}">
                                </div>
                                <div class="content pt-10">
                                    <p class="lead text-white">“Os professores são incríveis e sempre dispostos a ajudar.
                                        Recomendo a todos!”</p>
                                    <h4 class="author text-white mb-0">John Doe</h4>
                                    <h6 class="title text-white mt-0 mb-15">Desenvolvedor de Software</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrapper text-center">
                                <div class="thumb">
                                    <img class="img-responsive" alt="Alice Smith"
                                        src="{{ asset('LearnPress-Education-Courses/images/testimonials/3.jpg') }}">
                                </div>
                                <div class="content pt-10">
                                    <p class="lead text-white">“Uma instituição que se preocupa com o desenvolvimento dos
                                        alunos. Estou muito feliz por fazer parte!”</p>
                                    <h4 class="author text-white mb-0">Alice Smith</h4>
                                    <h6 class="title text-white mt-0 mb-15">Estudante de Marketing</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Blog -->
    <section id="blog">
        <div class="container pt-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-uppercase">Nosso <span class="text-theme-color-2">Blog</span>
                        </h2>
                        <p class="text-center">Descubra as últimas novidades e insights do Centro de Formação Profissional
                            Santa Cruz. Nossos artigos oferecem dicas, informações sobre cursos, e muito mais!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-dots="true">
                        <div class="item">
                            @forelse ($posts as $post)
                                <div class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <article class="post clearfix mb-sm-30">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                {{-- <img src="{{ asset('images/blog/' . $post->imagem) }}" alt="{{ $post->titulo }}" class="img-responsive img-fullwidth"> --}}
                                                <img src="{{ asset('LearnPress-Education-Courses/images/blog/1.jpg') }}" alt="{{ $post->titulo }}" class="img-responsive img-fullwidth">
                                            </div>
                                        </div>
                                        <div class="entry-content p-20 pr-10">
                                            <div class="entry-meta media mt-0 no-bg no-border">
                                                <div class="entry-date media-left flip text-center">
                                                    <ul>
                                                        <li class="font-16 font-weight-600 border-bottom bg-white-f1 pt-5 pr-15 pb-5 pl-15">
                                                            {{ \Carbon\Carbon::parse($post->data_publicacao)->format('d') }}
                                                        </li>
                                                        <li class="font-12 text-white text-uppercase bg-theme-colored pt-5 pr-15 pb-5 pl-15">{{ \Carbon\Carbon::parse($post->data_publicacao)->format('M') }}</li>
                                                    </ul>
                                                </div>
                                                <div class="media-body pl-10">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-capitalize m-0">
                                                            <a href="{{ route('blogs.show', $post->id) }}">{{ $post->titulo }}</a>
                                                        </h4>
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                            <i class="fa fa-commenting-o mr-5 text-theme-colored"></i> {{ $post->comentarios->count() }} Comentários
                                                        </span>
                                                        <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                            <i class="fa fa-heart-o mr-5 text-theme-colored"></i> Likes
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-10">{!! Str::limit($post->resumo, 100) !!}</p>
                                            <div class="mt-10">
                                                <a href="{{ route('blogs.show', $post->id) }}" class="btn btn-theme-colored btn-sm">Leia Mais</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </article>
                                </div>
                            @empty
                                <div class="text-center">
                                    <h4 class="text-dark">Nenhum post encontrado.</h4>
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
        <div class="container pt-10 pb-10 pb-sm-0 pt-sm-0">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section: Clients -->
                    <div class="owl-carousel-6col transparent text-center owl-nav-top">
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w1.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w2.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w3.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w4.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w5.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w6.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w3.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w4.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w5.png') }}"
                                    alt=""></a></div>
                        <div class="item"> <a href="#"><img
                                    src="{{ asset('LearnPress-Education-Courses/images/clients/w6.png') }}"
                                    alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
