<?php
$errores = [];
$name = '';
$email = '';
$phone = '';
$msg = '';

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    
    if(empty($_POST['name'])){
        $errores[] = 'Ingresa Tu Nombre';
    }
    if(empty($_POST['email'])){
        $errores[] = 'Ingresa Tu Correo Electronico';
    }
    if(empty($_POST['phone'])){
        $errores[] = 'Ingresa Tu Correo Electronico';
    }
    if(strlen($msg) < 10){
        $errores[] = 'Ingresa Un Mensaje Mas Descriptivo';
    }
    else{
        if(empty($errores)){
            if(isset($_POST['g-recaptcha-response'])){
                $captcha=$_POST['g-recaptcha-response'];
                $secret= '6Ld1CRwnAAAAAKJNrYVPBGDGPtfkzWXs6l_DSWmi';
                $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
                $g_response = json_decode($response);
                if ($g_response->success === true){
                    $title = "Solicitud De Cliente";
                    $header = "From: Cliente : {$name}"."\r\n";
                    $header .= "MIME-Version: 1.0\r\n";
                    $header .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
                    $header .= "Content-Transfer-Encoding: 8bit\r\n";
                    $body = "Mensaje:
                            \n{$msg} 
                            \nInformacion Del Cliente:
                            \nNombre: {$name} 
                            \nTelefono: {$phone} 
                            \nCorreo: {$email}
                            \nCorreo Enviado Desde: www.construmas.com.sv";
                    $email_construmas = "info@construmas.com.sv";
                    $mail = mail($email_construmas,$title,$body,$header);
                    ?>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            
                            Swal.fire(
                                'Gracias!',
                                'Nos Pondremos En Contacto!',
                                'success'
                            )
                        </script>
                    <?php
                    $name = '';
                    $email = '';
                    $phone = '';
                    $msg = '';
                }else{
                    ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire(
                            'Ocurrio Un Error',
                            'Valida El Recaptcha',
                            'error'
                        )
                    </script>
                <?php
                }
            }else{
                ?>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        Swal.fire(
                            'Ocurrio Un Error',
                            'No se puedo enviar el formulario',
                            'error'
                        )
                    </script>
                <?php
            } 
        }
        else{
            ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire(
                        'Ocurrio Un Error',
                        'Tiene Errores En Su Formulario',
                        'error'
                    )
                </script>
            <?php
        }
    }
}