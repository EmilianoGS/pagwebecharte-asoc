<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ME | Estudio Juridico</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Roboto:wght@100;300&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="estiloindex_alterN.css"/>
<link rel="icon" href="imagenes/logo_nosotros.ico">
<!--JQuery-->  
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>  
<!--Floating WhatsApp css-->  
<link rel="stylesheet" href="floating-wpp.min.css">  
<!--Floating WhatsApp javascript-->  
<script type="text/javascript" src="floating-wpp.min.js"></script>
</head>
<body>
<header id="<?php if (isset($_GET['id'])){
                       if (($_GET['id'])==3){
                                 $seccion='headerno';
                                 }else{
                                  $seccion='headersi';
                                   }
                           }else{$seccion='headersi';
                                }  echo $seccion;
                           ?>">
  <div id="cabecera">
      <a href="index_alter4.php"><div id="<?php if (isset($_GET['id'])){
                       if (($_GET['id'])==3){
                                 $seccion='logo_lemano';
                                 }else{
                                  $seccion='logo_lema';
                                   }
                           }else{$seccion='logo_lema';
                                }  echo $seccion;
                           ?>">
         <span id="<?php if (isset($_GET['id'])){
                       if (($_GET['id'])==3){
                                 $seccion='logono';
                                 }else{
                                  $seccion='logo';
                                   }
                           }else{$seccion='logo';
                                }  echo $seccion;
                           ?>"></span>
         <div id="<?php if (isset($_GET['id'])){
                       if (($_GET['id'])==3){
                                 $seccion='lemano';
                                 }else{
                                  $seccion='lema';
                                   }
                           }else{$seccion='lema';
                                }  echo $seccion;
                           ?>">
          <h2>Echarte & Asoc</h2>
          <p>Estudio juridico</p>  
         </div></a>
      </div>

      <div id="<?php if (isset($_GET['id'])){
                       if (($_GET['id'])==3){
                                 $seccion='divcabecera2no';
                                 }else{
                                  $seccion='divcabecera2';
                                   }
                           }else{$seccion='divcabecera2';
                                }  echo $seccion;
                           ?>">
         <a href="index_alter4.php?menu=1&<?php if (isset($_GET['id'])){
          $seccion4='id='.$_GET['id']; if (isset($_GET['id2'])){
                                                               $seccion4.='&id2='.$_GET['id2'];}
                                                                echo $seccion4;}?>" id="menucelular"><div id="menucel"></div></a>              
        <div id="datos_contacto">
    	    <div id="email_header">
             <a id="correo1" href=#></a>
             <p>estudiojuridico.m.e@outlook.es</p>
          </div>
          <div id="dato_telefono">
            <a id="telefono" href=#></a>
            <p>+54 011 2093-2551</p>
            </div>
             
        
    	    <span id="redes">
            <a id="facebook" href=#></a>
            <a id="instagram" href=https://instagram.com/m.e.estudiojuridico?igshid=58exdzpqz9fz target="_blank"></a>
          </span>
          <div id="div_clear"></div>
        </div><!--Fin div datos de contacto-->
        <div id="div_clear"></div>
        <nav id="<?php if (!isset($_GET['menu'])){
                                                    if (isset($_GET['id'])){
                                                                             if (($_GET['id'])==3){
                                                                                                    $seccion='botonera_seccionesno';
                                                                             }else{
                                                                                    $seccion='botonera_secciones';
                                                                                                        }
                                                   }else{$seccion='botonera_secciones';
                                                    } 
                      }else { 
                                  if ($_GET['menu']==0){
                                                          $seccion='botonera_secciones';}
                                  else{
                                       $seccion='menu_cel';
                                       }
                                }echo $seccion;
                           ?>">
       <a href="index_alter4.php?menu=0&<?php if (isset($_GET['id'])){
          $seccion4='id='.$_GET['id']; if (isset($_GET['id2'])){
                                                               $seccion4.='&id2='.$_GET['id2'];}
                                                                echo $seccion4;}?> " id="<?php if(isset($_GET['menu'])){
       $seccion2='cerrar';
       }else{
        $seccion2='cerrarno';
        } echo $seccion2;?>"><div id="iconocerrar"></div></a>                    
     	 <ul id="secciones">
  		  <li id="liboton"><a id="botones_header" href="index_alter4.php?id=1">INICIO</a></li>
          <li id="liboton"><a id="<?php if (isset($_GET['id'])){
                       if (($_GET['id'])==2){
                                 $seccion='liboton2';
                                 }else{
                                  $seccion='botones_header';
                                   }
                           }else{$seccion='botones_header';
                                }  echo $seccion;
                           ?>" href="index_alter4.php?id=2">SERVICIOS</a></li>
          <li id="liboton" ><a id="<?php if (isset($_GET['id'])){
                       if (($_GET['id'])==3){
                                 $seccion='liboton2';
                                 }else{
                                  $seccion='botones_header';
                                   }
                           }else{$seccion='botones_header';
                                }  echo $seccion;
                           ?>"href="index_alter4.php?id=3">NOSOTROS</a></li>
          <li id="liboton"><a id="<?php if (isset($_GET['id'])){
                       if (($_GET['id'])==4){
                                 $seccion='liboton2';
                                 }else{
                                  $seccion='botones_header';
                                   }
                           }else{$seccion='botones_header';
                                }  echo $seccion;
                           ?>" href="index_alter4.php?id=4">CONTACTO</a></li>
     	 </ul>
       <div id="<?php if(isset($_GET['menu'])){
       $seccion3='redescel';
       }else{
        $seccion3='redescelno';
        } echo $seccion3;?>"><a href="#" id="facebookcel"></a><a href="#" id="instacel"></a></div> 
        </nav>
      </div><!--Fin div cabecera2-->
  </div><!--Fin div cabecera-->

