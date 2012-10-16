<?php

function validateEmail($email){
	if(strpos($email,'@') > 0 && checkDomain($email)==true){
		return true;
	}
	else {
		return false;
	}
}

function checkDomain($email){
	$_domains = array('yahoo.com','usc.edu','hotmail.com','aol.com');
	
	foreach ($_domains as $domain){
		if(strpos($email, $domain)>0){
			return true;
		}
	}
}

function notEmpty($string){
	if(strlen($string)>0){
		return true;
	}
	else{
		return false;
	}
}

function redirect($url){
	header("Location:$url");
}

?>