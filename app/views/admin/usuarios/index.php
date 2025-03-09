<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InmoSHOP || Usuarios </title>
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
                    <a href="/admin/casas/index">Gestionar casas</a>
                </li>
                <li>
                    <a href="/admin/users/index"  class="active">Gestionar agentes</a>
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


            <section class="menu">
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario):;?>

                        <div class="menu-item">
                            <span class="overlay-text"><?= htmlspecialchars($usuario['nombre']) ?></span>
                            <span class="overlay-text"><?= htmlspecialchars($usuario['apellidos']) ?></span>
                            <div>
                                <!-- Dynamically generate the edit link, passing the property ID -->
                                <a href="/admin/usuario/edit?id=<?= htmlspecialchars($usuario['id']) ?>">Editar</a>

                                <!-- Delete button wrapped in a form, passing the property ID -->
                                <form action="/admin/users/destroy" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($usuario['id']) ?>">
                                    <button type="submit" onclick="return confirm('¿Estás seguro?');">
                                        <img src="http://127.0.0.1:8000/img/admin/trash1.png" alt="DELETE">
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay usuarios registrados.</p>
                <?php endif; ?>
                <div class="menu-item">
                    <span></span>
                    <div class="item-add">
                        <a href="/admin/user/new">Añadir nuevo usuario agente (PROXIMAMENTE)</a>
                    </div>
                </div>
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