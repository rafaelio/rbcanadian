<?php

$message = null;

if (isset($_POST['action'])){
  
  if ($_POST['action'] == "sendMessage"){

    //Empresa data
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $comment = $_POST["comment"];
    
    $dataEnterprise = "Nombre: " . $name . " - Mail: " .  $mail . " - " . $subject . " - " .  $comment . " - Tel&eacute;fono: " . $tel;

    $data = "\n\n\n\nVersión Alfresco: " . $_POST["version"] . "\n";
    $data .= "Edición Alfresco: " . $_POST["edition"]  . "\n";
    $data .= "Incluye APS: " . $_POST["aps"]  . "\n";
    $data .= "Volumentría diaria: " . $_POST["vol"]  . "\n";
    $data .= "Usuarios registrados: " . $_POST["users"]  . "\n";
    $data .= "Modelo desplegado: " . $_POST["model"]  . "\n";
    $data .= "Modulos desplegados: " . $_POST["module"]  . "\n";
    $data .= "Workflows desplegados: " . $_POST["wfw"]  . "\n";
    $data .= "JOBS Desplegados: " . $_POST["job"]  . "\n";
    $data .= "Frontales: " . $_POST["frontal"] . "\n";    
    $data .= "Sistemas coorporativos integrados: " . $_POST["coorp"] . "\n";
    $data .= "Despliegue: " . $_POST["despliegue"] . "\n";


    $integration = "";
   
    $integrationArray = $_POST['integration'];
    if(empty($integrationArray)) 
    {
      $integration .= " Sin integraciones";
    } 
    else
    {
      $N = count($integrationArray);      
      for($i=0; $i < $N; $i++)
      {
        $integration .= $integrationArray[$i] . " - ";
      }
    }
    
    $data .= "Integraciones: " . $integration;


    $plugins = "";
   
    $pluginsArray = $_POST['plugins'];
    if(empty($pluginsArray)) 
    {
      $plugins .= " Sin plugins";
    } 
    else
    {
      $N = count($pluginsArray);      
      for($i=0; $i < $N; $i++)
      {
        $plugins .= $pluginsArray[$i] . " - ";
      }
    }
    
    $data .= "\nPlugins: " . $plugins;


    
  

    mail("info@rbcanadian.com","Contacto WEB RB Canadian",$dataEnterprise . " " . $data);
    $message = "Sus datos han sido enviados para el analisis correspondiente. <br> Nos contactaremos a la brevedad.";

  }
}
?>