</header>

<!--COMIENZO SECCION INICIO--> 
<section id="<?php
if(isset($_GET['id'])){
   if (($_GET['id'])==1){
    $seccion='inicio';
   }
   else{
    $seccion='hidden';
   }
}else{
  $seccion='inicio';
}
echo $seccion;
?>">

 <!-- <iframe src=slider401.html id="sliderhtml" ></iframe> -->
  
  <iframe src=sliderEstudio.html id="sliderhtml"></iframe>
  <div id="WAButton"><script type="text/javascript">  
   $(function () {
           $('#WAButton').floatingWhatsApp({
               phone: '+541130301868', //WhatsApp Business phone number
               headerTitle: 'Chatea con nosotros en WhatsApp!', //Popup Title
               popupMessage: 'Hola, cómo podemos ayudarte?', //Popup Message
               showPopup: true, //Enables popup display
               buttonImage: '<img src="whatsapp.svg" />', //Button Image
               //headerColor: 'crimson', //Custom header color
               //backgroundColor: 'crimson', //Custom background button color
               position: "left" //Position: left | right

           });
       });
</script> </div>
  <!--<a href="index_alter4.php?id=2"><div id="masinfo">Mas informacion</div></a> -->
  <div id="presentacion"><h1>El estudio</h1><p>Somos un estudio que surgió en un contexto socio-económico-político emergente con el objetivo de asistir a quienes acuden a  nosotros con una atención personalizada por parte de profesionales altamente capacitados.
Lo que buscamos y aseguramos como firma es brindar  múltiples soluciones jurídicas a  la medida, según las necesidades y demandas de cada cliente, aplicando estrategias de vanguardia con atención personalizada de suma confidencialidad.</p></div>

  <div id="banner">
    <div id="contenido_banner">
      <div id="comilla1"></div>
      <div id="frase1">
        <p>Mantenemos como valores principales el respeto por la justicia, la confiabilidad y fidelidad a nuestros clientes</p>
      </div>
      <div id="comilla2"></div>
      <div id="div_clear"></div>
    </div>
  </div>

  <div id="areaservicios">
        <div id="introserv">
          <h2>Servicios</h2>
          <article id="especialidad"><strong>Las siguientes áreas de práctica son nuestra especialidad:</strong></article>
        </div>
        <div id="serv1y2">
              <div id="iconos">
                 <a href="index_alter4.php?id=2&id2=1">
                   <div id="penal">
                     <div id="iconopenal"></div>
                     <h1>Penal</h1>
                     <p>Defensa y litigación en casos donde se sospeche o se persiga la comisión de delitos previstos en el Código Penal.</p>  
                   </div>
                 </a>
                 <a href="index_alter4.php?id=2&id2=2">
                   <div id="familia"> 
                     <div id="iconoflia"></div>
                     <h1>Familia</h1>
                     <p>Intervención en materia Familiar alcanzando la participación y solución global de las problemáticas dadas en las particularidades de cada caso.</p>
                   </div>
                 </a>
                 <a href="index_alter4.php?id=2&id2=3">
                   <div id="civil">
                     <div id="iconocivil"></div>
                     <h1>Civil</h1>
                     <p>Asesoramiento y representación en procesos patrimoniales relacionados con la responsabilidad por daños, sucesiones y materia contractual.</p>
                   </div>
                 </a>
                 <a id="boton4" href="index_alter4.php?id=2&id2=4">
                   <div id="laboral">
                     <div id="iconolaboral"></div>
                     <h1>Laboral</h1>
                     <p>Actuación por ante el SECLO o reclamos judiciales sustentados en relaciones laborales</p>
                   </div>
                 </a>
                 <div id="div_clear"></div>
              </div>
              <div id="div_clear"></div>
         <a href="index_alter4.php?id=2"><div id="vermas_serv">Ver más</div></a>
        </div>  
         
  </div>

 
