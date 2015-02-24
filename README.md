Check Client Details Hook for WHMCS (MIT License)
Version 1.0 by KuJoe (JMD.cc)

1.1 -	Changed script to run for new clients and when existing clients update their details (and changed method of error reporting).
	
//Requirements:
NONE

//Installation:
1) Upload the chkclientdetails.php file into your WHMCS's hooks directory (/includes/hooks/).

//Optional:
A) Edit $fields to add or remove fields to check (by default all fields with type "string" that are supported in the current WHMCS release are included).
B) Edit $blocked to add or remove words that are blocked (by default I've included a few words that seem to be the most common for automated SQL Injections).
C) Edit text in $error to fit your language or preference.

Example of what the client sees with blocked values for new orders:
![Alt text](/example_new_client.png?raw=true "Example New Order")

Example of what the client sees when they try to update their client details with blocked values:
![Alt text](/example_update_client.png?raw=true "Example Update Details")