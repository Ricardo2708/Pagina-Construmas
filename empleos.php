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
    <link rel="stylesheet" href="./styles/empleos.css">
    <title>Construmas S.A DE C.V | Empleos</title>

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
            include 'curriculum.php'
        ?>

        <article class="contenedor empleo-article">
            <div class="empleo-destacado">
            </div>
            <section class="list-empleo-article">
                <div class="title-empleo">
                    <h1>Empleos</h1>
                    <p>-- Destacados --</p>
                </div>
                <div class="list-element-empleo">

                </div>
                
            </section>
        </article>

        <div id="myModal" class="modal">
            <div class="modal-content contenedor modal-content-empleos">
                <span class="close">&times;</span>
                <section class="contenedor-modal modal-Nodestacado" >
                    <div id="modal_itemNews">
                    </div>
                    <form id="miForm" class="contenedor contenido-donacion contenido-mision formulario-mision formulario-modal-list" method="post" enctype="multipart/form-data" >
                        <div class="contenido-formulario"> 
                            <div class="elemento-formulario">
                                <input type="text" name="name" id="name" placeholder="Name*" required minlength="2" value="<?php echo $name; ?>">
                            </div>  
                            
                            <div class="elemento-formulario">
                                <input type="text" name="email" id="email" placeholder="E-Mail*" required minlength="2" value="<?php echo $email; ?>">
                            </div>  

                            <div class="elemento-formulario">
                                <input type="tel" name="tel" id="tel" placeholder="Tel*" required minlength="2" value="<?php echo $tel; ?>">
                            </div> 

                            <div class="elemento-formulario">
                                <input name="my_file" type="file" id="my_file" name="my_file" accept="application/pdf" required/>
                            </div> 

                            <div class="casilla">
                                <div class="g-recaptcha" data-sitekey="6Ld1CRwnAAAAALioGvWnSZV6G_45N502rqXyuyB2"></div>
                            </div>
                            <input type="submit" value="Enviar CV" >
                        </div>
                    </form>
                </section>

            </div>
        </div>

        <div id="myModal2" class="modal2">
            <div class="modal-content2 contenedor modal-content-empleos2">
                <span class="close2">&times;</span>
                <section class="contenedor-modal" id="modal_itemNews">
                    <div class="modal_api">
                        <div class="modal_imagenes">  
                            <img src='./assets/cv4.jpg' alt="news" class="" >
                        </div> 
                        <form id="miForm" class="contenedor contenido-donacion contenido-mision formulario-mision formulario-modal" method="post" enctype="multipart/form-data">
                            <div class="contenido-formulario"> 
                                <div class="elemento-formulario">
                                    <input type="text" name="name" id="name" placeholder="Name*" required minlength="2" value="<?php echo $name; ?>">
                                </div>  
                                
                                <div class="elemento-formulario">
                                    <input type="text" name="email" id="email" placeholder="E-Mail*" required minlength="2" value="<?php echo $email; ?>">
                                </div>  

                                <div class="elemento-formulario">
                                    <input type="tel" name="tel" id="tel" placeholder="Tel*" required minlength="2" value="<?php echo $tel; ?>">
                                </div> 

                                <div class="elemento-formulario">
                                    <input name="my_file" type="file" id="my_file" accept="application/pdf" required/>
                                </div> 

                                <div class="casilla">
                                    <div class="g-recaptcha" data-sitekey="6Ld1CRwnAAAAALioGvWnSZV6G_45N502rqXyuyB2"></div>
                                </div>
                                <input type="submit" value="Enviar CV" >
                            </div>
                        </form>
                    </div> 
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
        <script src="https://unpkg.com/showdown/dist/showdown.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./js/empleos.js" ></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
</html>

