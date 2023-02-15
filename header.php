<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>
<body>
    <header class="header py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 col-8 mb-4 mb-md-0">
                    <a href="index.html">
                        <img src="img/logo.svg" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-md navbar-light justify-content-end">
                        <button class="navbar-toggler mb-4" data-toggle="collapse" data-target="#nav_principal" aria-expanded="false" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="nav_principal" class="collapse navbar-collapse justify-content-center justify-content-lg-end text-center text-uppercase">
                            <a href="nosotros.html" class="nav-link">Nosotros</a>
                            <a href="blog.html" class="nav-link">Blog</a>
                            <a href="clases.html" class="nav-link active">Clases</a>
                            <a href="galeria.html" class="nav-link">Galería</a>
                            <a href="contacto.html" class="nav-link">Contacto</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>