<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Layout</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Carrossel ocupa a tela toda */
        .carousel-item {
            height: 500px;
            background-size: cover;
            background-position: center;
        }

        /* Formulário sobreposto */
        .search-courses {
            position: absolute;
            top: 200px;
            right: 50px;
            z-index: 10;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Ajustes para dispositivos móveis */
        @media (max-width: 768px) {
            .search-courses {
                top: 100px;
                right: 10px;
                left: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Carrossel -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('image1.jpg');">
                <!-- Conteúdo do slide -->
            </div>
            <div class="carousel-item" style="background-image: url('image2.jpg');">
                <!-- Conteúdo do slide -->
            </div>
            <div class="carousel-item" style="background-image: url('image3.jpg');">
                <!-- Conteúdo do slide -->
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

    <!-- Formulário Search Courses -->
    <div class="search-courses">
        <h4>Search Courses</h4>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="E-Mail">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Discipline">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Course Length">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Study Level">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Campus Location">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Key Words">
            </div>
            <button type="submit" class="btn btn-warning btn-block">Search</button>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
