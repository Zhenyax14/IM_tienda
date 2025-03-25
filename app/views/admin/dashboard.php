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
                        <a href="/admin/index" class="active">Resumen</a>
                    </li>
                    <li>
                        <a href="/admin/casas/index">Gestionar casas</a>
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
                <!-- Añadir datalist como opciones de filtros -->
                <form action="" class="filters">
                    <div>
                        <label for="filter-order">Visitas en últimas 24h:</label>
                        
                        
                    </div>
                    <div>
                        <label for="filter-order">Usuarios nuevos en últimas 24h:</label>
                        
                    </div>
                    
                    
                    
                </form>
            <section class="menu">
                
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