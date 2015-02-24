Check Client Details Hook for WHMCS (MIT License)<br />
Version 1.0 by KuJoe (JMD.cc)<br />

1.1 -	Changed script to run for new clients and when existing clients update their details (and changed method of error reporting).<br />
	
//Requirements:<br />
NONE<br />

//Installation:<br />
1) Upload the chkclientdetails.php file into your WHMCS's hooks directory (/includes/hooks/).<br />

//Optional:<br />
A) Edit $fields to add or remove fields to check (by default all fields with type "string" that are supported in the current WHMCS release are included).<br />
B) Edit $blocked to add or remove words that are blocked (by default I've included a few words that seem to be the most common for automated SQL Injections).<br />
C) Edit text in $error to fit your language or preference.<br />

Example of what the client sees with blocked values for new orders:<br />
![Alt text](/example_new_client.png?raw=true "Example New Order")<br />

Example of what the client sees when they try to update their client details with blocked values:<br />
![Alt text](/example_update_client.png?raw=true "Example Update Details")<br />