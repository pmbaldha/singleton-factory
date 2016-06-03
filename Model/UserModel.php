<?php
class UserModel {
	public $email = "pmbaldha@gmail.com";
	
	public function __construct($email = '')
	{
		if(!empty($email))
			$this->email = $email;
	}
}	

?>
