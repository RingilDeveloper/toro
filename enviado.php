<<<<<<< HEAD
<?php

  $nombre_archivo = $_FILES ['archivo']['name'];
  $guardado = $_FILES ['archivo']['tmp_name'];

  if(!file_exists('archivos')){
    mkdir('archivos',0777,true);
    if(file_exists('archivos')){
      if(move_uploaded_file($guardado,'archivos/'.$nombre_archivo))
      echo "archivo enviado con exito";
    }else
    echo "archivo no se pudo guardar";
  } if(file_exists('archivos')){
      if(move_uploaded_file($guardado,'archivos/'.$nombre_archivo))
      echo "archivo enviado con exito";
    }else
    echo "archivo no se pudo guardar";
    //Recipiente
$to = 'recipiente@miexample.com';

//remitente del correo
$from = 'remitente@miexample.com';
$fromName = 'BaulPHP';

//Asunto del email
$subject = 'Correo electrónico PHP con datos adjuntos de BaulPHP'; 

//Ruta del archivo adjunto
$file = 'archivos/'.$nombre_archivo;

//Contenido del Email
$htmlContent = '<h1>Correo electrónico PHP con datos adjuntos de BaulPHP</h1>
    <p>Este correo electrónico ha enviado desde script PHP con datos adjuntos.</p>';

//Encabezado para información del remitente
$headers = "De: $fromName"." <".$from.">";

//Limite Email
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//Encabezados para archivo adjunto 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//límite multiparte
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparación de archivo
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($files[$i])."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//Enviar EMail
$mail = @mail($to, $subject, $message, $headers, $returnpath); 

//Estado de envío de correo electrónico
echo $mail?"<h1>Correo enviado.</h1>":"<h1>El envío de correo falló.</h1>";
=======
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./iconos/fuentes.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
  <title>enviado</title>
</head>
<body>
     <header class="header">
    <div class="header_container">
        <a href=""> <img class="header_img" src="./img/logo.png" alt="logo consultoria toro y mantilla">
      </a> 
      <div class="container_title">
          <h1 class="header_container-title">T&M Abogados</h1>
        <h2  class="heaer_container-subtittle">Consultores y Asesores Juridicos</h2>
        </div>
      </div>
    </header>
      <div class="hero">
        <?php
        
        ?>    
      </div>
  <footer class="footer">
      <div class="footer_container">
        <div class="footer_container-redes">
          <a href="https://www.facebook.com/consultoresjuridicosmyt/" class="icon-facebook"></a>
          <a href="https://www.instagram.com/claudia_byby?r=nametag" class="icon-instagram"></a>
       </div>
       <div class="footer_container-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6658.799550658129!2d-73.11422944671659!3d7.085839882916892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683f989d839d27%3A0x84bf9df4848e995!2sCl.%20104%20%2324a-21%2C%20Bucaramanga%2C%20Santander!5e0!3m2!1ses!2sco!4v1596136528448!5m2!1ses!2sco" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>    
        <div class="footer_container-descripcion">
          <p>Diseñado por <a href="https://github.com/RingilDeveloper">RingilDeveloper</a></p>
        </div>  
      </div>    
    </footer>
</body>
</html>
>>>>>>> 588c976a8fd5773307308743120731da025d1acc