<!DOCTYPE html>
<html lang="es">
  <head>
       <title>RB Canadian Alfresco</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165478740-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-165478740-1');
    </script>

  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center">
    				<div><img src="images/logo.png" style="width:;margin-right: 15px;width: 275px" alt="Alfresco madrid"></div>
            
            <br><span class="subtitle-logo"></span>

    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>info@rbcanadian.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Ll&aacute;menos</span>
						    	<span><strong><a href="tel:+541160531870">(+54) 11 6053 1870</a></span></strong>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
				
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a href="index.html" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="alfresco.html" class="nav-link">Alfresco</a></li>
            <li class="nav-item"><a href="project.html" class="nav-link">Proyectos</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Servicios</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Art&iacute;culos</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contacto</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/articles.jpg');border-bottom: 1px solid black;height: 100px !important">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="color: darkslategrey;">An&aacute;lisis Alfresco</h1>          
          </div>
        </div>
      </div>
    </section>
    
    <?if ($message != null){?>
      <br><br><br><br>
    <h3 class="text-center" style="color: #565d86"><?=$message?></h3>
    <?}?>

    
    <section class="ftco-section contact-section">      
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">            
              <h3>Información de su instalación de Alfresco</h3>
              <form style="color: #45475c;" action="<?=$_SERVER['PHP_SELF']?>" class="bg-light p-5 contact-form" method="POST" onsubmit="this.btnSubmit.disabled=true">
              <input type="hidden" name="action" value="sendMessage">
              <div class="form-group">
                <label>1. ¿Indique la versión instalada?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">
                
                <label  style="margin-left: 20px;" >7.*</label>&nbsp;<input type="radio" name="version" value="7" >
                <label  style="margin-left: 20px;" >6.*</label>&nbsp;<input type="radio" name="version" value="6">
                <label  style="margin-left: 20px;" >5.*</label>&nbsp;<input type="radio" name="version" value="5">
                <label  style="margin-left: 20px;" >4.*</label>&nbsp;<input type="radio" name="version" value="4">
                <label  style="margin-left: 20px;" >3.*</label>&nbsp;<input type="radio" name="version" value="3">
                <label  style="margin-left: 20px;" >Otra</label>&nbsp;<input type="radio" name="version" value="Otra">              
              </div>

              <div class="form-group">
                <label>2. ¿Indique la edición de su instalación de Alfresco?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">
                
                <label  style="margin-left: 20px;" >Community</label>&nbsp;<input type="radio" name="edition" value="community" >
                <label  style="margin-left: 20px;" >Enterprise</label>&nbsp;<input type="radio" name="edition" value="enterprise">
                <label  style="margin-left: 20px;" >Cloud</label>&nbsp;<input type="radio" name="edition" value="cloud">
                <label  style="margin-left: 20px;" >Otra</label>&nbsp;<input type="radio" name="edition" value="otra">
              </div>

              <div class="form-group">
                <label>3. ¿Indique si dispone de una licencia de Alfresco APS?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">
                <label  style="margin-left: 20px;" >Si</label>&nbsp;<input type="radio" name="aps" value="si" >
                <label  style="margin-left: 20px;" >No</label>&nbsp;<input type="radio" name="aps" value="no">
                <label  style="margin-left: 20px;" >No sabe</label>&nbsp;<input type="radio" name="aps" value="No Sabe">              
              </div>

              <div class="form-group">
                <label>4. ¿Describa el despliegue actual de Alfresco? Ej: Un server para Alfresco, uno para la bd y otro para Solr.</label>
              </div>              
              <div class="form-group" style="margin-left: 20px;">                
                <textarea name="despliegue" cols="30" rows="7" class="form-control" placeholder="despliegue actual" required="required"></textarea>
              </div>

              <div class="form-group">
                <label>5. ¿Indique la volumetría diaria de documentos? (Carga diaria) </label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                
                <label  style="margin-left: 20px;" >0 a 100</label>&nbsp;<input type="radio" name="vol" value="0 a 100" >
                <label  style="margin-left: 20px;" >100 a 500</label>&nbsp;<input type="radio" name="vol" value="100 a 500">                
                <label  style="margin-left: 20px;" >500 a 1000</label>&nbsp;<input type="radio" name="vol" value="500 a 1000">
                <label  style="margin-left: 20px;" >1000 a 2000</label>&nbsp;<input type="radio" name="vol" value="1000 a 2000">
                <label  style="margin-left: 20px;" >2000 a 10000</label>&nbsp;<input type="radio" name="vol" value="2000 a 10000">
                <label  style="margin-left: 20px;" >Más de 10000</label>&nbsp;<input type="radio" name="vol" value="Más de 10000">
              </div>                            

              <div class="form-group">
                <label>6. ¿Indique la cantidad de usuarios registrados en Alfresco?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                
                <label  style="margin-left: 20px;" >0 a 100</label>&nbsp;<input type="radio" name="users" value="0 a 100" >
                <label  style="margin-left: 20px;" >100 a 500</label>&nbsp;<input type="radio" name="users" value="100 a 500">                
                <label  style="margin-left: 20px;" >500 a 1000</label>&nbsp;<input type="radio" name="users"  value="500 a 1000">
                <label  style="margin-left: 20px;" >1000 a 2000</label>&nbsp;<input type="radio" name="users" value="1000 a 2000">
                <label  style="margin-left: 20px;" >2000 a 10000</label>&nbsp;<input type="radio" name="users"  value="2000 a 10000">
                <label  style="margin-left: 20px;" >Más de 10000</label>&nbsp;<input type="radio" name="users" value="Más de 10000">          
              </div>           
              
              <div class="form-group">
                <label>7. ¿Indique si ya dispone de un modelo documental desplegado?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                
                <label  style="margin-left: 20px;" >Si</label>&nbsp;<input type="radio" name="model" value="si" >
                <label  style="margin-left: 20px;" >No</label>&nbsp;<input type="radio" name="model" value="no">
                <label  style="margin-left: 20px;" >No sabe</label>&nbsp;<input type="radio" name="model"  value="No sabe">              
              </div>           
              
              
              <div class="form-group">
                <label>8. ¿Indique si ya dispone de uno o varios modulos JAR o AMP desplegados?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                             
                <label  style="margin-left: 20px;" >Si</label>&nbsp;<input type="radio" name="module"  value="si" >
                <label  style="margin-left: 20px;" >No</label>&nbsp;<input type="radio" name="module"  value="no">
                <label  style="margin-left: 20px;" >No sabe</label>&nbsp;<input type="radio" name="module"  value="No sabe">              
              </div>  
              
               
              <div class="form-group">
                <label>9. ¿Indique si ya dispone de uno o varios workflows a medida desplegados?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                
                <label  style="margin-left: 20px;" >Si</label>&nbsp;<input type="radio" name="wfw"  value="si">
                <label  style="margin-left: 20px;" >No</label>&nbsp;<input type="radio" name="wfw"  value="no">
                <label  style="margin-left: 20px;" >No sabe</label>&nbsp;<input type="radio" name="wfw"  value="No sabe">
              </div>    
              
              <div class="form-group">
                <label>10. ¿Indique si ya dispone de uno o varios o varios JOBS desplegados?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                
                <label  style="margin-left: 20px;" >Si</label>&nbsp;<input type="radio" name="job"  value="si" >
                <label  style="margin-left: 20px;" >No</label>&nbsp;<input type="radio" name="job"  value="no">
                <label  style="margin-left: 20px;" >No sabe</label>&nbsp;<input type="radio" name="job"  value="No sabe">              
              </div>    

              <div class="form-group">
                <label>11. ¿Indique si dispone de una solucion frontal basada en ADF o ACA?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                
                <label  style="margin-left: 20px;" >Si</label>&nbsp;<input type="radio" name="frontal"  value="si" >
                <label  style="margin-left: 20px;" >No</label>&nbsp;<input type="radio" name="frontal"  value="no">
                <label  style="margin-left: 20px;" >Otra</label>&nbsp;<input type="radio" name="frontal"  value="Otra">
                <label  style="margin-left: 20px;" >No sabe</label>&nbsp;<input type="radio" name="frontal"  value="No sabe">              
              </div>    

              <div class="form-group">
                <label>12. ¿Indique cuales de las siguientes integraciones se han implementado?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">              
                <label  style="margin-left: 20px;" >LDAP</label>&nbsp;<input type="checkbox" name="integration[]" value="LDAP">
                <label  style="margin-left: 20px;" >AD</label>&nbsp;<input type="checkbox" name="integration[]" value="AD">
                <label  style="margin-left: 20px;" >KERBEROS</label>&nbsp;<input type="checkbox" name="integration[]" value="KERBEROS">
                <label  style="margin-left: 20px;" >SMBA</label>&nbsp;<input type="checkbox" name="integration[]" value="SMBA">
                <label  style="margin-left: 20px;" >CAS</label>&nbsp;<input type="checkbox" name="integration[]" value="CAS">
                <label  style="margin-left: 20px;" >IMAP MAIL</label>&nbsp;<input type="checkbox" name="integration[]" value="IMAP">
                <label  style="margin-left: 20px;" >SMTP MAIL</label>&nbsp;<input type="checkbox" name="integration[]" value="SMTP">
                <label  style="margin-left: 20px;" >FTP</label>&nbsp;<input type="checkbox" name="integration[]" value="FTP">
                <label  style="margin-left: 20px;" >WEBDAB</label>&nbsp;<input type="checkbox" name="integration[]" value="WEBDAV">
                <label  style="margin-left: 20px;" >CIFS</label>&nbsp;<input type="checkbox" name="integration[]" value="CIFS">                
                <label  style="margin-left: 20px;" >OTRA/s</label>&nbsp;<input type="checkbox" name="integration[]" value="OTRAS">                
              </div>    

              <div class="form-group">
                <label>13. ¿Indique si dispone de Plugins o Add-ons instalados?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                
                <label  style="margin-left: 20px;" >SAP</label>&nbsp;<input type="checkbox" name="plugins[]" value="SAP">
                <label  style="margin-left: 20px;" >SALES FORCE</label>&nbsp;<input type="checkbox" name="plugins[]" value="SALES FORCE">
                <label  style="margin-left: 20px;" >FIRMA DIGITAL</label>&nbsp;<input type="checkbox" name="plugins[]" value="FIRMA DIGITAL">
                <label  style="margin-left: 20px;" >OTROS</label>&nbsp;<input type="checkbox" name="plugins[]" value="OTROS">
              </div>    

              <div class="form-group">
                <label>14. ¿Indique si actualmente sus sistemas coorporativos consumen o alimentan Alfresco?</label>
              </div>
              <div class="form-group" style="margin-left: 20px;">                
                <label  style="margin-left: 20px;" >Si</label>&nbsp;<input type="radio" name="coorp" value="si">
                <label  style="margin-left: 20px;" >No</label>&nbsp;<input type="radio" name="coorp" value="no">
                <label  style="margin-left: 20px;" >No sabe</label>&nbsp;<input type="radio" name="coorp" value="No sabe">              
              </div>    

              <h3>Información de su empresa</h3>

              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Nombre de la organización" required="required">
              </div>

              <div class="form-group">
                <input name="mail" type="email" class="form-control" placeholder="Su Email" required="required">
              </div>         

              <div class="form-group">
                <input name="tel" type="tel" class="form-control" placeholder="Tel&eacute;fono" required="required">
              </div>

              <div class="form-group">
                <textarea name="comment" cols="30" rows="7" class="form-control" placeholder="Comentarios"></textarea>
              </div>

              <div class="form-group">
                <input name="btnSubmit" type="submit" value="Enviar datos para su análisis" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>

        <div class="container">
          <div class="row d-flex mb-5 contact-info justify-content-center">
            <div class="col-md-8">
              <div class="row mb-5">
                <div class="col-md-4 text-center py-4">
                  <div class="icon">
                    <span class="icon-map-o"></span>
                  </div>
                  <p><span>Ubicaci&oacute;n:</span> Madrid, España | Buenos Aires, Argentina</p>
                </div>
                <div class="col-md-4 text-center border-height py-4">
                  <div class="icon">
                    <span class="icon-mobile-phone"></span>
                  </div>
                  <p><span>Tel&eacute;fono:</span> <a href="tel://541160531870"><a href="tel:+541160531870">(+54) 11 6053 1870</a></a></p>
                </div>
                <div class="col-md-4 text-center py-4">
                  <div class="icon">
                    <span class="icon-envelope-o"></span>
                  </div>
                  <p><span>Email:</span> <a href="mailto:info@rbcanadian.com">info@rbcanadian.com</a></p>
                </div>
              </div>
            </div>
          </div>

      </div>
    </section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">¿Tiene alguna consulta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Madrid, Espa&ntilde;a</span></li>
	                <li><span class="icon icon-phone"></span><span class="text"><a href="tel:+541160531870">(+54) 11 6053 1870</a></span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">info@rbcanadian.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Entradas de Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/alfresco/articulo-1b.png);"></a>
                <div class="text">
                  <h3 class="heading"><a href="https://veronikait.art.blog">¿Por que&eacute; elegir Alfresco?.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> diciembre 26, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Rafael Benedettelli</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="https://veronikait.art.blog/arquitectura/">Arquitectura hexagonal con Java</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> septiembre 20, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Rafael Benedettelli</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.html" class="ion-ios-arrow-round-forward mr-2">Home</a></li>
	        	<li><a href="alfresco.html" class="ion-ios-arrow-round-forward mr-2">Alfresco</a></li>
	        	<li><a href="project.html" class="ion-ios-arrow-round-forward mr-2">Proyectos</a></li>
	        	<li><a href="services.html" class="ion-ios-arrow-round-forward mr-2">Servicios</a></li>
	        	<li><a href="blog.html" class="ion-ios-arrow-round-forward mr-2">Art&iacute;culos</a></li>
	            <li><a href="contact.php" class="ion-ios-arrow-round-forward mr-2">Contacto</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Alfresco Espa&ntilde;a</h2>
              <h5 style="color: white">Gesti&oacute;n documental</h5>
              <h5 style="color: white">Capacitaciones Alfresco</h5>
              <h5 style="color: white">Alfresco 4,5,6 y 7</h5>
              <h5 style="color: white">Java Spring</h5>
            </div>
           
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>

