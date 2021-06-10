<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <!--background-->
        <div class="background-top">
            <!--header-->
            <header>
                <nav class="top-bar">
                    <span class="mob-menu fas fa-bars" onclick="openMobileMenu()"></span>
                    <div class="modal background-dark"></div>
                    <ul class="top-nav">
                        <span class="mob-close far fa-times-circle" onclick="closeMobileMenu()"></span>

                        <li class="top-nav-item">
                            <div class="background-search">
                                <input class="input-search" type="text" placeholder="Buscar">
                                <a class="icon-search" href="#"><i class="fas fa-search"></i></a>
                            </div>
                        </li>

                        <li class="top-nav-item">
                            <nav class="navbar">
                                <div class="dropdown">

                                    <a class="top-nav-link tittle-categorias dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">Categorías</a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item top-nav-link" href="#">Ciclismo</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Blicicleta de montaña</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Triatlón</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Maratón</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Surf</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Fútbol</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Baloncesto</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Voleibol</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Natación</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Béisbol</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Caminata</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Marcha atlética</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Voleibol playa</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Halterofilia</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Escalada</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Boxeo</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Judo</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Taekwondo</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Deportes acuáticos</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Deportes de motor</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Pruebas combinadas</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Atletismo</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Deportes de precisión</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Deportes de combate</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Deportes colectivos</a></li>
                                        <li><a class="dropdown-item top-nav-link" href="#">Gratis</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </li>
                        
                    </ul>
                    <a href="#"><img class="logo-header" src="./img/logoMobile.svg" alt="logo"></a>
                </nav>
            </header>
            <!--header-->
            <!--intro-section-->
            <section class="intro-section">
                <h1 class="tittle-intro">Festivales y eventos deportivos en Costa Rica</h1>
                <h2 class="subtittle-intro">¿Quieres estar el tanto de todos los eventos y festivales?</h2>
                <div class="container-newsletter">
                    <div class="background-newsletter">
                        <li><input class="input-email" type="email" placeholder="Su correo electrónico"></li>
                        <input class="submit-btn" type="submit" value="suscribirse al boletín">
                    </div>
                </div>
            </section>
            <!--intro-section-->
        </div>
        <!--background-->

        <!--events-section-->
        <section class="events-section">
            <h2 class="tittle-section">Sección - Categoría</h2>
            <div class="row row-events">
                <div class="col">
                    <div class="container-event">
                        <a class="link-event" href="./event.php">
                            <img class="img-event" src="./img/mountainbike.png" alt="mountainbike">
                        </a>
                        <h3 class="tittle-event">Título o nombre</h3>
                        <div class="row">
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-map-marker-alt icon-info"></span>Lugar en
                                    donde se realizará</p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="far fa-calendar-alt icon-info"></span>Fecha y hora
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-tag icon-info"></span>Categoría</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-event">
                        <a class="link-event" href="./event.php">
                            <img class="img-event" src="./img/mountainbike.png" alt="mountainbike">
                        </a>
                        <h3 class="tittle-event">Título o nombre</h3>
                        <div class="row">
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-map-marker-alt icon-info"></span>Lugar en
                                    donde se realizará</p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="far fa-calendar-alt icon-info"></span>Fecha y hora
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-tag icon-info"></span>Categoría</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-event">
                        <a class="link-event" href="./event.php">
                            <img class="img-event" src="./img/mountainbike.png" alt="mountainbike">
                        </a>
                        <h3 class="tittle-event">Título o nombre</h3>
                        <div class="row">
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-map-marker-alt icon-info"></span>Lugar en
                                    donde se realizará</p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="far fa-calendar-alt icon-info"></span>Fecha y hora
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-tag icon-info"></span>Categoría</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-events">
                <div class="col">
                    <div class="container-event">
                        <a class="link-event" href="./event.php">
                            <img class="img-event" src="./img/mountainbike.png" alt="mountainbike">
                        </a>
                        <h3 class="tittle-event">Título o nombre</h3>
                        <div class="row">
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-map-marker-alt icon-info"></span>Lugar en
                                    donde se realizará</p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="far fa-calendar-alt icon-info"></span>Fecha y hora
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-tag icon-info"></span>Categoría</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-event">
                        <a class="link-event" href="./event.php">
                            <img class="img-event" src="./img/mountainbike.png" alt="mountainbike">
                        </a>
                        <h3 class="tittle-event">Título o nombre</h3>
                        <div class="row">
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-map-marker-alt icon-info"></span>Lugar en
                                    donde se realizará</p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="far fa-calendar-alt icon-info"></span>Fecha y hora
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-tag icon-info"></span>Categoría</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-event">
                        <a class="link-event" href="./event.php">
                            <img class="img-event" src="./img/mountainbike.png" alt="mountainbike">
                        </a>
                        <h3 class="tittle-event">Título o nombre</h3>
                        <div class="row">
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-map-marker-alt icon-info"></span>Lugar en
                                    donde se realizará</p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="far fa-calendar-alt icon-info"></span>Fecha y hora
                                </p>
                            </div>
                            <div class="col-12">
                                <p class="info-event"><span class="fas fa-tag icon-info"></span>Categoría</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!--events-section-->

        <!--footer-->
        <footer>
            <nav>
                <ul class="bottom-nav">
                    <li class="bottom-nav-iteam">
                        <p class="text-footer">Copyrigth © 2021 brand name</p>
                        <p class="text-footer">Todos los derechos reservados</p>
                        <p class="text-footer">Política de privacidad</p>
                    </li>
                    <li class="bottom-nav-iteam"><img src="./img/logoMobile.svg" alt="logo" class="logo-footer"></li>
                    <li class="bottom-nav-iteam-up"><a class="fas fa-chevron-up btn-up" href="#"></a></li>
                </ul>
            </nav>
        </footer>
        <!--footer -->
    </div>
    <script src="./js/main.js"></script>
</body>

</html>