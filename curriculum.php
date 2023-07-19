<?php
$errores = [];
$name = '';
$email = '';
$tel = '';

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $file_tmp_name = $_FILES['my_file']['tmp_name'];
    $file_name = $_FILES['my_file']['name'];
    $file_size = $_FILES['my_file']['size'];
    $file_type = $_FILES['my_file']['type'];

    //Leer el archivo y codificar el contenido para armar el cuerpo del email
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));
    $boundary = md5("pera");


    if(empty($_POST['name'])){
        $errores[] = 'Ingresa Tu Nombre';
    }
    if(empty($_POST['email'])){
        $errores[] = 'Ingresa Tu Correo Electronico';
    }
    if(empty($_POST['tel'])){
        $errores[] = 'Ingresa Tu Telefono';
    }else{
        if(empty($errores)){
            if($file_type == "application/pdf"){
                if(isset($_POST['g-recaptcha-response'])){
                    $captcha=$_POST['g-recaptcha-response'];
                    $secret= '6Ld1CRwnAAAAAKJNrYVPBGDGPtfkzWXs6l_DSWmi';
                    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
                    $g_response = json_decode($response);
                    if ($g_response->success === true){
                        $message = "Informacion De La Persona:". "\n";
                        $message = $message . "\n";
                        $message = $message . "Nombre: " . $name . "\n";
                        $message = $message . "Email: " . $email . "\n";
                        $message = $message . "Telefono: " . $tel . "\n";
                        $message = $message . "Enviado Desde: " . 'www.construmas.com.sv' . "\n";
                        $message = $message . "\n";
                        $message = $message . "----Mensaje Del Sistema----";
                        $message = $message . "\n";
                        $message = $message . "\n";
                        $message = $message . "Lea Las Siguientes Indicaciones:";
                        $message = $message . "\n";
                        $message = $message . "Los archivos mandados por este servicio web, solo deben ser archivos con una extension .pdf si ud detecta un archivo sin esta extencion, inmediatamente borre el correo para mayor seguridad.";
                        
                        $title = "CV - Construmas S.A DE C.V";
                        $desdEmail = $email; 
        
                        //Encabezados
                        $headers= "MIME-Version: 1.0\r\n"; 
                        $headers.= "From:".$email."\r\n"; 
                        $headers.= "Reply-To: ".$desdEmail."" . "\r\n";
                        $headers.= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
                        //Texto plano
                        $body = "--$boundary\r\n";
                        $body.= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
                        $body.= "Content-Transfer-Encoding: base64\r\n\r\n"; 
                        $body.= chunk_split(base64_encode($message)); 
        
                        //Adjunto
                        $body.= "--$boundary\r\n";
                        $body.="Content-Type: $file_type; name=".$file_name."\r\n";
                        $body.="Content-Disposition: attachment; filename=".$file_name."\r\n";
                        $body.="Content-Transfer-Encoding: base64\r\n";
                        $body.="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
                        $body.= $encoded_content; 
                        $body.= "\n";
        
        
                        $email_construmas = "irismendoza@construmas.com.sv";
                        $mail = mail($email_construmas,$title,$body,$headers);
                        ?>
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                                Swal.fire(
                                    'Envio Exitoso',
                                    'Nos Pondremos En Contacto!',
                                    'success'
                                )
                            </script>
                        <?php
                        $name = '';
                        $email = '';
                        $tel = '';
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
                }
                else{
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
                            'Tu Archivo Debe Ser Formato .pdf',
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