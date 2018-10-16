<?php
	require_once(__MDL_PATH . "mdl_html.php");
	require(__CTR_PATH . "ctr_wall.php");
	require(__CTR_PATH . "ctr_login.php");

		$HTML = new mdl_HTML();
		$ctr_Wall = new ctr_Wall();
		$ctr_Login= new ctr_Login();


		if (isset($_POST['btn_save'])) {
			$ctr_Wall->btn_save_click();
		}

			if (isset($_POST['btn_logout'])) {
			$ctr_Login->btn_logout_click();
		}


?>

<!--En el siguiente bloque imprimimos EL FORMULARIO HTML de envio de posts -->
<div id="user_box">
	<?php echo $HTML->html_img_tag(__RSC_PHO_HOST_PATH. $_SESSION['USERPHOTO'],
		"userphoto", "imguser","photo","width=50") . "<span>HOLA!" . 
		$_SESSION['USERNAME'] . "</span>" ;?>
</div>



<div id="post_box" method="post">
	<?php echo $HTML->html_form_tag("frm_service","","", "post"); ?>
	<?php echo $HTML->html_textarea(4,6,"txt_post","txt_post","textarea","",1,"",
									"placeholder='Escribe algo!'","required"); ?>	
									<label>HABILITAR/DESHABILITAR CORREO :</label><br>
		    		<select id="cmb_seccion" required="required" name="cmb_seccion" >
		    			<option>-- CORREO --</option>
						<option id="Habilitar" name="Habilitar" value="Habilitar">Habilitar Correo</option>
						<option id="Deshabilitar" name="Deshabilitar" value="Deshabilitar">Deshabilitar Correo</option>
	
					</select><br><br>
		    		
	
	<?php echo $HTML->html_input_button("submit","btn_save","btn_save","boton","Publicar",2,"",""); ?><br>
			<?php echo $HTML->html_form_end(); ?>
</div>

<div id="main_panel">

<?php

	//En el siguiente bloque imprimimos todos los posts de la BD

	$caja_post="";
	$contposts=0;

	foreach ($ctr_Wall->get_posts() as $value){

		$caja_post.= "<div class='post_block'>
							<span class='post_text' id='post_" . $value[0] . "'>
							<div class='published_date'>
								<span>Publicado el " . $value[2] . " por " . $value[4] . "</span>

							</div>
							</span>

							<div id= 'content_post_".$contposts."'>
							" . $HTML->html_img_tag(__RSC_PHO_HOST_PATH . $value[5], "userphoto", "imgpost","photo","width=50") . "  
								<div class='post_detail'>" . $value[1] . "</div><br/>
								</div>
							</div>";
		$contposts++; 
	}
	echo $caja_post;

	?>
	</div>

	<div id="logout" style='position:absolute; bottom: -40px;'>
		<?php echo $HTML->html_form_tag("frm_app", "","","post"); ?>
		<?php echo $HTML->html_input_button("submit","btn_logout","btn_logout","boton","Salir",3,"","");?>
		<?php echo $HTML->html_form_end();?>

	</div>