<div id="para_agrandar">
    <div id="informacion">
      <div id="consulta">
         <h1>ENVIANOS TU CONSULTA. </h1>
         <p>Un representante de nuestro estudio se pondrá en contacto con usted a la brevedad.</p>
         <form id="formulario" action="consulta.php" method="post">
           <input type="text" placeholder="Nombre*" name="nombre" required><br/>
           <input id="inputemail" type="email" placeholder="Email*" name="email" required>
           <input id="inputtelefono" type="tel" placeholder="Teléfono*" name="telefono" required><br/>
           <textarea placeholder="Consulta*" name="consulta" required></textarea><br/>
           <input id="enviar" type="submit" name="enviar" value="Enviar consulta">
         </form>
         <?php
          if (isset($_GET['cons'])){
          echo "<div id='consulta_enviada'><h3>Consulta enviada</h3></div>";
          }else{ echo "<div id='consultaenviadano'></div>";}
          ?>
      </div>
      <!--FIn de div consulta-->
      <div id="mapa_inicio">
       <h1>UBICACION</h1>
       <p>En el siguiente mapa, la ubicacion de nuestro estudio.</p>
       <div id="mapa">
        <iframe id="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.053728324491!2d-58.387870784688!3d-34.60280286495694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac66397eff9%3A0x2ee924ec221ec7fa!2sLavalle%201330%2C%20C1048AAH%20CABA!5e0!3m2!1ses-419!2sar!4v1592508384439!5m2!1ses-419!2sar"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </div>

      </div><!--Fin div mapa_inicio-->
      <div id="div_clear"></div>
 
    </div>
    <!--fin div informacion-->
</div><!--fin div para_agrandar-->

</section> <!--FIN SECCION INICIO-->


<!--Comiendo SECCION NOSOTROS-->

<section id="<?php
if(isset($_GET['id'])){
                       if (($_GET['id'])==3){
                             $seccion='seccion_nosotros';
                            }
                            else{
                                  $seccion='hidden';
                                }
                           }else{
                                  $seccion='hidden';
                                }
                                 echo $seccion;
?>">
    
    

      <!--<h2>Quiénes somos</h2>-->
     
     <div id="logo_nosotros"></div>
     <div id="intro_nosotros">    
        <p id="tit_estudio">Quiénes somos</p>
        <p id="desc_estudio">
        El Dr. Macos José Echarte, fundador del estudio, con tan solo 25 años tuvo la visión y el empeño de lanzar su propio emprendimiento que al día de la fecha con una amplia cartera de clientes que confían en él y sus asociados.<br><br>

Su vasta trayectoria se gestó antes del comienzo de su carrera como abogado. En ese sentido, tal fue su convicción como letrado, que su trayecto académico culminó en el corto lapso de 4 años en la Universidad Maimónides habiendo en paralelo trabajado en estudios jurídicos de primera línea adquiriendo conocimientos, experiencia, especialmente en las áreas de Derecho Penal, Laboral y de Familia; así como un acercamiento directo a clientes y colegas.<br><br>

