@extends('Shared._Layout')

@section('content')
<div class="header">
        <div class="menu">
            <a href="#">EL MAE</a>
            <a href="#">Archivo</a>
			<a href="#">La Alambhra</a>
            <a href="#">Laboratorios</a>
            <a href="#">Rutas </a>
            <a href="#">Diseños</a>
        </div>
        <div class="logo"></div>
        <div class="social">
            <a href="https://www.facebook.com/fidcr" target="_blank" class="facebook"></a>
            <a href="https://twitter.com/FIDcr" target="_blank" class="twitter"></a>
            <a href="https://www.instagram.com/FIDcr" target="_blank" class="instagram"></a>
            <a href="https://vimeo.com/fidcr" target="_blank" class="vimeo"></a>
        </div>
    </div>
     <div id="slider">
        <div class="entradasHomeTextContainer">
	<div class="titleContainer">
		<p></p>Ministerio de Artes Escénicas</p>
	</div>
</div>
         <div class="slides" u="slides">
            <div><img u="image" src="images/slider/slider1.jpg" /></div>
            <div><img u="image" src="images/slider/slider4.jpg" /></div>
            <div><img u="image" src="images/slider/slider5.jpg" /></div>
        </div>
        <span u="arrowleft" class="arrowleft"></span>
        <span u="arrowright" class="arrowright"></span>
    </div>
    <div class="tier">
        <div class="elfid"><span>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</span></div>
        <div class="sofistikitsch"></div>
    </div>
    <div class="grid">

        <div class="grid-item w400h400"></div>

        <div class="grid-item w800h400">
            <a href="lightboxhtml/gemma.html" class="ajax-popup-link"><div class="grid-item-description"><span>GEMMA O'BRIEN. LETTERING. AUSTRALIA</span></div>
            <img class="first" src="images/isotope/invitados/gemma01.jpg" width="100%" height="400px"/>
            <img class="second" src="images/isotope/invitados/gemma02.jpg" width="100%" height="400px"/>
                </a>
        </div>

        <div class="grid-item w400h400">
            <a href="lightboxhtml/snask.html" class="ajax-popup-link"><div class="grid-item-description"><span>SNASK. DISEÑO GRÁFICO. SUECIA</span></div>
            <img class="first" src="images/isotope/invitados/snask01.jpg" width="100%" height="400px"/>
            <img class="second" src="images/isotope/invitados/snask02.jpg" width="100%" height="400px"/>
                </a>
        </div>

        <div class="grid-item w400h400">
            <a href="lightboxhtml/rebecca.html" class="ajax-popup-link"><div class="grid-item-description"><span>REBECCA STAMBANIS. PUBLICIDAD. AUSTRALIA</span></div>
            <img class="first" src="images/isotope/invitados/rebecca01.jpg" width="100%" height="400px"/>
            <img class="second" src="images/isotope/invitados/rebecca02.jpg" width="100%" height="400px"/>
                </a>
        </div>

        <div class="grid-item w400h400"></div>

        <div class="grid-item w400h400"></div>

        <!-- <div class="grid-item w400h400">
            <a href="lightboxhtml/vincent.html" class="ajax-popup-link"><div class="grid-item-description"><span>VINCENT MOON. CINE. FRANCIA</span></div>
            <img class="first" src="images/isotope/invitados/vincent01.jpg" width="100%" height="400px"/>
            <img class="second" src="images/isotope/invitados/vincent02.jpg" width="100%" height="400px"/>
                </a>
        </div> -->
        <div class="grid-item w400h400">
           <a href="lightboxhtml/alejandro.html" class="ajax-popup-link"><div class="grid-item-description"><span>ALEJANDRO MAGALLANES. DISEÑO GRAFICO. MEXICO</span></div>
           <img class="first" src="images/isotope/invitados/alejandro01.jpg" width="100%" height="400px"/>
           <img class="second" src="images/isotope/invitados/alejandro02.jpg" width="100%" height="400px"/>
               </a>
       </div>

        <div class="grid-item w400h400">
            <a href="lightboxhtml/amina.html" class="ajax-popup-link"><div class="grid-item-description"><span>AMINA HOROZIC. PRODUCTO. BOSNIA Y HERZEGOVINA</span></div>
            <img class="first" src="images/isotope/invitados/amina01.jpg" width="100%" height="400px"/>
            <img class="second" src="images/isotope/invitados/amina02.jpg" width="100%" height="400px"/>
                </a>
        </div>

    </div>
    <div class="bottomContainer">
        <div class="bottomLogo logo"></div>
        <div class="bottomMenu">

            <div class="left-bottom-container">
            <a href="#">EL MAE</a>
            <a href="#">Archivo</a>
			<a href="#">La Alambhra</a>
            <a href="#">Laboratorios</a>
            <a href="#">Rutas </a>
            <a href="#">Diseños</a>
            </div>

            <div class="left-bottom-container">
                <a href="https://www.facebook.com/fidcr" target="_blank" class="facebook">Facebook</a>
                <a href="https://twitter.com/FIDcr" target="_blank" class="twitter">Twitter</a>
                <a href="https://www.instagram.com/FIDcr" target="_blank" class="instagram">Instagram</a>
                <a href="https://vimeo.com/fidcr" target="_blank" class="vimeo">Vimeo</a>
            </div>

            <div class="rigth-bottom-container">
                <div class="contact-info">
                    <p>Consultas: <span class="mail-link">hola@fidcr</span></p>
                    <p>Información de entradas: <span class="mail-link">entradas@fidcr.com</span></p>
                    <p>Sé parte de nuestros aliados: <span class="mail-link">aliados@fidcr.com</span></p>
                    <p>Acreditaciones de prensa: <span class="mail-link">prensa@fidcr.com</span></p>
                </div>
                <div class="email-info">
                    <p>Recibe información en tu correo electrónico</p>

                    <div class="input-email-container">
<!--                        <input type="text" placeholder="mail@mail.com"/><input type="submit" value="ENVIAR"/>-->

                    <!-- Begin MailChimp Signup Form -->
<!--			<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">-->
			<div id="mc_embed_signup">
				<form action="//fidcr.us2.list-manage.com/subscribe/post?u=023c42b555ace9daabe141b6d&amp;id=564798c0e1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll" class="input-email-container">
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="  mail@mail.com" required>
				    	<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    	<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_023c42b555ace9daabe141b6d_564798c0e1" tabindex="-1" value=""></div>
				    	<input type="submit" value="ENVIAR" name="subscribe" id="mc-embedded-subscribe" class="button">
				    </div>
				</form>
			</div>

			<!--End mc_embed_signup-->
            </div>
                </div>
                <div class="icon-info">
                    <p class="creators-p">Organizan</p>
                    <img src="images/svg/icons.svg" height="44" width="300"/>
                </div>
	       </div>

        </div>
    </div>
</body>
<script>
	var _gaq=[['_setAccount','UA-17318444-12'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
	(function(d,t){
		var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.async=1;
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
@endsection