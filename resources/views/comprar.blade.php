<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function scrollToSection() {
            var section = document.getElementById('seccionDeseada');
            section.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
    <style>
        /* Personalización de las flechas de los botones del carrusel */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(100%);
        }
        /* Personalización del fondo de los indicadores del carrusel */
        .carousel-indicators button {
            filter: invert(100%);
        }
    </style>
    <title>Catalogo</title>
</head>
<body>
    <div class="p-3 text-bg-dark fixed-top" data-bs-theme="dark">
        <div class="container">
            <nav class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                        <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1z"/>
                        <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729q.211.136.373.297c.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466s.34 1.78.364 2.606c.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527s-2.496.723-3.224 1.527c-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.3 2.3 0 0 1 .433-.335l-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a14 14 0 0 0-.748 2.295 12.4 12.4 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.4 12.4 0 0 0-.339-2.406 14 14 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27s-2.063.091-2.913.27"/>
                    </svg>
                    <span class="fs-4">GeneralGames</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="inicio" class="nav-link" aria-current="page">Inicio</a></li>
                    <li class="nav-item"><a href="comprar" class="nav-link active">Comprar</a></li>
                    <li class="nav-item m-2"><a href="carrito"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16"><path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/></svg></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <header class="py-5 mt-5">
                    <div class="container px-5 pb-5 mt-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-xxl-5">
                                <!-- Header text content-->
                                <div class="text-center text-xxl-start">
                                    <div class="fs-3 fw-light text-muted">Consolas Xbox</div>
                                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Ten la consola de tus sueños</span></h1>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" onclick="scrollToSection()">Ver Productos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7">
                                <!-- Header profile picture-->
                                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                    <div class="profile bg-gradient-primary-to-secondary">
                                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                        <img class="profile-img" height="500px" width="650px" src="https://blogs.windows.com/wp-content/uploads/prod/sites/9/2020/11/e55222874f5a0f8977bde9b2cc8705ee.png" alt="..." >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div class="carousel-item">
                <header class="py-5 mt-5">
                    <div class="container px-5 pb-5 mt-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-xxl-5">
                                <!-- Header text content-->
                                <div class="text-center text-xxl-start">
                                    <div class="fs-3 fw-light text-muted">Videojuegos fisicos y digitales</div>
                                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Vive nuevas experiencias</span></h1>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" onclick="scrollToSection()">Ver Productos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7">
                                <!-- Header profile picture-->
                                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                    <div class="profile bg-gradient-primary-to-secondary">
                                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                        <img class="profile-img" height="500px" width="500px" src="https://i.shgcdn.com/75f60867-3e01-40c8-8be6-7b17b5528ba6/-/format/auto/-/preview/3000x3000/-/quality/lighter/" alt="..." >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div class="carousel-item">
                <header class="py-5 mt-5">
                    <div class="container px-5 pb-5 mt-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-xxl-5">
                                <!-- Header text content-->
                                <div class="text-center text-xxl-start">
                                    <div class="fs-3 fw-light text-muted">Logitech</div>
                                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Accesorios Exclusivos</span></h1>
                                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" onclick="scrollToSection()">Ver Productos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7">
                                <!-- Header profile picture-->
                                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                    <div class="profile bg-gradient-primary-to-secondary">
                                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                        <img class="profile-img" height="500px" width="650px" src="https://pccom.cl/wp-content/uploads/2022/05/Logitech-G923-TRUEFORCE-2.webp" alt="..." >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="album py-5 bg-body-tertiary" id="seccionDeseada">
        <div class="container px-4 py-5">
            <h2 class="pb-2 border-bottom ">Catalogo</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/2/127625_7.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Xbox Series X 1TB</h5>
                        <p class="card-text">Presentamos Xbox Series X, la Xbox más rápida y potente que nunca. Juega miles de títulos de las cuatro generaciones de consolas, todos los juegos se ven y juegan mejor en Xbox Series X.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Microsoft</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Consola</button>
                            </div>
                            <small class="text-body-secondary">S/  2,799.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/p/s/ps5_d_sa_rndr_lt_prod_rgb_la_240105-_1_.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560">
                    <div class="card-body">
                        <h5 class="card-title">PlayStation 5 1TB SSD</h5>
                        <p class="card-text">Disfruta de tiempos de carga superveloces con un SSD de velocidad ultrarrápida, una experiencia más inmersiva gracias a la compatibilidad con respuesta háptica1, gatillos adaptativos1 y audio 3D*</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Sony</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Consola</button>
                            </div>
                            <small class="text-body-secondary">S/  2,699.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/2/128157-2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Nintendo Switch OLED 64GB</h5>
                        <p class="card-text">La nueva consola cuenta con una vibrante pantalla OLED de 7 pulgadas, un soporte ajustable y amplio, una base con puerto LAN para conexión por cable, almacenamiento de 64 GB y audio mejorado.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Nintendo</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Consola</button>
                            </div>
                            <small class="text-body-secondary">S/  1,499.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/2/124006.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Audífonos G733 con micrófono inalámbricos</h5>
                        <p class="card-text">Audífonos inalámbricos con micrófono para juegos diseñados para desempeño y confort. Equipados con todo el sonido envolvente, los filtros de voz y la iluminación avanzada que necesitas.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Logitech</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorios</button>
                            </div>
                            <small class="text-body-secondary">S/  594.90</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/_/1_394.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Mouse Logitech G903 Lightspeed</h5>
                        <p class="card-text"> El sensor HERO 25K cuenta con un seguimiento submicrónico. Diseño ambidiestro. Desplazamiento superrápido. Compatible con POWERPLAY para tener carga inalámbrica continua.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Logitech</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorio</button>
                            </div>
                            <small class="text-body-secondary">S/  449.10</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/3/130975-2.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Silla Gamer con Masajeador Lumbar Kuzler RIK-101B</h5>
                        <p class="card-text">La silla gamer Kuzler RIK-101B es un producto diseñado específicamente para brindar comodidad y soporte a los usuarios durante largas sesiones de juego o trabajo en frente de un ordenador. </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Kuzler</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorio</button>
                            </div>
                            <small class="text-body-secondary">S/  399.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/2/127681___1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">God of War Ragnarok PS4</h5>
                        <p class="card-text">God of War Ragnarök es un videojuego de acción y aventura hack and slash en tercera persona desarrollado por Santa Monica Studio y publicado por Sony Interactive Entertainment.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Sony</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Videojuego</button>
                            </div>
                            <small class="text-body-secondary">S/  289.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/3/130307_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">The Legend of Zelda: Tears of the Kingdom</h5>
                        <p class="card-text"> Es un videojuego de acción-aventura de 2023 de la serie The Legend of Zelda, desarrollado por la filial Nintendo EPD en colaboración con Monolith Soft.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Nintendo</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Videojuego</button>
                            </div>
                            <small class="text-body-secondary">S/  299.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/2/127258.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Grand Theft Auto V PS5</h5>
                        <p class="card-text">Es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio escocés Rockstar North y distribuido por Rockstar Games. Estrenado el 17 de setiembre de 2013</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Sony</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Videojuego</button>
                            </div>
                            <small class="text-body-secondary">S/  219.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/3/130854_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Logitech G815 RGB Lightsync Negro</h5>
                        <p class="card-text">Lo último en tecnología de juegos. Diseño ultrafino. RGB LIGHTSYNC y teclas G específicas. Diseñado con interruptores mecánicos GL de perfil bajo en versiones de click perceptible, táctil y lineal.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Logitech</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorio</button>
                            </div>
                            <small class="text-body-secondary">S/  772.60</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/4/5/45496599782-1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Red Dead Redemption Nintendo Switch</h5>
                        <p class="card-text">Red Dead Redemption es un videojuego de acción-aventura de mundo abierto no lineal desarrollado por Rockstar San Diego y publicado por Rockstar Games.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Nintendo</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Videojuego</button>
                            </div>
                            <small class="text-body-secondary">S/  219.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/s/h/shifter-gallery-1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Logitech Driving Force Shifter</h5>
                        <p class="card-text">Para volantes y pedales G923, G29 y G920. Con un robusto eje de acero, una caja de cambios con recorrido corto de seis velocidades, y funda y empuñadura de cuero.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Logitech</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorios</button>
                            </div>
                            <small class="text-body-secondary">S/  349.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/0/109252_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Joy Con (Izq/Der) Nintendo Switch</h5>
                        <p class="card-text">Mandos Joy-Con, derecho e izquierdo, con dos correas de los mandos Joy-Con. Según el juego, se pueden usar varios pares de Joy-Con para jugar en una consola Nintendo Switch con más jugadores.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Nintendo</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorios</button>
                            </div>
                            <small class="text-body-secondary">S/  389.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/1/115361_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Super Mario Party</h5>
                        <p class="card-text">Super Mario Party es un videojuego de fiesta desarrollado por Nd Cube y publicado por Nintendo. Fecha de estreno inicial: 5 de octubre de 2018</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Nintendo</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Videojuego</button>
                            </div>
                            <small class="text-body-secondary">S/  259.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/2/125238.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Mortal Kombat 11 Ultimate Edition PS5</h5>
                        <p class="card-text">Mortal Kombat 11 es un videojuego de lucha desarrollado por NetherRealm Studios y publicado por Warner Bros. Interactive Entertainment.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Sony</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Videojuego</button>
                            </div>
                            <small class="text-body-secondary">S/  319.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/3/130321_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Monitor Gamer LG UltraGear FHD 23.8"</h5>
                        <p class="card-text">Pantalla IPS de 23.8 pulgadas FHD (1920x1080), 1ms (GtG at Faster), Frecuencia de actualización de 144Hz, sRGB 99% (CIE1931) y HDR10. Compatible con FreeSync Premium</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">LG</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorio</button>
                            </div>
                            <small class="text-body-secondary">S/  849.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/p/h/phs-s110at_01.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Primus Ahsoka PHS-S110AT</h5>
                        <p class="card-text">Primus Gaming - PHS-S110AT - Headset - Para Computer / Para Game console - Wired - Ahsoka Tano Arcus110T</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Primus</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorio</button>
                            </div>
                            <small class="text-body-secondary">S/  153.20</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/3/d/3d_front.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Call of Duty: Modern Warfare 3 PS5</h5>
                        <p class="card-text">Call of Duty: Modern Warfare 3 es un videojuego de disparos en primera persona desarrollado por Infinity Ward y Sledgehammer Games.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Sony</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Videojuego</button>
                            </div>
                            <small class="text-body-secondary">S/  319.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/2/125204_1_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Mando Sony DualShock 4 PS4</h5>
                        <p class="card-text">Toma el control de una nueva generación de videojuegos con un mando inalámbrico DUALSHOCK 4 rediseñado que pone en tus manos la mayor precisión en el juego.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Sony</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorio</button>
                            </div>
                            <small class="text-body-secondary">S/  329.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/r/c/rc71l-nh014w.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Asus ROG Ally Z1 Extreme 512GB SSD</h5>
                        <p class="card-text">La ROG Ally es una verdadera máquina gaming con Windows 11. Con los nuevos procesadores AMD Ryzen™ serie Z1, la ROG Ally es una máquina gaming portátil increíblemente potente con gráficos RDNA™3.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Asus</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Consola</button>
                            </div>
                            <small class="text-body-secondary">S/  3,099.00</small>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                    <img src="https://hiraoka.com.pe/media/catalog/product/1/3/130772_1.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=560&width=700&canvas=700:560" class="card-img-top" alt="Xbox Series X 1TB">
                    <div class="card-body">
                        <h5 class="card-title">Cámara Web Razer Kiyo FHD Negro</h5>
                        <p class="card-text">Resolución máxima de video: 1920px x 1080px. Imagen con resolución de 4Mpx. Interfaz: USB 2.0. Funciona con Windows 7. Adecuada para notebook. Trae auto-foco.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Razer</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Accesorio</button>
                            </div>
                            <small class="text-body-secondary">S/  259.00</small>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <footer class="border-top py-3 my-4">
            <p class="text-center text-body-secondary">© 2024 GeneralGames & Asoc.</p>
        </footer>
    </div>
</body>
</html>