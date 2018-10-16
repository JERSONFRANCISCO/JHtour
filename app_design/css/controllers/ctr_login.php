<?php

	require_once(__MDL_PATH . "mdl_login.php");
	require_once(__MDL_PATH . "mdl_message.php");

	class ctr_Login{
		
		private $login_exec;
		var $MSSG;

		public function __construct(){
			$this->login_exec=new mdl_Login();
			$this->MSSG = new mdl_Message();
		}

		function btn_login_click(){
			$username=trim($_POST['txt_user']);
			$password=trim($_POST['txt_pssw']);

			$this->login_exec->login($username,$password);

			if ($this->login_exec->conn_status) {
				$_SESSION['MYAPP']="YES";
				$_SESSION['USERID']=$this->login_exec->get_userid();
				$_SESSION['USERNAME']=$this->login_exec->get_username();
				$_SESSION['USERPHOTO']=$this->login_exec->get_userphoto();

				header("Location:");

			}else{
				$_SESSION['MYAPP']="NO";
				$this->MSSG->show_message("","warning","fail_auth");
			}
		}

		function btn_logout_click(){
			if (isset($_POST['btn_logout'])) {
				$this->login_exec->logout();
				header("Location:");
			}
		}
	}
	?>