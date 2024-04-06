<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$database = "bd_producto";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Consulta para obtener los productos
$sql = "SELECT * FROM tb_producto";
$result = $conn->query($sql);

$productos = array();

// Obtener los resultados de la consulta y guardarlos en un array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

// Cerrar la conexión
$conn->close();
?>
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
                <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none" href="inicio">
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
            <div class="container">
                <div class="row">
                    <div class="col">
                        <input type="text" id="searchInput" class="form-control form-control-lg" placeholder="Buscar por nombre...">
                    </div>
                    <div class="col">
                        <select id="categoryFilter" class="form-select form-select-lg">
                            <option value="">Todas las categorías</option>
                            <option value="Consolas">Consola</option>
                            <option value="Videojuegos">Videojuego</option>
                            <option value="Accesorios">Accesorio</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            <?php
                // Verificar si $productos está definido y no está vacío
                if (isset($productos) && !empty($productos)) {
                    foreach ($productos as $producto) {
                ?>
                        <div class="col">
                            <a href="producto?id=<?php echo $producto['id']; ?>" class="text-decoration-none">
                                <div class="card h-100">
                                    <img src="<?php echo $producto['imagenurl']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                                        <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $producto['marca']; ?></button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $producto['categoria']; ?></button>
                                            </div>
                                            <small class="text-body-secondary">S/ <?php echo $producto['precio']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                } else {
                    // Si no hay productos, muestra un mensaje de error o alguna otra acción
                    echo "<p>No hay productos disponibles.</p>";
                }
            ?>
            </div>
        </div>
    </div>
    <div class="container">
        <footer class="border-top py-3 my-4">
            <p class="text-center text-body-secondary">© 2024 GeneralGames & Asoc.</p>
        </footer>
    </div>
    <script>
        // Función para filtrar productos
        function filterProducts() {
            // Obtener el término de búsqueda
            var searchTerm = document.getElementById('searchInput').value.toLowerCase();
            
            // Obtener todos los elementos de la lista de productos
            var productos = document.querySelectorAll('.card-title');

            // Iterar sobre los productos y mostrar/ocultar según coincidan con el término de búsqueda
            productos.forEach(function(producto) {
                var productName = producto.textContent.toLowerCase(); // Obtener el nombre del producto en minúsculas
                var card = producto.closest('.col'); // Obtener el contenedor del producto
                if (productName.includes(searchTerm)) {
                    card.style.display = ''; // Mostrar el producto si coincide
                } else {
                    card.style.display = 'none'; // Ocultar el producto si no coincide
                }
            });
        }

        // Agregar un evento de escucha al campo de búsqueda para que se filtre la lista de productos en tiempo real
        document.getElementById('searchInput').addEventListener('input', filterProducts);
    </script>
    <script>
        // Función para filtrar productos por categoría
        function filtrarPorCategoria() {
            var categoriaSeleccionada = document.getElementById("categoryFilter").value.toLowerCase();
            var productos = document.querySelectorAll('.card');

            // Iterar sobre los productos y mostrar/ocultar según coincidan con la categoría seleccionada
            productos.forEach(function(producto) {
                var categoriaProducto = producto.querySelector('.categoria').textContent.toLowerCase();

                if (categoriaSeleccionada === "" || categoriaProducto === categoriaSeleccionada) {
                    producto.style.display = 'block'; // Mostrar el producto si coincide
                } else {
                    producto.style.display = 'none'; // Ocultar el producto si no coincide
                }
            });
        }

        // Llamar a la función al cambiar la selección
        document.getElementById("categoryFilter").addEventListener("change", filtrarPorCategoria);
    </script>
</body>
</html>