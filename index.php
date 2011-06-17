<?php
	$psuser = '';
	$pspass = '';
	
	$ctzuser= '';
	$ctzpass =  '';
	
	//Connect to the Powerschool database. The DB SID for Codman is MA017
	
	// If it works, let us know. If it doesn't, let us know why
	if ($psconn = oci_connect($psuser, $pspass, '//10.160.29.150:1521/MA017')) {
   		echo "Successfully connected to Powerschool.";
   		oci_close($psconn);
 	} 	
 	else {
   		$err = oci_error();
   		echo "Powerschool Connect Error " . $err['text'];
 	}
 	
 	//Now let's connect to Citizenship.
 	
 	//if it works, let us know!
 	
	if ($ctzconn = mysql_connect('69.38.149.91:3306/status103', $ctzuser, $ctzpass)) {
		echo "<br \>Successfully connected to Citizenship.";	
	}
	else { 
		echo "<br \>connection to Citizenship failed.<br />".mysql_error();
	}
	
	mysql_close($ctzconn);
  
?>