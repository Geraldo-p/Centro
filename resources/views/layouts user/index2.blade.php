<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Formação Profissional - Santa Cruz</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .top-bar {
            background-color: #f7f7f7;
            padding: 5px 0;
            text-align: center;
            font-size: 14px;
            position: fixed;
            width: 100%;
            z-index: 1020;
            top: 0;
        }

        .top-bar a {
            margin: 0 15px;
            color: #333;
            text-decoration: none;
        }

        .navbar {
            background-color: #fff;
            border-bottom: 2px solid #f0ad4e;
            position: fixed;
            top: 40px;
            width: 100%;
            z-index: 1010;
        }

        .navbar-brand img {
            max-height: 60px;
        }

        .navbar-nav {
            margin: 0 auto;
        }

        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            padding: 15px 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #f0ad4e;
        }

        .carousel-item {
            height: 600px;
            background-size: cover;
            background-position: center;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #f0ad4e;
            color: #fff;
            padding: 10px 20px;
            margin: 5px;
            border: none;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #d8954b;
        }

        .content {
            padding-top: 200px;
            /* Espaço para o conteúdo começar após o navbar fixo */
        }

        .iq_header_1 .iq_logo {
            float: left;
        }

        .iq_header_1 .iq_logo a {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <span>Call us: +244 947 986 411</span>
        <span>Email: gpaciencia68@gmail.com</span>
        <span>Seg - Sáb: 06:00 - 16:00 pm</span>
    </div>
    <hr>
    <!-- Navigation Bar -->
    <section>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand iq_logo" href="#">
                    <img src="{{ asset('Template admin/assets/img/logo3.png') }}"
                        alt="Logo Centro de Formação Profissional">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sobre Nós</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Eventos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Nossa Equipe</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Fale Connosco</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
<br>
<br>
<br>
<br>
    <!-- Carousel Section -->
    <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"
                style="background-image: url('{{ asset('Template User/extra-images/banner-02.jpg') }}');">
                <div class="carousel-caption">
                    <h1>Centro de Formação Profissional - Santa Cruz</h1>
                    <p>Apoio ao Formando! Oferecemos orientação profissional, workshops e oportunidades de networking
                        para garantir que você alcance seus objetivos</p>
                    <a href="#" class="btn-custom">Entrar</a>
                    <a href="#" class="btn-custom">Inscrever-se</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('path/to/image2.jpg');">
                <div class="carousel-caption">
                    <h1>Aprenda e Cresça Conosco</h1>
                    <p>Desenvolva suas habilidades com nossos cursos profissionais</p>
                    <a href="#" class="btn-custom">Conheça Mais</a>
                    <a href="#" class="btn-custom">Cadastre-se</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('path/to/image3.jpg');">
                <div class="carousel-caption">
                    <h1>Invista no Seu Futuro</h1>
                    <p>Nós ajudamos você a alcançar seus sonhos profissionais</p>
                    <a href="#" class="btn-custom">Saiba Mais</a>
                    <a href="#" class="btn-custom">Participe</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="content">
        <!-- Conteúdo adicional aqui -->
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
