<?php $email=$_POST['email'];
      $nombre=$_POST['nombre'];
      $telefono=$_POST['telefono'];
      $consulta=$_POST['consulta'];
      $headers="MIME-Version: 1.0 \r\n";
      $headers.="Content-type: text/html; charset=iso-8859-1\r\n";
      $headers.="From: Mensaje desde tu sitio web. Marcos Echarte & Asoc.\r\n";
      $cuerpo="Nombre: ".$nombre."\r\n"."E-mail: ".$email."\r\n"."Teléfono: ".$telefono."\r\n"."Consulta: ".$consulta;
      mail('emilianosassaroli@gmail.com','Mensaje desde el sitio web', $cuerpo);
      header("Location: index_alter4.php?cons=ok#formulario");?>