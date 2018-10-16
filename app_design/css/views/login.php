<?php

 	require_once(__MDL_PATH . "mdl_html.php");
 	require(__CTR_PATH . "ctr_login.php");

 	$ctr_Login=new ctr_Login();
 	$HTML = new mdl_Html();

 	echo "<script>
 			$('link').attr('href'," .json_encode(__CSS_PATH . "login.css") . ");
 		  </script>";
?>

	<div id="login">

		<?php echo $HTML->html_form_tag("frm_login", "" ,"","post"); ?>
		<h1></h1>
		<?php echo $HTML->html_input_text("txt_user","txt_user","cajatexto",64,"","",
										"Nombre de Usuario",1,"","placeholder='USUARIO'","required"); ?>
		<br>
		<?php echo $HTML->html_input_password("txt_pssw","txt_pssw","cajatexto", 64, "",
										"Contraseña del Usuario",2,"","placeholder='PASSWORD'","required"); ?>
		<br>
		<?php echo $HTML->html_input_button("submit","btn_login","btn_login","boton","GO!",3,"",""); ?>
		<br>
		<?php echo $HTML->html_form_end(); ?>

	</div>


	<?php

		if(isset($_POST['btn_login'])){
			$ctr_Login->btn_login_click();
		}

	?>





