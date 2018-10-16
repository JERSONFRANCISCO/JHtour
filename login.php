<?php session_name("MYAPP"); session_start();

	require_once("global.php");//ARCHIVOS BASICOS GLOBAL DE CONFIGURACION
	require_once(__MDL_PATH . "mdl_html.php");

	$HTML = new mdl_Html();
?>

<!DOCTYPE HTML>

<html>

	<head>

		<meta name="title" content="Network" />
		<meta name="description" content="Network example" />
		<meta name="robots" content="index, follow" />
		<meta name="keywords" content="Network, HTML5, PHP, MySQL, jquery" />
		<meta name="language" content="es" />
		<link rel="shortcut icon" href="favicon.ico"/>
 		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<?php
		echo $HTML->html_js_header(__JS_PATH . "jquery.js");
		echo $HTML->html_js_header(__JS_PATH . "functions.js");
		echo $HTML->html_css_header(__CSS_PATH . "style.css","screen");
		?>

	<title>Network</title>
	</head>

	<body>


			<?php
				//INCLUIMOS LA VISTA EN NUESTRO HTML DE INICIO
				if (isset($_SESSION['MYAPP'])) {
					if ($_SESSION['MYAPP']!="YES") {
						include_once(__VWS_PATH . "login.php");
					}else{
						include_once(__VWS_PATH . "wall.php");
					}
				}else{
					include_once(__VWS_PATH . "login.php");
				}
				?>

		
	</body>
</html>