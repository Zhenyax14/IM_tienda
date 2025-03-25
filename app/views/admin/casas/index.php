<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InmoSHOP || Casas </title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/header/header.css" />

    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/admin/dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/footer/footer.css" />

    
</head>
<body>
    <header>
        <nav class="nav">

            <a class="navbar-logo" href="/admin/index">
                <img src="http://127.0.0.1:8000/img/logo/logo.png" >
            </a>
            <ul>
                <li>
                    <a href="/admin/index">Resumen</a>
                </li>
                <li>
                    <a href="/admin/casas/index" class="active">Gestionar casas</a>
                </li>
                <li>
                    <a href="/admin/users/index">Gestionar agentes</a>
                </li>


            </ul>
            <div class="nav-session">
                <ul>
                    <li>
                        <a href="/">Cerrar sesión</a>
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
            <form action="/admin/casas/index"  method="GET" class="filters">
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
                <div class="menu-item">
                    <span></span>
                    <div class="item-add">
                        <a href="/admin/casas/create">Añadir nueva casa</a>
                    </div>
                </div>
                <?php if (!empty($propiedades)): ?>
                    <?php foreach ($propiedades as $propiedad): ?>
                        <div class="menu-item">
                            <!-- Dynamically set the image and title -->
                            <img src="<?= htmlspecialchars($propiedad['image_url']) ?>" alt="<?= htmlspecialchars($propiedad['titulo']) ?>">
                            <span class="overlay-text"><?= htmlspecialchars($propiedad['titulo']) ?></span>
                            <div>
                                <!-- Dynamically generate the edit link, passing the property ID -->
                                <a href="/admin/casas/edit?id=<?= htmlspecialchars($propiedad['id']) ?>">Editar</a>

                                <!-- Delete button wrapped in a form, passing the property ID -->
                                <form action="/admin/casas/destroy" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($propiedad['id']) ?>">
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this property?');">
                                        <img src="http://127.0.0.1:8000/img/admin/trash1.png" alt="DELETE">
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay propiedades disponibles.</p>
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
                    <li><a href=""><img src="http://127.0.0.1:8000/img/icons/facebook.png" alt="facebook"></a></li>
                    <li><a href=""><img src="http://127.0.0.1:8000/img/icons/youtube.png" alt="youtube"></a></li>
                    <li><a href=""><img src="http://127.0.0.1:8000/img/icons/whatsapp.png" alt="whatsapp"></a></li>
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