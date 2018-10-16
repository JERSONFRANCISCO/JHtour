<?php
	
	/*archivos controlador que contiene los llamados a las acciones de la vista (ADD,SEARCH)*/

	require_once(__MDL_PATH . "mdl_wall.php");
	require_once(__MDL_PATH . "mdl_message.php");
	require_once(__MDL_PATH . "mdl_mail.php");

	class ctr_Wall{

		private $postdate;
		var $MSSG;
		var $mail;

		public function __construct() // Constructor
		{
			$this->postdata=new mdl_Wall();
			$this->MSSG = new mdl_Message();
			$this->mail = new mdl_Mail();
		}

		public function get_posts()
		{
			return $this->postdata->obtener_posts();
		}

		function btn_save_click()
		{
			$postinfo=array();
			$postinfo[0] = trim(str_replace("'","\"", $_POST['txt_post']));

			$this->postdata->insertar_post($postinfo);

			//******************************************************
			//Enviamos un e-mail a todos los usuarios
			if ($_POST['cmb_seccion']) {
				if ($_POST['cmb_seccion']== "Habilitar") {
					$this->MSSG->show_message("","success","good_send");
			$users=array();
			$users=$this->postdata->obtener_usuarios();

			foreach ($users as $value) {
				/*Envio de email dirigido a los usuarios del sistema
				Para alertarle de un nuevo mensaje del usuario actual*/
				$this->mail->create_Mail($value[0],'noreplay@mynetworktest.com',
					'Nuevo Mensaje desde MY_NETWORK', 'Hola soy: '
				    . $_SESSION['USERNAME'] . "<br><br>" . $postinfo[0]);
				$this->mail->send_Mail();
			}
			}

			if ($_POST['cmb_seccion']== "Deshabilitar") {
				$this->MSSG->show_message("","success","not_send");
		}
	}
			//*********************************************************************
			$this->MSSG->show_message("","success","success_insert");
		}
	}
?>