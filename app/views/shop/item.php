<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InmoSHOP || Casas </title>
    <link rel="stylesheet" href="./../../css/header/header.css">
    <link rel="stylesheet" href="./../../css/item.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../css/footer/footer.css">
    
</head>
<body>
    <header>
        <nav class="nav">
           
                <a class="navbar-logo" href="/">
                    <img src="http://127.0.0.1:8000/img/logo/logo.png">
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
        <div class="item-wrapper">
            <!--- IMPORTANTE: $propiedad es un objeto, aunque devuelve un array de llave -- valor, no se puede tratarlo como array porque da error.--->
            <?php if (isset($propiedad)): ?>
                <div class="item">
                    <div class="item-carousel">
                        <span><</span>
                        <img src="../../media/img/apartments/1.jpg" alt="imagen">
                        <span>></span>
                    </div>

                    <div class="item-photos">
                        <img src="../../media/img/apartments/1.jpg" alt="imagen">
                    </div>

                    <div class="item-info">
                        <h3 class="overlay-text"><?= htmlspecialchars($propiedad->titulo) ?></h3>
                        <p><?= htmlspecialchars($propiedad->descripcion) ?></p> <!-- Display the description -->
                    </div>

                    <ul class="item-tags">
                        <!--- Para esta funcionalidad hay que añadir una relación de los tags que es M:N así que tercer trimestre
                        O simplificar los tags a  una entrada de propiedad.tags, donde separarlos por comillas y aquí hacer un explode. Supongo que eso no vale, así que ni entro --->
                        <li><a href="#">1 Habitación</a></li>
                        <li><a href="#">1 planta</a></li>
                        <li><a href="#">Piscina</a></li>
                        <li><a href="#">Madera</a></li>
                    </ul>

                    <div class="item-price">
                        <h3>PRECIO: </h3>
                        <p><?= htmlspecialchars($propiedad->precio) ?>€</p>
                    </div>

                    <div class="item-buttons">
                        <a href="#">Añadir al carrito</a>
                        <button value=""><img src="http://127.0.0.1:8000/img/icons/wishlist.png" alt="addToWishList">Lista de deseado</button>
                    </div>
                </div>
            <?php else: ?>
                <p>No se encontró la propiedad.</p>
            <?php endif; ?>

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
                    <li><a href="https://www.youtube.com/"><img src="http://127.0.0.1:8000/img/icons/youtube.png" alt="youtube"></a></li>
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