@extends('layouts user.admin')
@section('titulo', 'Sobre Nós')
@section('conteudo')

<div class="iner_banner">
    <div class="container">
        <h5>Sobre Nós</h5>
        <div class="banner_iner_capstion">
            <ul>
                <li><a href="">ínicio</a></li>
                <li><a href="#">Sobre Nós</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="iq_content_wrap">
    <!--About Us START-->
    <section class="about-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="text">
                        <!--Heading Wrap Start-->
                        <div class="iq_heading_1 text-left">
                            <h4>Bem-vindo ao <span>Centro de Formação Profissional da Santa Cruz</span></h4>
                        </div>
                        <!--Heading Wrap End-->
                        <p>O futuro começa aqui! Oferecemos cursos de alta qualidade que capacitam nossos alunos a se destacarem no mercado de trabalho. Com uma abordagem prática e moderna, buscamos transformar o aprendizado em uma experiência única. Venha conhecer nossos programas e faça parte da nossa comunidade de sucesso!</p>
                        <ul class="categries-list">
                            <li><a href="#">Nossa Missão e Filosofia</a></li>
                            <li><a href="#">Departamentos e Cursos</a></li>
                            <li><a href="#">Por que somos os melhores</a></li>
                            <li><a href="#">Excelentes Resultados de Carreira</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="thumb">
                        <img src="{{ asset('Template User/extra-images/about_us.jpg') }}" alt="Sobre nós">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->

    <!--Get Best Knowledge Wrap Start-->
    <section class="iq_best_knowledge_bg">
        <div class="col-md-6 col-sm-offset-6 col-md-offset-6">
            <div class="iq_knowledge_des">
                <!--Heading Wrap Start-->
                <div class="iq_heading_1 text-left">
                    <h4>Obtenha o <span>melhor conhecimento</span><br>Conosco</h4>
                </div>
                <!--Heading Wrap End-->
                <h5>Desperte seu potencial e conquiste o futuro</h5>
                <p>Nosso compromisso é oferecer ensino de excelência, promovendo o desenvolvimento integral de nossos alunos e preparando-os para desafios reais. Aqui, você terá acesso às ferramentas certas para crescer e se destacar.</p>
                <a class="iq_link_1" href="#">Junte-se a nós</a>
            </div>
        </div>
    </section>
    <!--Get Best Knowledge Wrap End-->

    <!--Our Courses Progress START-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="text progress-caption">
                        <!--Heading Wrap Start-->
                        <div class="iq_heading_1 text-left">
                            <h4>Progresso dos <span>nossos cursos</span></h4>
                        </div>
                        <!--Heading Wrap End-->
                        <p>Monitoramos o progresso de nossos cursos de perto para garantir que nossos alunos recebam sempre o melhor em cada etapa do aprendizado. Com o suporte de profissionais capacitados, estamos sempre prontos para ajudá-los a alcançar seus objetivos.</p>
                        <a class="iq_link_1" href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <!--IQONIQ PROGRESS BAR Start-->
                    <div class="iq-progress">
                        <h6 class="progressText"> Gestão e Finanças </h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" >
                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="40%"> </span>
                            </div>
                        </div>
                    </div>
                    <!--IQONIQ PROGRESS BAR END-->
                    <!--IQONIQ PROGRESS BAR Start-->
                    <div class="iq-progress">
                        <h6 class="progressText"> Cursos Sociais </h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" >
                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="50%"> </span>
                            </div>
                        </div>
                    </div>
                    <!--IQONIQ PROGRESS BAR END-->
                    <!--IQONIQ PROGRESS BAR Start-->
                    <div class="iq-progress">
                        <h6 class="progressText"> Tecnologia da Informação </h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" >
                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="75%"> </span>
                            </div>
                        </div>
                    </div>
                    <!--IQONIQ PROGRESS BAR END-->
                    <!--IQONIQ PROGRESS BAR Start-->
                    <div class="iq-progress">
                        <h6 class="progressText"> Cursos de Idiomas </h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" >
                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="100%"> </span>
                            </div>
                        </div>
                    </div>
                    <!--IQONIQ PROGRESS BAR END-->
                </div>
            </div>
        </div>
    </section>
    <!--Our Courses Progress END-->

    <!-- Video Wrap Start-->
    <section class="video-wrap">
        <div class="container">
            <h1>Inicie uma nova jornada de aprendizado</h1>
            <h5>Somos especialistas em cursos de qualidade</h5>
            <a href="#" class="play-track"><i class="fa fa-play-circle-o"></i> Assista ao Vídeo</a>
        </div>
    </section>
    <!-- Video Wrap End-->

    <!--Our Teachers Wrap Start-->
    <section>
        <div class="container">
            <!--Heading Wrap Start-->
            <div class="iq_heading_1 text-center">
                <h4>Nossos <span>Instrutores</span></h4>
                <p>Conheça nossa equipe altamente qualificada e dedicada, pronta para orientá-lo no seu caminho de aprendizado e sucesso.</p>
            </div>
            <!--Heading Wrap End-->
            <!--Teacher Wrap List Start-->
            <div class="row">
                <!--Teacher Thumb Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="iq_teacher_style_1">
                        <figure>
                            <img src="{{ asset('Template User/extra-images/teacher-01.jpg') }}" alt="Instrutora de Idiomas">
                        </figure>
                        <div class="text">
                            <h4><a href="#">Ana Souza</a></h4>
                            <h6>Instrutora de Idiomas</h6>
                            <p>Especialista em ensino de línguas, Ana traz métodos inovadores e dinâmicos para facilitar o aprendizado de seus alunos.</p>
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
                            <h4><a href="#">João Ferreira</a></h4>
                            <h6>Vice-Presidente</h6>
                            <p>Com vasta experiência na gestão educacional, João lidera iniciativas que garantem a excelência acadêmica e administrativa.</p>
                            <ul class="iq_footer_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                       <figure>
                            <img src="{{ asset('Template User/extra-images/teacher-02.jpg') }}" alt="Vice-Presidente">
                        </figure>
                    </div>
                </div>
                <!--Teacher Thumb End-->
                <!--Teacher Thumb Start-->
                <div class="col-md-4 hidden-sm">
                    <div class="iq_teacher_style_1">
                        <figure>
                            <img src="{{ asset('Template User/extra-images/teacher-03.jpg') }}" alt="Gerente de TI">
                        </figure>
                        <div class="text">
                            <h4><a href="#">Sara Almeida</a></h4>
                            <h6>Gerente de TI</h6>
                            <p>Especialista em Tecnologia da Informação, Sara coordena os sistemas que facilitam o aprendizado digital e remoto.</p>
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
        </div>
    </section>
    <!--Our Teachers Wrap End-->
</div>

@endsection
