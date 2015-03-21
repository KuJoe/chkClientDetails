<?php
/**
A WHMCS hook that checks new client details for blocked words and displays an error if such words exist in any of the client fields.
Version 1.1 by KuJoe (JMD.cc)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
**/

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