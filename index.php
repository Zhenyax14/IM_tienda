<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión || MENU</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            background-color: rgb(239, 240, 233);
            width: 100%;
            height: 100%;

            header {
               
                nav {
                    display: flex;
                    
                    align-items: center;
                    background-color: rgb(203, 204, 147);
                    width: 100%;

                    .logo {
                        margin-left: 5%;
                        text-transform: capitalize;
                        color: #53a3e4;
                        padding: 2%;
                        font-size: 130%;
                        width: 30%;
                        cursor: pointer;
                    }

                    ul {
                        display: flex;
                        list-style: none;
                        justify-content:space-around;
                        width: 100%;
                        float: right;

                        li {

                            a {
                                text-decoration: none;
                                color: white;


                                &:hover {
                                    color: #53a3e4;
                                    text-shadow: 0 0 1px #9ee2fd;
                                }
                            }


                        }
                    }
                }
            }


@media (max-width:500px) {
    /*Mover las filtros arriba cuando el monitor es pequeño
    */
}

@media (max-width: 900px) {

    .menu-wrapper {
                width: 100%;
                display: flex;
                gap: 20px;
                justify-content: center;
                padding: 20px;
           
                    aside {
                        margin: 0;
                        padding: 0;
                        background-color: #53a3e4;
                        height: 100%;
                    
                        width: 200px;
                        padding: 10px;
                        margin-right: 5%;
                    }

                    .menu {
                        width: 70%;
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
                        gap: 30px;
                            
                
                        .menu-item {
                            width: 300px;
                
                            text-align: center;
                            
                        }
                    }

            div {
                min-height: 400px;
                min-width: 300px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                border-radius: 5%;
                background-color: rgb(217, 204, 161); /* Light background on hover */
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3), 0 4px 25px rgba(0, 0, 0, 0.1);

                &:hover {
                    background-color: rgb(235, 219, 168); /* Light background on hover */
                    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1), 0 8px 40px rgba(0, 0, 0, 0.05);
                    transition: 1s;


                    img {
                        background-color: white;
                        z-index: -1;
                        
                    }
                    
                }


                img {
                   
                    border-radius: 10%;
                    height: 250px;
                    width: 250px;
                    z-index: 2;

                }

                a {
                    text-decoration: none;
                    text-transform: uppercase;
                    font-style: italic;
                    color:rgb(255, 255, 255);
                    background-color: #53a3e4;
                    padding: 10px;
                    border-radius: 10px;
                    transition-duration: 0.2s;

                    &:hover {
                        cursor: pointer;
                        color: #53a3e4;
                        background-color:rgb(255, 255, 255);
                        transform: scale(1.1);
                    }
                }
                }
            }
        }
           
            
    }

    </style>
</head>
<body>
    <header>
        
        <nav>
            <div class="logo">
                <h1>
                    Gestión<span>APP</span>
                </h1>
            </div>   
            <ul>
                <li>
                    <a href="empleado/empleado.php">Añadir empleado</a>
               </li>
               <li>
                    <a href="empresa/departamento.html">Añadir empresa</a>
               </li>
    
            </ul>
        </nav>
    </header>
    <div class="menu-wrapper">
        <aside>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, id temporibus! Ea, voluptatum qui atque, quasi quod aspernatur non reiciendis veniam at eum eius reprehenderit suscipit est? Veritatis ad quibusdam enim. Consequuntur neque molestias ullam maxime aperiam nesciunt ut alias deleniti, hic, sed voluptate quaerat. Iste omnis quasi nam, rem, illum voluptatibus iure delectus, error perspiciatis alias consequatur eius voluptates fugit facilis. Maxime cum officia non ad veritatis aperiam corporis error nihil, rerum iusto quibusdam inventore ratione accusantium, nobis tempore ipsam optio possimus dolores, iste vel molestias atque. Minima voluptatibus vero nobis nemo libero placeat, maiores laudantium corporis sed animi!</p>
        </aside>
        <section class="menu">
            <div class="menu-item">
                
                <img src="./media/img/empleado.jpg" alt="imagen">
                <span class="overlay-text">En esta sección se puede añadir nuevos empleados de diferentes categorias</span>
                <a href="empleado/empleado.php"></a>
            </div>
            <div class="menu-item">
                <img src="./media/img/departamento.jpg" alt="imagen">
                <span class="overlay-text">En esta sección se puede añadir nuevos departamentos para el profesorado</span>
                <a href="empresa/departamento.html">Añadir un departamento</a>
            </div>
            <div class="menu-item">
                
                <img src="./media/img/empleado.jpg" alt="imagen">
                <span class="overlay-text">En esta sección se puede añadir nuevos empleados de diferentes categorias</span>
                <a href="empleado/empleado.php"></a>
            </div>
            <div class="menu-item">
                
                <img src="./media/img/empleado.jpg" alt="imagen">
                <span class="overlay-text">En esta sección se puede añadir nuevos empleados de diferentes categorias</span>
                <a href="empleado/empleado.php"></a>
            </div>
            <div class="menu-item">
                
                <img src="./media/img/empleado.jpg" alt="imagen">
                <span class="overlay-text">En esta sección se puede añadir nuevos empleados de diferentes categorias</span>
                <a href="empleado/empleado.php"></a>
            </div>
        </section>
    </div>
    
    
</body>
</html>