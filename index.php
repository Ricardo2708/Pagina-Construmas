<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href='https://cdn-icons-png.flaticon.com/128/9537/9537662.png' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/welcome.css">
    <link rel="stylesheet" href="./styles/products.css">
    <link rel="stylesheet" href="./styles/galery.css">
    <title>Construmas S.A DE C.V | Inicio</title>

</head>
    <body>
        <div id="contenedor_carga">
            <div id="carga">
                <div class="sk-chase">
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                </div>
            </div>
        </div>
        <?php
            include 'layouts/header.php';
            include 'email.php';
        ?>

        <section class="formulario" >

            <div class="formulario-grid contenedor">
                <div  class="formulario-padding" >
                    <h1 data-aos="fade-right">
                        Lo Mejor En <span>Construcción</span> 
                    </h1>
                    <p id="nosotros">
                        Trabajando con más calidad y más rendimiento
                    </p>
                </div>
                
                <div class="video-intro">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Kr6MRFlxp1c" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                    </iframe>
                </div>
            </div>

            <section class="contenido-footer" >
                <div class="contenedor contenido">
                    <div class="newsletter">
                        <h1>
                            Welcome 
                            <span> 
                                to the
                            </span>
                            website !
                        </h1>

                    </div>

                    <div class="social social-block">
                        <h1>Calidad 
                            <span>
                            | Rendimiento
                            </span>
                        </h1>
                    </div>
                </div>  
            </section>

        </section>

        <section class="donacion donacion-about about-block" >
            <div class="contenedor donacion-elementos">
                <div class="contenedor contenido-donacion  donacion-active">

                    <div>
                        <h1>
                            Nuestra  <span> Historia </span>
                        </h1>

                        <p>
                            Construmas S.A DE C.V., nace en el año 2014
                            como una empresa joven e innovadora, dedicada a la fabricación
                            de productos para finos acabados en el rubro de la industria 
                            del recubrimiento de paredes, adhesivo de piso ceramicos, porcelana
                            para sisado, pasta texturizada y pinturas. Nosotros ofrecemos:
                        </p>
                        <!-- <p class="titulo-valores">
                            Nuestros Valores:
                        </p> -->
                    </div>

                    <div class="valores-about">

                        <ul class="valores-items items-4-grid">
                            <li>
                                <i class="bi bi-award-fill"></i>
                                <h4>Excelencia</h4>
                            </li>

                            <li>
                                <i class="bi bi-bookmark-check-fill"></i>
                                <h4>Calidad</h4>
                            </li>

                            <li>
                                <i class="bi bi-chat-quote-fill"></i>
                                <h4>Servicio</h4>
                            </li>

                            <li>
                                <i class="bi bi-clipboard-check-fill"></i>
                                <h4>Lealtad</h4>
                            </li>
                        </ul>

                    </div>

                </div>
                <div class="imagenes-about">
                
                    <img src='./assets/oficina2.jpg' alt="donacion">
                </div>
            </div>
        </section>

        <main class="news" data-aos="fade-down" id="productos">
            <h1 class="title">
                Nuestros <span>Productos</span> 
            </h1>
            <div class="carousel">
                <i class="bi bi-caret-right-fill" id="left-news"></i>
                <section class=" contenedor news-contenido news-contenido2" id="news-contenido">
                    <div class="news-elemento astro-WWVULD7A">
                        <img src="https://res.cloudinary.com/dut4o7zjk/image/upload/v1689192536/estuco_u8mfd6.webp" alt="news" class="astro-WWVULD7A" loading="lazy">
                        <div class="contenido astro-WWVULD7A">
                            <h1 class="astro-WWVULD7A">Estuco</h1>
                            <p class="astro-WWVULD7A">
                                Recubrimiento protector y decorativo, a base de cementicios petréos de granulometría controlada
                            </p>
                            <a href="./assets/pdf/Estucos.pdf" target="_blank" class="astro-WWVULD7A">
                                
                                Hoja Tecnica
                                <i class="bi bi-caret-down-square-fill astro-WWVULD7A"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-elemento astro-WWVULD7A">

                        <img src="https://res.cloudinary.com/dut4o7zjk/image/upload/v1689192535/pegamas_damsly.webp" alt="news" class="astro-WWVULD7A" loading="lazy">
                        <div class="contenido astro-WWVULD7A">
                            <h1 class="astro-WWVULD7A">Pegamás</h1>
                            <p class="astro-WWVULD7A">
                                Adhesivo especialmente para la instalación de pisos cerámicos de media y alta absorción
                            </p>
                            <a href="./assets/pdf/Pegamentos.pdf" target="_blank" class="astro-WWVULD7A">
                                
                                Hoja Tecnica
                                <i class="bi bi-caret-down-square-fill astro-WWVULD7A"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-elemento astro-WWVULD7A">

                        <img src="https://res.cloudinary.com/dut4o7zjk/image/upload/v1689192536/pegamas2_nzeybh.webp" alt="news" class="astro-WWVULD7A" loading="lazy">
                        <div class="contenido astro-WWVULD7A">
                            <h1 class="astro-WWVULD7A">Pegamás (Plus)</h1>
                            <p class="astro-WWVULD7A">
                                Adhesivo para la instalación de pisos cerámicos sin absorción, lajas de piedra natural, porcelanatos etc.
                            </p>
                            <a href="./assets/pdf/Pegamentos.pdf" target="_blank" class="astro-WWVULD7A">
                                
                                Hoja Tecnica
                                <i class="bi bi-caret-down-square-fill astro-WWVULD7A"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-elemento astro-WWVULD7A">

                        <img src="https://res.cloudinary.com/dut4o7zjk/image/upload/v1689192535/porcelana_u1rusi.webp" alt="news" class="astro-WWVULD7A" loading="lazy">
                        <div class="contenido astro-WWVULD7A">
                            <h1 class="astro-WWVULD7A">Porcelana</h1>
                            <p class="astro-WWVULD7A">
                                Relleno de sisa compuesto de cemento, carbonato de calcio, aditivos y pigmentos
                            </p>
                            <a href="./assets/pdf/Porcelanas.pdf" target="_blank" class="astro-WWVULD7A">
                                
                                Hoja Tecnica
                                <i class="bi bi-caret-down-square-fill astro-WWVULD7A"></i>
                            </a>
                        </div>
                    </div>
                </section>
                <i class="bi bi-caret-left-fill" id="right-news"></i>
            </div>
        </main>

        <article class="galeria empleos anuncio">
            <section class="contenedor contenedor-empleos contenedor-anuncio">
                <div class="titulo-empleos titulo-anuncio">
                    <h1 class="title">
                        Productos De Temporada
                    </h1>
                    <p>Descubre nuestros increibles productos</p>
                </div>
                <a  class="astro-WWVULD7A">    
                    No Disponible
                    <!-- <i class="bi bi-box-arrow-up-right"></i> -->
                </a>
            </section>
        </article>

        <section class="donacion mision" >
            <div class="contenedor donacion-elementos mision-elementos">
                

                <article class="mision-more">
                    <div class="contenedor contenido-donacion contenido-mision">
                        <h1>
                            Nuestra <span> Misión </span>
                        </h1>

                        <p>
                            Proporcianar a nuestros clientes, productos 
                            predosificados, duraderos e innovadores, a través
                            de altos estándares de calidad y un equipo de ventas
                            especializado en el rubro
                        </p>
                    </div>

                    <div class="contenedor contenido-donacion contenido-mision">
                        <h1>
                            Nuestra  <span> Visión </span>
                        </h1>

                        <p>
                            Liderar en el ramo de los productos para la construccion
                            por su excelencia y calidad, tanto a nivel nacional como
                            regional
                        </p>
                    </div>



                </article>
                <div class="contenedor contenido-donacion contenido-mision">

                    <img src='./assets/oficina4.jpg' alt="donacion">
                    
                </div>
            </div>
        </section>

        <article class="cause" data-aos="fade-up" >
            <div class="numbers contenedor">

                <div class="contenido-numbers ">
                    <h1 id="number1">+8</h1>
                    <p>Años De Experiencia</p>
                </div>

                <div class="contenido-numbers">
                    <h1 id="number2">+0</h1>
                    <p>Clientes Satisfechos</p>
                </div>

                <div class="contenido-numbers">
                    <h1 id="number3">+10</h1>
                    <p id="noticias">Proyectos Asignados</p>
                </div>

            </div>
        </article>

        <main class="news news-ultimate">
            <h1 class="title">
                Ultimas <span>Noticias</span> 
            </h1>
            <section class="news-contenido news-contenido-ultimate" id="ElementosNews">
            
            </section>
        </main>

        <article class="galeria empleos">
            <section class="contenedor contenedor-empleos">
                <div class="titulo-empleos" data-aos="fade-right">
                    <h1 class="title" >
                        Oportunidades Laborales
                    </h1>
                    <p>Se parte de nuestro equipo Construmas</p>
                </div>
                <a href="empleos.php" class="astro-WWVULD7A" data-aos="fade-left">    
                    Ver Empleos
                    <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </section>
        </article>

        <article class="galeria">
            <section class="contenedor">
                <h1 class="title">
                    Proyectos - Asignados
                </h1>

                <div class="galeria-grid-1" >
                    
                    <img src="./assets/galery/casa1.webp" alt="galeria">
                
                
                    <img src="./assets/galery/casa2.webp" alt="galeria">
                    
                
                    <img src="./assets/galery/casa3.webp" alt="galeria">
                
                
                    <img src="./assets/galery/casa6.jpg" alt="galeria">
                
                
                    <img src="./assets/galery/casa7.jpg" alt="galeria">
                
                
                    <img src="./assets/galery/casa1.webp" alt="galeria">
                
                
                    <img src="./assets/galery/casa2.webp" alt="galeria">
                
                
                    <img src="./assets/galery/casa3.webp" alt="galeria">
                
                
                    <img src="./assets/galery/casa7.jpg" alt="galeria">
                    
                </div>

                <div class="galeria-grid-1 galeria-grid-2" >
                    <img src="./assets/galery/casa1.webp" alt="galeria">
                    <img src="./assets/galery/casa2.webp" alt="galeria">
                    <img src="./assets/galery/casa3.webp" alt="galeria">
                    <img src="./assets/galery/casa7.jpg" alt="galeria">
                </div>
            </section>
        </article>

        <section class="donacion mision contacto" id="contacto">
            <div class="contenedor donacion-elementos mision-elementos flex-formulario">

                <article class="mision-more">
                    <div class="contenedor contenido-donacion contenido-mision">
                        <h1>
                            Formulario  <span>& Ayuda </span>
                        </h1>
                        <p>
                            Puedes comunicarte con nosotros por diferentes medios, 
                            a través de nuestro formulario de contacto,
                             numero de telefono, correo electronico, nuestras redes sociales
                            o simplemente visitenos cuando lo desee, nos ubicamos en el 
                            Km 49 1/2 carretera antigua a nejapa, San Salvador, El Salvador
                        </p>
                    </div>

                    <div class="contenedor contenido-donacion contenido-mision">
                        <div class="valores-about">

                            <ul class="valores-items valores-items2 valores-items3">
                                <li>
                                    <i class="bi bi-envelope-at-fill"></i>
                                    <h4>Correo:</h4>
                                    <p>info@construmas.com.sv</p>
                                </li>
        
                                <li>
                                    <i class="bi bi-headset"></i>
                                    <h4>Telefono:</h4>
                                    <p>+503 2213 7400</p>
                                </li>
        
                                <li>
                                    <i class="bi bi-stopwatch-fill"></i>
                                    <h4>Horarios:</h4>
                                    <p>
                                        L-V: 8am - 5pm
                                    </p>
                                </li>

                                
                            </ul>
        
                        </div>
                    </div>
                </article> 

                <form id="miForm" class="contenedor contenido-donacion contenido-mision formulario-mision" method="post" >
                    <h4>Llena Los Campos *</h4>
                    <div class="contenido-formulario"> 
                        <div class="elemento-formulario">
                            <input type="text" name="name" id="name" placeholder="Name*"  minlength="2" required value="<?php echo $name; ?>">
                        </div>  
                        
                        <section class="flex-campo-formulario">
                            <div class="elemento-formulario">
                                <input type="text" name="email" id="email" placeholder="E-Mail*" required  minlength="2" value="<?php echo $email; ?>">
                            </div>    
                            
                            <div class="elemento-formulario">
                                <input type="tel" name="phone" id="email" placeholder="Tel*" required  minlength="4" value="<?php echo $phone; ?>">
                            </div>
                        </section>
                        
                        <div class="elemento-formulario">
                            <textarea name="msg" id="message" cols="30" rows="2" placeholder="Message*" required minlength="10"><?php echo $msg; ?></textarea>
                        </div>
                        <div class="casilla">
                            <div class="g-recaptcha" data-sitekey="6Ld1CRwnAAAAALioGvWnSZV6G_45N502rqXyuyB2"></div>
                        </div>
                        <input type="submit" value="Send Message" >
                    </div>
                </form>
            </div>
        </section>

        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content contenedor">
                <span class="close">&times;</span>

                <section class="contenedor-modal" id="modal_itemNews">
                </section>
            </div>

        </div>


        <?php
            include 'layouts/footer.php';
        ?>
        
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/638f70c5b0d6371309d2ed98/1gjk511fh';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./js/index.js"></script>
    </body>
</html>

