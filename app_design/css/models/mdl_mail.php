<?php

	class mdl_Mail
	{
		var $to = null;
		var $from = null;
		var $subject = null;
		var $body = null;
		var $headers = null;

		public function __construct(){}

		function create_Mail($to,$from,$subject,$body)
		{
			$this->to        = $to;
			$this->from      = $from;
			$this->subject   = $subject;
			$this->body      = $body;
		}

		function send_Mail()
		{  
			$this->addHeader('From: '.$this->from."\r\n");
			$this->addHeader('Reply-To: '.$this->from."\r\n");
			$this->addHeader('Return-Path: '.$this->from."\r\n");
			$this->addHeader('Mine-Version: 1.0'."\r\n");
			$this->addHeader('Content_type: text/html; Charset= UTF-8 '."\r\n");
			
			mail($this->to,$this->subject,$this->body,$this->headers)
			or die("Lo sentimos, debes configurar un servidor de correo (SMTP) primero!");
		}

	    function addHeader($header)
		{
			$this->headers .= $header;
		}
	}
?>



