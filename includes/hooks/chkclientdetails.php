<?php

function chkFields($vars) {
	$fields = array('firstname','lastname','companyname','email','password','password2','address1','address2','city','state','country','securityqans');
	$blocked = array('AES_ENCRYPT','SELECT','tbladmins','tblclients','tbladminsecurityquestions','tblhosting');
	$error = array();
	foreach ($fields as $v) {
		foreach($blocked as $b){
			if(strpos($vars[$v],$b)!== false){
				$error[] = $v.' is not valid.<br />';
				break;
			}
		}
	}
	if(!empty($error)) {
		return $error;
	}
}

add_hook("ClientDetailsValidation",1,"chkFields");
?>