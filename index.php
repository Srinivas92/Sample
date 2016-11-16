<?php
// Create connection to Oracle
$conn = oci_connect("system", "system", "127.0.0.1/xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}
// Close the Oracle connection
oci_close($conn);
?>
