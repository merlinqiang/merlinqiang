<?php
	class UserController extends BaseController
	{
		public function Login()
		{
			// View::make('world');
			// var_dump($_POST);
			unset($_POST['_token']);
			$a=DB::table('user')->insert($_POST);
			$data=array(
				'name'=>'merlin'	
				);
			// var_dump($a);
			if($a){
				Mail::send('emails.useremail', $data, function($message)
				{
				    $message->to('1120428399@qq.com', 'feng')->subject('Welcome!');
				});
			}
		}
		public function dologin(){

		}
	}
?>