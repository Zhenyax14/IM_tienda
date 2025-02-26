<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> InmoSHOP || Tu pedido</title>
    <link rel="stylesheet" href="../../css/header/header.css">
    <link rel="stylesheet" href="../../css/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/footer/footer.css">
</head>
<body>
    <!--- Barra de navegación --->
    <header>
        <nav class="nav">
           
                <a class="navbar-logo" href="../../../index.html">
                    <img src="../../media/img/logo/logo.png" >
                </a>
                <ul>
                    <li>
                        <a href="../../../index.html">Página principal</a>
                    </li>
                    <li>
                        <a href="../shop/shop.php">Catálago</a>
                    </li>
                    <li>
                        <a href="cart.php" class="active">Cesta</a>
                    </li>
                    <li>
                        <a href="./resources/html/form.html">X</a>
                    </li>
                    
                    
                </ul>
                <div class="nav-session">
                    <ul>
                        <li>
                            <a href="../register-form/register.html">Registrarse</a>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        
                        <li>
                            <a href="../login-form/login.html">Iniciar sesión</a>
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

    <!--- PREGUNTA IMPORTANTE:: este carrito tiene que ser un formulario?? --->
    <main>
        <div class="cart-wrapper">
            <div class="cart-review">
                <div class="cart-subtotal">
                    <h2>Subtotal:</h2>
                    <p>12000<span>€</span></p>
                </div>
                
            </div>
            
            <div class="cart-body">
                <div class="cart-item">
                    <ul>
                        <li>
                            <a href="">
                                <img src="../../media/img/apartments/1.jpg" alt="imagen_articulo">
                            </a>
                        </li>
                        <li>
                            <p>
                                Casa familiar "LOLI"
                            </p>
                        </li>
                        <li>
                            <p>
                                5000€ * 1
                            </p>
                        </li>
                        <li>
                            <p>
                                IVA: <span>21%</span>
                            </p>
                        </li>
                        <li>
                        <p>TOTAL: <span>5000€</span></p>
                        </li>
                        <li class="cart-item-quantity">
                            <a href="">-</a>
                            <span>1</span>
                            <a href="">+</a>
                        </li>
                    </ul>
                </div>
                <div class="cart-item">
                    <ul>
                        <li>
                            <a href="">
                                <img src="../../media/img/apartments/2.jpg" alt="imagen_articulo">
                            </a>
                        </li>
                        <li>
                            <p>
                                Casa "Beowulf"
                            </p>
                        </li>
                        <li>
                            <p>
                                3500€ * 2
                            </p>
                        </li>
                        <li>
                            <p>
                                IVA: <span>21%</span>
                            </p>
                        </li>
                        <li>
                            <p>TOTAL: <span>7000€</span></p>
                        </li>
                        <li class="cart-item-quantity">
                            <a href="">-</a>
                            <span>2</span>
                            <a href="">+</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="cart-payment-btn">
                    <button type="submit">PAGO SEGURO</button>
                </div>
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
                    <p>Todos los derechos reservados</p>
                </li>
            </ul>
        </section>
   </footer>
   <script src="../../js/header.js"></script>
</body>
</html>