En la actualidad, se encuentra formando su Doctorado en la especialidad de Derecho Penal en la Universidad de Buenos Aires y siempre ampliando sus horizontes en su arte, acumulando seminarios tales como: “Accidentes de tránsito: responsabilidad civil en el nuevo código civil y comercial”; “Tercerización y solidaridad laboral”; “Curso de protección en casos de violencia de género”; “Acción de amparo. Aspectos teóricos y prácticos”;  entre otros.<br><br>

Siguiendo esa línea, no obstante sus logros acumulados, su visión apunta a muchos años de vigor en el campo de su conocimiento, aplicando los mismos en los casos particulares que aquejan a sus clientes, buscando soluciones eficientes, personalizadas y de máxima confidencialidad.
        </p>
     </div>
     <div id="contenido_nosotros">
     
      <div id="foto_nosotros"></div>
      <div id="nombre_perfil"><span><h1>Dr. Marcos José Echarte</h1></span><article>Abogado (Tomo 137 Folio 127 del Colegio Público de Abogados de la Capital Federal).</article><br><br><br><br><p><span><strong>Contacto:</strong>
      1124813990; 20932551<br><br><strong>Dirección de la oficina: </strong>Lavalle 1330, Piso 2 Oficina 5, CABA</span><p></div>
      
        
     
      <div id="div_clear"></div>
   </div>
  <div id="div_clear"></div>
</section><!--FIN SECCION NOSOTROS-->

<!--COMIENZO SECCION CONTACTO-->

<section id="<?php if(isset($_GET['id'])){
                       if (($_GET['id'])==4){
                             $seccion='contactoppal';
                            }
                            else{
                                  $seccion='hidden';
                                }
                           }else{
                                  $seccion='hidden';
                                }
                                 echo $seccion; ?>">
  <div id="foto_contacto"><div id="tit_contacto">Contacto</div></div>
  <div id="contenido_contacto">
  <article id="solicite">Puede solicitar una cita teléfonicamente, vía email o en nuestras redes sociales para ser atendido en nuestra oficina.</article>
  <div id="contacto_ppal">
    <div id="telppal">
      <p>Teléfono: </p><article> +54 011 20932551</article>
    </div>
    <div id="celppal">
      <p>Celular/Whatsapp: </p><article> +54 011 24813990</article>
    </div>
    <div id="mailppal">
      <p>Email: </p><article> estudiojuridico.m.e@outlook.es</article>
    </div>
    <p>Dirección: </p><article> Lavalle 1330, 2° Piso Oficina 5, CABA.</article>
    <div id="div_clear"></div>
  </div>
<div id="div_clear"></div>
  <h3>Nuestos horarios de atención son los siguientes:</h3>
  
  <article>De 9 a 17 hs. Urgencias las 24 hs.</article>
  <div id="contacto_consulta">
    <div id="divformulario">
    <article>También puede contactarse con nosotros completando el siguiente formulario. Un representante de nuestro estudio se pondrá en contacto con usted a la brevedad.</article>
    
      <form id="formulario_contacto" action="consulta.php" method="post">
        <input type="text" placeholder="Nombre*" name="nombre" required><br/>
        <input id="inputemail" type="email" placeholder="Email*" name="email" required>
        <input id="inputtelefono" type="tel" placeholder="Teléfono" name="telefono"><br/>
        <textarea placeholder="Consulta*" name="consulta" required></textarea><br/>
        <input id="enviar" type="submit" name="enviar" value="Enviar consulta">
      </form>
    </div>
       <div id="mapa_contacto">
        <h1>UBICACION</h1>
         <p>En el siguiente mapa, la ubicacion de nuestro estudio.</p>
        <div id="mapa">
           <iframe id="googlemapcontacto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.053728324491!2d-58.387870784688!3d-34.60280286495694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac66397eff9%3A0x2ee924ec221ec7fa!2sLavalle%201330%2C%20C1048AAH%20CABA!5e0!3m2!1ses-419!2sar!4v1592508384439!5m2!1ses-419!2sar"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </div>
      </div>
  </div>

</div> 
 
</section> <!--FIN SECCION CONTACTO-->

