
    <?php
    include("conexion.php");
    $con = conectar();

    echo "Conexion exitosa, sos la mera verga";
    ?>



<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web</title>
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Rubik&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/54bdf0cfde.js" crossorigin="anonymous"></script>


</head>



<body>
    
    <header>


        <nav>
            <a href="index.html">Inicio</a>
            <a href="Acerca.html">Acerca De</a>
            <a href="Contacto.html">Contactame</a>
        </nav>

        <section class="textos-header">
            <h1>
                <i class="fa-solid fa-terminal"></i> Ingeniero en sistemas, Creador de videojuegos y mas</h1>
            <h2>
                
                Simplemente me gusta lo que hago. 
                
            </h2>
        </section>


        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #093d5b;"></path></svg></div>
   
    </header>






    <main>

        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Habilidades y Experiencia</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/Logo2.svg" alt="" class = "imagen-about">
                <div class="contenido-textos">
                    <p>Durante el un largo viaje siempre e tenido habilidades pero de otras cosas</p>
                    <p>Me gusta mucho el videojuego y la programacion, ademas de la tecnologia.</p>
                    <p>Creo que en esta maravilloso viaje que tengo desde los ultimos años, siempre ha sido superar mis barreras</p>
                    <h3><span>1</span>Habilidades</h3>
                    <p>1. C#</p>
                    <p>2. C++</p>
                    <p>3. Unity</p>
                    <p>4. SQL-Server</p>
                    <h3><span>2</span>Experiencia</h3>
                    <p>Experiencia laboral serian mis propios proyectos que he creado desde mi casa, como este portafolio en HTML y CSS</p>
                </div>
            </div>
        </section>






        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/portafolio/1.jpg" alt="">
                        <div class="hover-galeria"> 
                            <img src="img/icono-lupa.png" alt="">
                            <p>Mostrar Trabajo</p>  
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/portafolio/2.jpg" alt="">
                        <div class="hover-galeria"> 
                            <img src="img/icono-lupa.png" alt="">
                            <p>Nuestro trabajo</p>  
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/portafolio/3.jpg" alt="">
                        <div class="hover-galeria"> 
                            <img src="img/icono-lupa.png" alt="">
                            <p>Nuestro trabajo</p>  
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/portafolio/4.jpg" alt="">
                        <div class="hover-galeria"> 
                            <img src="img/icono-lupa.png" alt="">
                            <p>Nuestro trabajo</p>  
                        </div>
                    </div>          
        </section>





            <section class="clientes contenedor">
                <h2 class="titulo">Referencias</h2>
                <div class="cards">

                    <div class="card">
                        <img src="img/clientes/1.jpg" alt="">
                        <div class="contenido-texto-card">
                            <h4>Elliot</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem doloremque ea, ab sequi cumque, quia illum vitae sunt est accusantium temporibus ullam veniam libero tenetur?</p>
                        </div>
                    </div>

                    <div class="card">
                        <img src="img/clientes/2.jpg" alt="">
                            <div class="contenido-texto-card">
                                <h4>Hideo Kojima</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptate, ea adipisci saepe dolor, repellat optio doloribus rem alias nisi deserunt quos quae ut distinctio.</p>
                            </div>
                    </div>
                </div>
            </section> 
            



            <section class="about-services">
                <div class="contenedor">
                    <h2 class="titulo">Servicios</h2>
                    <div class="servicio-cont">
                        <div class="servicio-ind">
                            <a href="https://github.com/ArauzB">
                            <img src="img/servicios/1.svg" alt="">
                            </a> 
                            <h3>
                                
                                
                                 <i class="fa-brands fa-github"></i>
                                Mi GitHub </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eveniet?</p>
                        </div>


                        <div class="servicio-ind">
                            <a href="https://github.com/ArauzB">
                            <img src="img/servicios/2.svg" alt="">
                        </a>
                            <h3>
                                <i class="fa-solid fa-blog"></i>
                                Blog</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eveniet?</p>
                        </div>
                    </div>
                </div>
            </section>


    </main>








    <footer>
        <div class="contenedor-footer">
            
            <div class="sociales">
                <a href="https://es-la.facebook.com/"><i class="fab fa-facebook"></i>  </a>
                <a href="https://twitter.com/arauzb18"><i class="fab fa-twitter"></i>   </a>
                <a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram"></i>   </a>
            </div>

            <p class="copy">Todos los derechos reservados &copy;</p>
        </div>
    </footer>


    
</body>
</html>
