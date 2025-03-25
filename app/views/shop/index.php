<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InmoSHOP || Casas </title>
    <link rel="stylesheet" href="./../../css/header/header.css">
    <link rel="stylesheet" href="./../../css/shop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../css/footer/footer.css">
    
</head>
<body>
    <header>
        <nav class="nav">
           
                <a class="navbar-logo" href="/">
                    <img src="http://127.0.0.1:8000/img/logo/logo.png" >
                </a>
                <ul>
                    <li>
                        <a href="/">Página principal</a>
                    </li>
                    <li>
                        <a href="/casas/index" class="active">Catálago</a>
                    </li>
                    <li>
                        <a href="/cesta/index">Cesta</a>
                    </li>
                    
                    
                </ul>
                <div class="nav-session">
                    <ul>
                        <li>
                            <a href="/users/index">Registrarse</a>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        
                        <li>
                            <a href="/users/login/index">Iniciar sesión</a>
                        </li>
                    </ul>
                </div>
                <div id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>    
        </nav>
    </header>
    <main>
        <div class="menu-wrapper">
                <!-- Añadir datalist como opciones de filtros -->
                <form action="/casas/index"  method="GET" class="filters">
                    <div>
                        <label for="filter-order">Ordenar por:</label>
                        <select name="orderBy" id="">
                            <option value="precio">Precio</option>
                            <option value="titulo">Nombre</option>
                            <option value="fecha_mod">Fecha de última actualización</option>
                        </select>
                        
                    </div>
                    <div>
                        <label for="direction">Orden:</label>
                        <select name="direction" id="direction">
                            <option value="ASC">ASC</option>
                            <option value="DESC">DESC</option>
                        </select>
                    </div>
                    <div>
                        <label for="filter-search">Buscar</label>
                        <input type="text" name="search" id="search">
                    </div>
                    <div class="filters-btn-wrapper">
                        <input class="filters-btn" type="submit" value="Buscar">
                    </div>
                    
                </form>
            <section class="menu">
                <?php if (!empty($propiedades)): ?>
                     <?php foreach ($propiedades as $propiedad): ?>
                        <div class="menu-item">
                            <img src="<?= htmlspecialchars($propiedad['thumbnail']) ?>" alt="<?= htmlspecialchars($propiedad['titulo']) ?>">
                            <h3 class="overlay-text"><?= htmlspecialchars($propiedad['titulo']) ?></h3>
                            <p class="overlay-text"><?= htmlspecialchars($propiedad['descripcion']) ?></p>
                            <span class="overlay-text"><?= htmlspecialchars($propiedad['precio']) ?>€</span>
                            <div>
                                <a href="/casas/show?id=<?= htmlspecialchars($propiedad['id']) ?>">Más detalles</a>
                                <button  value=""><img src="http://127.0.0.1:8000/img/icons/wishlist.png" alt="addToWishList"></button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <p>No hay casas disponibles.</p>
                    <?php endif; ?>
            </section>
        </div>
    </main>
   <footer>
        <section class="contact-info">
            <ul>
                <li>
                    <h3>Contáctanos</h3>
                    <div class="underscore-bar"></div>
                </li>
                <li><a href="" type="tel">+341234554</a></li>
                <li><a href="" type="email">eugkan@alu.edu.gva.es</a></li>
                <li></li>
            </ul>
        </section>
        <section class="socials">
            <ul>
                <li>
                    <h3>Nuestras redes sociales</h3>
                    <div class="underscore-bar"></div>
                </li>
                <div class="socials-icons">
                    <li><a href="https://www.facebook.com/?locale=es_ES"><img src="http://127.0.0.1:8000/img/icons/facebook.png" alt="facebook"></a></li>
                    <li><a href="https://www.youtube.com/"><img src="http://127.0.0.1:8000/img/icons/youtube.png" alt="youtube"></a></li>
                    <li><a href="#"><img src="http://127.0.0.1:8000/img/icons/whatsapp.png" alt="whatsapp"></a></li>
                </div>
               

            </ul>
        </section>
        <section class="legal-info">
            <ul>
                <li>
                    <h3>Aviso legal</h3>
                    <div class="underscore-bar"></div>
                </li>
                <li>
                    <p>Esta pagina web cumple con reglamento de Real Decreto 1023910293</p>

                </li>
                <li>
                    <p>Página web hecha con ❤️ por Evgenii Kanyshev</p>
                </li>
                <li>
                    <p class="copyright">Todos los derechos reservados</p>
                </li>
            </ul>
        </section>
   </footer>
    <script src="http://127.0.0.1:8000/js/header.js"></script>
</body>
</html>