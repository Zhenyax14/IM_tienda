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
            <!--- IMPORTANTE: $propiedad es un objeto, aunque devuelve un array de tipo llave -- valor, no se puede tratarlo como array porque da error.--->
            <?php if (isset($propiedad)): ?>
                <form action="/admin/casas/store" method="POST">
                    <!-- ID -->
                    <div class="form-group">
                        <!--- tengo un presentimiento que eso está muy mal, pero es la única solución que llego a implementar de momento --->
                        <input type="hidden" name="id" value="<?= htmlspecialchars($propiedad->id) ?>">
                        <input type="hidden" name="id_tipos" value="<?= htmlspecialchars($propiedad->id_tipos) ?>">
                        <input type="hidden" name="usuario_agente" value="<?= htmlspecialchars($propiedad->usuario_agente) ?>">
                    </div>
                    <!-- Título -->
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" id="titulo" name="titulo" value="<?= htmlspecialchars($propiedad->titulo) ?>" placeholder="Introduce el título de la propiedad" required>
                    </div>

                    <!-- Descripción -->
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea id="descripcion" name="descripcion" placeholder="Introduce la descripción de la propiedad" required><?= htmlspecialchars($propiedad->descripcion) ?></textarea>
                    </div>

                    <!-- Precio -->
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" id="precio" name="precio" value="<?= htmlspecialchars($propiedad->precio) ?>" placeholder="Introduce el precio de la propiedad" required>
                    </div>

                    <!-- Tags. NO IMPLEMENTADO
                    <div class="form-group">
                        <label for="tags">Etiquetas</label>
                        <input type="text" id="tags" name="tags" value="1 Habitacion" placeholder="Ej. 1 Habitación, Piscina, Madera" />
                    </div>
                    -->

                    <!-- IMAGENES. NO IMPLEMENTADO AÚN -->
                    <div class="form-group">
                        <label for="imagen">Imagen</label>

                    </div>

                    <!-- Buttons -->
                    <div class="form-buttons">
                        <button type="submit">Actualizar Propiedad</button>
                        <a href="/admin/casas/index" class="button-cancel">Cancelar</a>
                    </div>
                </form>
            <?php else: ?>
                <p>No se encontró la propiedad.</p>
            <?php endif; ?>

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