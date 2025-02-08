<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> || MENU</title>
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
                            <a href="#">Iniciar sesión</a>
                        </li>
                    </ul>
                </div>
             
                
                
        </nav>
        
    </header>
 <!--- Fin barra de navegación ---> 

    <main>
        <div class="cart-wrapper">
            <h2>Lista de Productos</h2>
            <table class="cart-item">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Artículo</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://via.placeholder.com/50" alt="Producto 1"></td>
                        <td>Manzana</td>
                        <td>5</td>
                        <td>$1.00</td>
                    </tr>
                    <tr>
                        <td><img src="https://via.placeholder.com/50" alt="Producto 2"></td>
                        <td>Plátano</td>
                        <td>3</td>
                        <td>$0.80</td>
                    </tr>
                    <tr>
                        <td><img src="https://via.placeholder.com/50" alt="Producto 3"></td>
                        <td>Uvas</td>
                        <td>2</td>
                        <td>$2.50</td>
                    </tr>
                </tbody>
            </table>
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
        <section class="network">
            <ul>
                <li>
                    <h3>Nuestras redes sociales</h3>
                    <div class="underscore-bar"></div>
                </li>
                <li><a href=""><img src="" alt="facebook"></a></li>
                <li><a href=""><img src="" alt="youtube"></a></li>
                <li><a href=""><img src="" alt="X"></a></li>

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
</body>
</html>