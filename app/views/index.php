<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/main_page.css" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/footer/footer.css" />
        <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/header/header.css" />


        <title>InmoSHOP || Página principal</title>
        
    </head>
    <body>
   

 <!--- Barra de navegación --->
    <header>
        <nav class="nav">

                <a class="navbar-logo" href="/">
                    <img src="http://127.0.0.1:8000/img/logo/logo.png" >
                </a>
               
                <ul>
                    
                    <li>
                        <a href="/" class="active">Página principal</a>
                    </li>
                    <li>
                        <a href="/casas/index">Catálago</a>
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
 <!--- Fin barra de navegación ---> 


    <main>
            
        <section class="video_background">
                <video class="video_media" autoplay muted loop id="myVideo">
                    <source src="http://127.0.0.1:8000/img/landscape.mp4" type="video/mp4">
                </video>
                
                
                <div class="video_content">
                    <form action="/casas/index" method="get" target="_blank">
                            <h3>
                                ¿Te apetece una escapada? 
                            </h3>    
                        
                        <div class="header-button">
                            <input type="submit" value="Ver disponibilidad">
                        </div>
                    </form>
                </div>
        </section>

<!--- Comienzo Contenido principal ---> 
        <section class="first-block-wrapper">
            <section class="content-wrapper">
                <div class="content-1">
                    <h3>Disfruta del mar</h3>   
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus quod adipisci, magnam explicabo consequatur officia nisi necessitatibus quam dignissimos, veritatis libero facere ad nemo maxime, ea nihil deserunt odio! Obcaecati quo accusamus excepturi sit minima numquam placeat voluptatum quasi totam deleniti, quibusdam, ab illo delectus eaque accusantium, iste corporis veritatis eligendi explicabo. Itaque, in dolorum repellat quaerat temporibus, consectetur sint corrupti porro provident accusantium impedit quisquam excepturi odio ut accusamus placeat nostrum similique eligendi mollitia? Deleniti, veniam. Sequi, eos ipsum! Illum reiciendis ullam quisquam labore provident ab nesciunt dicta. Quas incidunt sunt, cum dolores nostrum quod quo natus molestiae!</p>
                </div>       
            </section>
            <section class="first-block-feature">
               <!--- <img src="./resources/img/main-page.svg" alt="feature1"> --->
            </section>
        </section>
        <section class="content-button">
            <div class="button-1">
                <a href="/casas/index" class="button-2">
                    Reservar
                </a>
            </div>
        </section>

    <!--- Segundo bloque de contenido --->
        
    <section class="carousel-container">
    <div class="carousel">
    <div class="carousel">
    <?php if (!empty($propiedades)): ?>
        <!-- Un apaño para mostrar solo 4 propiedades, porque limit() del Model todavía no he podido hacer y no me queda tiempo ya --->
        <?php foreach (array_slice($propiedades, 0, 4) as $propiedad): ?>
            <div class="menu-item">
                <img src="<?= htmlspecialchars($propiedad['thumbnail']) ?>" alt="Propiedad Thumbnail">
                <h3 class="overlay-text"><?= htmlspecialchars($propiedad['titulo']) ?></h3>
                <p class="overlay-text"><?= htmlspecialchars($propiedad['descripcion']) ?></p>
                <span class="overlay-text"><?= htmlspecialchars($propiedad['precio']) ?>€</span>
                <div>
                    <a href="/casas/show?id=<?= htmlspecialchars($propiedad['id']) ?>">Más detalles</a>
                    <button>
                        <img src="http://127.0.0.1:8000/img/icons/wishlist.png" alt="addToWishList">
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay casas disponibles.</p>
    <?php endif; ?>
</div>

   
</section>



        <section class="content-2">
            <div class="separator-text">        
                <h1>Los recuerdos te esperan!</h1>
                <h2>Hazte socio ahora</h2>
            </div>    
            <section class="content-button">
                    <div class="button-1">
                        <a href="#" class="button-2">
                            Contactar
                        </a>
                    </div>
            </section>
        </section>
        <section class="first-block-wrapper">
            <section class="first-block-feature">
                <!--- <img src="./resources/img/main-page.svg" alt="feature1"> --->
            </section>
            <section class="content-wrapper">
                <div class="content-1">
                    <h3>¿Porque nosotros?</h3>   
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus quod adipisci, magnam explicabo consequatur officia nisi necessitatibus quam dignissimos, veritatis libero facere ad nemo maxime, ea nihil deserunt odio! Obcaecati quo accusamus excepturi sit minima numquam placeat voluptatum quasi totam deleniti, quibusdam, ab illo delectus eaque accusantium, iste corporis veritatis eligendi explicabo. Itaque, in dolorum repellat quaerat temporibus, consectetur sint corrupti porro provident accusantium impedit quisquam excepturi odio ut accusamus placeat nostrum similique eligendi mollitia? Deleniti, veniam. Sequi, eos ipsum! Illum reiciendis ullam quisquam labore provident ab nesciunt dicta. Quas incidunt sunt, cum dolores nostrum quod quo natus molestiae!</p>
                </div>       
            </section>
            
        </section>
        <section class="content-button">
            <div class="button-1">
                <a href="/casas/index" class="button-2">
                    Reservar
                </a>
            </div>
        </section>
            
       
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
                    <p>Todos los derechos reservados</p>
                </li>
            </ul>
        </section>
    </footer>
    <script src="http://127.0.0.1:8000/js/header.js"></script>
    <script src="http://127.0.0.1:8000/js/carousel.js"></script>
</body>


</html>