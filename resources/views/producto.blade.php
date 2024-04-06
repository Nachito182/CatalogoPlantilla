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

// Obtener el ID del producto desde la URL
$producto_id = $_GET['id'];

// Consulta para obtener la información del producto con el ID proporcionado
$sql = "SELECT * FROM tb_producto WHERE id = $producto_id";
$result = $conn->query($sql);

// Consulta para obtener tres productos aleatorios diferentes al producto actual
$sql_relacionados = "SELECT * FROM tb_producto WHERE id != $producto_id ORDER BY RAND() LIMIT 3";
$result_relacionados = $conn->query($sql_relacionados);

// Verificar si se encontró el producto
if ($result->num_rows > 0) {
    // Obtener los datos del producto
    $producto = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title><?php echo $producto['nombre']; ?></title>
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
                    <li class="nav-item"><a href="comprar" class="nav-link">Comprar</a></li>
                    <li class="nav-item m-2"><a href="carrito"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16"><path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/></svg></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container my-5 pt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item">
                    <a class="link-body-emphasis" href="inicio">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"></path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a class="link-body-emphasis fw-semibold text-decoration-none" href="comprar">Catalogo</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $producto['nombre']; ?>
                </li>
            </ol>
        </nav>
        <div class="row px-5 pt-5 align-items-center rounded-3 border ">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-12">
                    <h1 class="page-header border-bottom pb-3"><?php echo $producto['nombre']; ?></h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="">
                        <div class="main-product-image space">
                            <div id="product-carousel" class="carousel slide">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img id="first-image" src="<?php echo $producto['imagenurl']; ?>" alt="<?php echo $producto['nombre']; ?>" alt="Wacom Bamboo Tablet" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form class="form-horizontal" action="/cart/add/224300" method="post" enctype="multipart/form-data" name="buy">
                        <!-- Product Price -->
                        <div class="form-group price_elem row my-3">
                            <label class="col-sm-3 col-md-3 form-control-label nopaddingtop">Precio:</label>
                            <div class="col-sm-8 col-md-9">
                                <span class="product-form-price">S/ <?php echo $producto['precio']; ?></span>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <label for="Quantity" class="col-sm-3 col-md-3 form-control-label">Cantidad:</label>
                            <div class="col-sm-8 col-md-9">
                                <input type="number" class="qty form-control" id="input-qty" name="qty" maxlength="5" value="1">
                            </div>
                        </div>

                        <div class="form-group product-stock product-available row visible my-3">
                            <label class="col-sm-3 col-md-3 form-control-label"></label>
                            <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3">
                                <button class="adc btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                    </svg>     
                                    <span>Añadir al Carrito</span>
                                </button>                                           
                            </div>
                        </div>
                        
                        <div class="form-group row my-3">
                            <label class="col-sm-3 col-md-3 form-control-label">Descripcion:</label>
                            <div class="col-sm-8 col-md-9 description">
                                <p><?php echo $producto['descripcion']; ?></p>
                            </div>
                        </div>
                        <div class="form-group row product-custom_fields my-3">
                            <label class="col-sm-3 col-md-3 form-control-label">Detalles:</label>
                            <div class="col-sm-9 col-md-9">
                            
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $producto['marca']; ?></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $producto['categoria']; ?></button>
                                    </div>
                            </div>
                        </div>
                        <input type="hidden">
                    </form>
                </div>
            </div>    
        </div>
    </div>
    <div class="album bg-body-tertiary">
        <div class="container px-4 py-5">
            <div class="col-12">    
                <h2>Productos relacionados</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                <?php
                // Verificar si se encontraron productos relacionados
                if ($result_relacionados->num_rows > 0) {
                    // Mostrar los productos relacionados
                    while ($producto_relacionado = $result_relacionados->fetch_assoc()) {
                        ?>
                        <div class="col-lg-4 mb-4">
                            <a href="producto?id=<?php echo $producto_relacionado['id']; ?>" class="text-decoration-none">
                                <div class="card h-100">
                                    <img src="<?php echo $producto_relacionado['imagenurl']; ?>" class="card-img-top" alt="<?php echo $producto_relacionado['nombre']; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $producto_relacionado['nombre']; ?></h5>
                                        <p class="card-text"><?php echo $producto_relacionado['descripcion']; ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $producto_relacionado['marca']; ?></button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><?php echo $producto_relacionado['categoria']; ?></button>
                                            </div>
                                            <small class="text-body-secondary">S/ <?php echo $producto_relacionado['precio']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo "No hay productos relacionados.";
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
</body>
</html>
<?php

// Cerrar la conexión
$conn->close();
?>
