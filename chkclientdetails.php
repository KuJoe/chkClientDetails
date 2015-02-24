<?php

function chkFields($vars) {
	$fields = array('firstname','lastname','companyname','email','password','password2','address1','address2','city','state','country','securityqans');
	$blocked = array('AES_ENCRYPT','SELECT','tbladmins','tblclients','tbladminsecurityquestions','tblhosting');
	$error = '';
	foreach ($fields as $v) {
		foreach($blocked as $b){
			if(strpos($vars[$v],$b)!== false){
				$error .= $v.' is not valid.<br />';
				break;
			}
		}
	}
	if(isset($error)) {
		global $errormessage;
		$errormessage .= '!INVALID CONTACT INFORMATION!<br />';
		$errormessage .= $error;
	}
}

add_hook("ShoppingCartValidateCheckout",1,"chkFields");
?>