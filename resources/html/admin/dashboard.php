<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InmoSHOP || Casas </title>
    <link rel="stylesheet" href="./../../css/header/header.css">
    <link rel="stylesheet" href="./resources/css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../css/footer/footer.css">
    
</head>
<body>
    <header>
        <nav class="nav">
           
                <a class="navbar-logo" href="dashboard.php">
                    <img src="../../media/img/logo/logo.png" >
                </a>
                <ul>
                    <li>
                        <a href="dashboard.php" class="active">Resumen</a>
                    </li>
                    <li>
                        <a href="../../../index.html">Gestionar casas</a>
                    </li>
                    <li>
                        <a href="../../../index.html">Gestionar agentes</a>
                    </li>
                    
                    
                    <li>
                        <a href="#">X</a>
                    </li>
                    
                    
                </ul>
                <div class="nav-session">
                    <ul>
                        <li>
                            <a href="../../../index.html">Cerrar sesión</a>
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
                <div class="menu-item">
                  
                    <img src="../../media/img/apartments/1.jpg" alt="imagen">
                    <span class="overlay-text">Casa prefabricada de EE.UU</span>
                    <div>
                        <a href="item.php">Editar</a>
                        <button  value=""><img src="./resources/media/img/trash.png" alt="DELETE"></button>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="../../media/img/apartments/2.jpg" alt="imagen">
                    <span class="overlay-text">Casa prefabricada, perfecta para una escapada al bosque</span>
                    <div>
                        <a href="item.php">Editar</a>
                        <button  value=""><img src="./resources/media/img/trash.png" alt="DELETE"></button>
                    </div>
                    
                </div>
                <div class="menu-item">
                    
                    <img src="../../media/img/apartments/3.jpg" alt="imagen">
                    <span class="overlay-text">Casas prefabricadas de Suecia</span>
                    <div>
                        <a href="item.php">Editar</a>
                        <button  value=""><img src="./resources/media/img/trash.png" alt="DELETE"></button>
                    </div>
                </div>
                <div class="menu-item">
                    
                    <span></span>
                    
                    <div class="item-add">
                        <a href="item.php">Añadir nueva casa</a>
                        
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
                    <li><a href=""><img src="../../media/img/icons/facebook.png" alt="facebook"></a></li>
                    <li><a href=""><img src="../../media/img/icons/youtube.png" alt="youtube"></a></li>
                    <li><a href=""><img src="../../media/img/icons/whatsapp.png" alt="whatsapp"></a></li>
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
</body>
</html>