<!--Comienzo de SECCION SERVICIOS-->
<section id="<?php if(isset($_GET['id'])){
                       if (($_GET['id'])==2){
                             $seccion='section_servicio';
                            }
                            else{
                                  $seccion='hidden';
                                }
                           }else{
                                  $seccion='hidden';
                                }
                                 echo $seccion;?>">
  <div id="nuestros_servicios"><a href="index_alter4.php?id=2"><p>Nuestros servicios</p></a></div>
  <nav id="botonera_servicios">
    <ul>
     
       <li id="normal"><a href="index_alter4.php?id=2&id2=1"><p>Derecho Penal</h4></p></a></li>
    
    
     
       <li id="normal"><a href="index_alter4.php?id=2&id2=2"><p>Derecho de Familia</p></a></li>
    
    
   
       <li id="normal"><a href="index_alter4.php?id=2&id2=3"><p>Derecho Civil</p></a></li>
      
     
    
       <li id="boton4"><a id="boton4" href="index_alter4.php?id=2&id2=4"><p>Derecho Laboral</p></a></li>
     
   
   </ul>
  </nav>

          <?php if(isset($_GET['id2'])){
                switch ($_GET['id2']){
                  case 1 : $imagen="imagen_penal2";
                           $titulo="Derecho Penal";
                           $texto='<div id="texto_serv">Nuestro Estudio Jurídico abarca el amplio espectro del DERECHO PENAL, lo que significa en puridad, representar y prestar asistencia técnica como defensor o querella vinculados a los siguientes delitos:</div><br/>
                           <ul id="lista_servicios">
                            <li>Delitos contra las personas, como ser lesiones o muertes por accidentes de tránsito;</li>
                            <li>Delitos contra el honor, en especial la publicación por los medios de prensa de calumnias e injurias;</li>
                            <li>Delitos contra la libertad, particularmente violaciones de domicilio o violación de secretos;</li>
                            <li>Delitos contra la propiedad, como hurto, robo, extorsiones, usurpación de propiedades, y daños en general;</li>
                            <li>Delitos contra la seguridad pública, tales como la seguridad en los medios de transporte y de comunicación;</li>
                            <li>Delitos contra el orden público, como, la asociación ilícita, la instigación a cometer delitos, y otros;</li>
                            <li>Delitos contra la fe pública: falsificación de documentos en general, sellos y marcas;</li>
                            <li>Libramientos de cheques sin fondos y balances comerciales falsos;</li>
                            <li>Incumplimiento de los deberes de asistencia familiar;</li>
                            <li>Casos de violación a la ley de propiedad intelectual;</li>
                            <li>Responsabilidad penal por mala praxis médica.</li>
                           </ul>';
                       
                           break;
                  case 2 : $imagen="imagen_familia2";
                           $titulo="Derecho de Familia";
                           $texto='<div id="texto_serv">Desde otra perspectiva, el Estudio Jurídico se orienta en las dinámicas de la FAMILIA actual, en relación a los aspectos jurídicos de la misma, lo que incluye entre otras cuestiones, los siguientes aspectos:</div><br/>
                           <ul id="lista_servicios">
                            <li>Alimentos</li>
                            <li>Cuidado Personal</li>
                            <li>Sistema de Comunicación</li>
                            <li>Representación Parental</li>
                            <li>Salidas del menor al exterior</li>
                            <li>Regímenes especiales con relación a los hijos menores (plan de parentalidad y cuidados personales) asesoramiento y representación en juicio.</li>
                            <li>Divorcio exprés</li>
                            <li>Régimen patrimonial del matrimonio: asesoramiento previo al casamiento o en la disolución del matrimonio.</li>
                            <li>Uniones convivenciales: asesoramiento y representación en juicio para la inscripción y los eventuales conflictos relacionados con las mismas.</li>
                            <li>Insania / tutela</li>
                            <li>Filiación</li>
                           </ul>';
                             
                           break;
                  case 3 : $imagen="imagen_civil2";
                           $titulo="Derecho Civil";
                           $texto='<div id="texto_serv">Nuestro Estudio Jurídico le da especial tratamiento a la rama del DERECHO CIVIL en sus aspectos patrimoniales que incluyen los siguientes temas vinculados, a saber:</div><br/>
                           <ul id="lista_servicios">
                            <li>Sucesiones: Legítimas / testamentarias</li>
                            <li>Accidentes de tránsito</li>
                            <li>Daños y perjuicios</li>
                            <li>Mala praxis médica</li>
                            <li>Negociaciones extrajudiciales</li>
                            <li>Ejecuciones hipotecarias</li>
                            <li>Contratos civiles y comerciales</li>
                            <li>Desalojos</li>
                             </ul>';
                          
                           
                             
                           break; 
                  case 4 : $imagen="imagen_laboral2";
                           $titulo="Derecho Laboral";
                           $texto='<div id="texto_serv">Las normas jurídicas que incluye tienen como principal objetivo la protección del trabajo del hombre, pero siempre y cuando el mismo sea por cuenta ajena, tenga características productivas y sea realizado en libertad, es por ello, que este Estudio Jurídico soluciona los siguientes inconvenientes, a saber:</div><br/>
                           <div id="serv_laboral">
                           <ul id="lista_servicios">
                            <li>Despido directo e indirecto</li>
                            <li>Regularización del empleo no registrado (trabajo no registrado)</li>
                            <li>Sistemas de protección al trabajador</li>
                            <li>Acoso laboral</li>
                            <li>Protección de la maternidad</li>
                            <li>Acuerdos ante el SECLO</li>
                            <li>Certificación de trabajo y constancias</li>
                            <li>Accidentes del trabajo y enfermedades profesionales</li>
                            
                            <li>Diferencias Salariales</li>
                            <li>Cambio de las condiciones laborales</li>
                            <li>Cálculo de indemnizaciones</li>
                            <li>Asesoramiento y acompañamiento en procesos de negociación de desvinculaciones</li>
                            <li>Redacción de telegramas (intercambio epistolar)</li>
                           </ul>
                           </div>';  
                           break;
                         }?>
                       
                   <div id="contenido_serv">
                     <h2 id="titulo_contenido"><?php echo $titulo ;?></h2>
                     <div id="<?php echo $imagen; ?>"></div>
                     <article id="descripcion">
                     <?php echo $texto ?>
                     </article>
                     <div id="div_clear"></div>
                   </div>
             
             <?php } else{?>
              
               <!--<iframe src=sliderJ.html id="slider2Dhtml" ></iframe> -->
               <iframe src=sliderEstudioServ.html id="slider2Dhtml"></iframe>
               <!-- <a id="vinculo_sliderh" href="index_alter4.php?id=4"><div id="vinculo"></div></a>-->
              
            <?php }
            ?>

