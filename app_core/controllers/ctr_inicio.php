<?php
	
	require_once(__MDL_PATH . "mdl_inicio.php");
	class ctr_inicio{
		private $postdata;

		public function __construct() //CONSTRUCTOR
		{
			$this->postdata = new mdl_inicio();
		}
		public function get_posts()
		{
			return $this->postdata->obtener_posts();
		}

	}

?>