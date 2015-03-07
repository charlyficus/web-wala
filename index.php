<?php
	$titulo = "Home";
	require "templates/head.php";
?>
<link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
</head>
<body>
	<!--CABEZAL-->
	<?php include "templates/header.php"; ?>
	
	<!--marcador HOME-->
	<div class="padding-sup bg-yellow" id="mark_home"></div>
	
	<!--SECCION WELCOME-->
	<section class="bg-yellow" id="welcomeSection">
		<article class="wrapper" id="welcomeArticle">
		
			<!--TITULO-->
			<h1 class="col-central">
				REGALOS ÚNICOS PARA PERSONAS ÚNICAS
			</h1>
			<!--PARRAFO-->
			<p class="col-central">
				Sabemos lo importantes que es regalarle algo perfecto a aquellas personas que queremos. Por eso creamos un sugeridor fácil, rápido y efectivo, que vincula personalidad y regalos únicos. 
			</p>
			<!--ANIMACION-->
			<img src="imagenes/animacion-home-PREVIEW.jpg" alt="" class="animacion-home" />
			<!--BOTON INGRESAR-->
			<a href="#" class="boton-ver">Ingresar</a>
				
		</article>
	</section>
	
	<!--SECCION COMO FUNCIONA-->
	<section class="bg-dark-gray" id="howItWorksSection">	
		<article class="wrapper" id="howItWorksArticle">	
		
			<!--TITULO-->
			<h2 class="col-central txt-yellow">
				¿CÓMO FUNCIONA?
			</h2>
			<!--PARRAFO-->
			<p class="col-central txt-white">
				Elegir el mejor regalo es fácil. Seguí sólo estos 3 simples pasos: 
			</p>
			
			<!--COLUMNA 1-->
			<article class="col-un-tercio float-left margin-right">
				<!--TITULO-->
				<h4 class="txt-yellow">
					Contanos
					<br>
					cómo es...
				</h4>
				<!--IMAGEN-->
				<img src="imagenes/como-funciona-icono-1.png" alt="Cómo Funciona - paso 1">
				<!--PARRAFO-->
				<p class="txt-white">
					Contesta una serie de preguntas sobre el homenajeado.
				</p>
			</article>
			
			<!--COLUMNA 2-->
			<article class="col-un-tercio float-left">
				<!--TITULO-->
				<h4 class="txt-yellow">
					IDENTIFICAMOS
					<br>
					SU PERFIL
				</h4>
				<!--IMAGEN-->
				<img src="imagenes/como-funciona-icono-2.png" alt="Cómo Funciona - paso 2">
				<!--PARRAFO-->
				<p class="txt-white">
					Automáticamente interpretamos la información para obtener la personalidad basándonos en un método empírico.
				</p>
			</article>
			
			<!--COLUMNA 3-->
			<article class="col-un-tercio float-right">
				<!--TITULO-->
				<h4 class="txt-yellow">
					Y WALÁ! LOS
					<br>
					MEJORES REGALOS
				</h4>
				<!--IMAGEN-->
				<img src="imagenes/como-funciona-icono-3.png" alt="Cómo Funciona - paso 3">
				<!--PARRAFO-->
				<p class="txt-white">
					Obtené excelentes opciones adaptadas a la personalidad.
				</p>
			</article>
			
			<div class="cleaner"></div>
			
		</article>
	</section>
	
	<!--SECCION EQUIPO-->
	<section class="bg-red" id="TeamSection">
		<article class="wrapper-padd-sup" id="TeamArticle">
		
			<!--TITULO-->
			<h2 class="col-central txt-yellow">
				EL EQUIPO
			</h2>
			<!--SUBTITULO MISIÓN-->
			<h3 class="col-central txt-bordo">
				MISIÓN
			</h3>
			<!--PARRAFO-->
			<p class="col-central txt-white">
				Nuestra misión es simple, sugerir regalos únicos que garanticen una sonrisa en el homenajeado. 
			</p>
			<!--SUBTITULO INTEGRANTES-->
			<h3 class="col-central txt-bordo">
				INTEGRANTES
			</h3>
			<!--PARRAFO-->
			<p class="col-central expandida txt-white">
				Somos un equipo interdisciplinario, que trabaja con voluntad y paciencia. Nos respetamos y compartimos los mismos objetivos:
				<br>
				<span class="txt-yellow">“RECORRER LOS CAMINOS Y DISFRUTAR LAS SORPRESAS DE LA VIDA"</span>
			</p>
				
		</article>
	</section>
	
	<!--SECCION EQUIPO parte 2-->
	<section class="bg-white" id="TeamSectionTwo">
		<article class="wrapper-padd-inf" id="TeamArticleTwo">
		
			<!--PRIMERA FILA INTEGRANTES-->
			<section class="col-central expandida" id="team">
			
				<!--INTEGRANTE-->
				<article class="col-un-tercio float-left margin-right">
					<img src="imagenes/foto-equipo-BUTELER.png" alt="WALÁ - Integrantes">
					<p class="txt-black">
						<strong>Maru Buteler!</strong>
						<br>
						<span class="details">
							<em>ENFJ</em>
							<br>
							<em>Soñar, optimista, inquieto.</em>
							<br>
						</span>
						<span class="txt-min">Personalidad</span>
					</p>
				</article>
				<!--INTEGRANTE-->
				<article class="col-un-tercio float-left">
					<img src="imagenes/foto-equipo-LEDESMA.png" alt="WALÁ - Integrantes">
					<p class="txt-black">
						<strong>Santi Ledesma!</strong>
						<br>
						<span class="details">
							<em>ENFJ</em>
							<br>
							<em>Soñar, optimista, inquieto.</em>
							<br>
							<span class="txt-min">Comunicación y Marketing</span>
						</span>
					</p>
				</article>
				<!--INTEGRANTE-->
				<article class="col-un-tercio float-right">
					<img src="imagenes/foto-equipo-KOSINCKI.png" alt="WALÁ - Integrantes">
					<p class="txt-black">
						<strong>Rodri  Kosincki!</strong>
						<br>
						<span class="details">
							<em>ENFJ</em>
							<br>
							<em>Soñar, optimista, inquieto.</em>
							<br>
							<span class="txt-min">Desarrollo web</span>
						</span>
					</p>
				</article>
				<!--INTEGRANTE-->
				<article class="col-un-tercio float-left margin-left-more">
					<img src="imagenes/foto-equipo-ANGELONE.png" alt="WALÁ - Integrantes">
					<p class="txt-black">
						<strong>Chris Angelone!</strong>
						<br>
						<span class="details">
							<em>ENFJ</em>
							<br>
							<em>Soñar, optimista, inquieto.</em>
							<br>
							<span class="txt-min">Desarrollo web</span>
						</span>
					</p>
				</article>
				<!--INTEGRANTE-->
				<article class="col-un-tercio float-right margin-right-more">
					<img src="imagenes/foto-equipo-SKIDEL.png" alt="WALÁ - Integrantes">
					<p class="txt-black">
						<strong>JL Skidel!</strong>
						<br>
						<span class="details">
							<em>ENFJ</em>
							<br>
							<em>Soñar, optimista, inquieto.</em>
							<br>
							<span class="txt-min">Diseño Gráfico y Web</span>
						</span>
					</p>
				</article>
				
				<div class="cleaner"></div>
				
			</section>
				
		</article>
	</section>
		
	<!--PIE-->
	<?php include "templates/footer.html"; ?>
	
	<!--Animate-Scroll-->
	<script src="js/jquery-1.js"></script>
	<script src="js/jquery_003.js"></script>
	<script src="js/jquery_005.js"></script>
	<script src="js/actions.js"></script>

	<script src="js/jquery_004.js"></script>
	<script src="js/actions.js"></script>
	
</body>
</html>