<div id="asistencia">
  <div id="texto_asistencia"><p>¿Necesitas asesoramiento? Consultanos</p><a id="contactar_serv" href="index_alter4.php?id=4"><div>Contactar</div></a></div>
  <form id="form_asistencia" action="consulta.php" method="post">
        <input type="text" placeholder="Nombre*" name="nombre" required><br/>
        <input id="inputemail" type="email" placeholder="Email*" name="email" required>
        <input id="inputtelefono" type="tel" placeholder="Teléfono" name="telefono"><br/>
        <textarea placeholder="Consulta*" name="consulta" required></textarea><br/>
        <input id="enviar" type="submit" name="enviar" value="Enviar consulta">
      </form>
    <div id="div_clear"></div>
</div> 


</section>

<footer>
  <div id="logopie"></div>
  <span id="contactopie">
        <div id="contenedor_pie">
           <div id="ubicacion">
             <div id="ubi"></div>
             <div id="pie"><p>Estamos en:</p><article>Lavalle 1330 2° 5 <br/>C1048AAH<br/>CABA</article></div>
           </div>
           <div id="dato_contacto">
             <div id="tel">
             <div id="telefono2"></div>
               <p>+54 011 2093-2551</p>
             </div>
             <div id="mails">
                <div id="correo2"></div>
                <p> correo@correo.com</p>
             </div>
           </div>
           <div id="div_clear"></div>
           <nav id="botonera_pie">
             <ul id="secciones_pie">
              <li><a id="botones_pie" href="index_alter4.php?id=1"><p>Inicio</p></a></li>
              <li><a id="botones_pie" href="index_alter4.php?id=2"><p>Servicio</p></a></li>
              <li><a id="botones_pie" href="index_alter4.php?id=3"><p>Nosotros</p></a></li>
              <li><a id="botones_pie" href="index_alter4.php?id=4"><p>Contacto</p></a></li>
             </ul>
           </nav>
        </div>
         <div id="div_clear"></div>
  </span>
  <div id="div_clear"></div>
</footer>
</body>
</html>