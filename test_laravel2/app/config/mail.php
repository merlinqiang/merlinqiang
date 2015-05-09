<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Mail Driver
	|--------------------------------------------------------------------------
	|
	| Laravel supports both SMTP and PHP's "mail" function as drivers for the
	| sending of e-mail. You may specify which one you're using throughout
	| your application here. By default, Laravel is setup for SMTP mail.
	|
	| Supported: "smtp", "mail", "sendmail", "mailgun", "mandrill", "log"
	|
	*/

	'driver' => 'smtp',
	// 'driver' => 'mailgun',


	'host' => 'smtp.163.com',


	'port' => 25,



	'from' => array('address' => 'f1120428399@163.com', 'name' => 'merlin'),


	'encryption' => 'tls',



	'username' =>'f1120428399@163.com',


	'password' => 'fengqiang.123',



	'sendmail' => '/usr/sbin/sendmail -bs',


	'pretend' => false,

);
