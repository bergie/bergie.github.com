<?php
/*
Moblog Upload Handler
Henri Bergius <henri.bergius@iki.fi>

Based on snippet /TechSupport/UI/Handlers/Email-import
from OpenPSA (www.openpsa.org)

Note: the mail transfer agent expects to receive uppercase
OK when the mail has been successfully processed. If that is
missing or uppercase ERROR has been transmitted the email
will not be removed from server.
*/

mgd_include_snippet("/bergie/mobile/config");

// Start buffering for the log
header("Content-type:text/plain");
ob_start();
echo "=================================================\n";
echo "DEBUG: Started email handling on ".date("Y-m-d H:i",time())."\n";
echo "DEBUG: User-Agent: ".$_SERVER['HTTP_USER_AGENT']."\n";

// Load the log topic
$moblog_topic = mgd_get_object_by_guid($moblog_topic_guid);
echo "DEBUG: Loaded topic ".$moblog_topic->name." (#".$moblog_topic->id.")\n";

// Function for logging the output
function moblog_log() {
  $data = ob_get_contents();
  //write the contents to a file
  $fp = fopen("/tmp/moblog-upload.log","a");
  fwrite($fp,$data);
  fclose($fp);
  // Output the status
  ob_end_flush();
}

// Don't bother to even initialize anything if we don't have anything to process
if (!$_REQUEST["mailbody"]) { 
   echo "ERROR: No body received\n";
   moblog_log();
   exit();
} else {

  // Check that we got the whole email
  echo "DEBUG: got body, reported size=".$bodysize."b actual size=".strlen($mailbody)."b\n";
  if ($_REQUEST["bodysize"] != strlen($_REQUEST["mailbody"])) {
    echo "ERROR: Reported and actual bodysize different, transfer error ?\n";
    moblog_log();
    exit();
  }

  // Load Mail class from OpenPSA
  mgd_include_snippet("/Nemeinnet_Core/Mail");

  // Load NemeinRCS revision control script
  mgd_include_snippet("/AegirCore/config/config");
  global $rcsroot;
  $rcsroot = $set["rcsroot"];
  if (!$rcsroot) {
    $rcsroot = "/var/lib/aegir/cvs";
  }
  echo "DEBUG: Set revision control root to ".$rcsroot." (got ".$set["rcsroot"]." from Aegir)\n";
  mgd_include_snippet("/AegirCore/lib/rcs_functions");

  // Authenticate the user if needed
  if (!$midgard->user) {
    mgd_auth_midgard($moblog_username, $moblog_password, 0);
    $midgard = mgd_get_midgard();
    if (!$midgard->user) {
      echo "ERROR: No user authenticated (or authentication error)\n";
      moblog_log();
      exit();
    }
  }
  $user = mgd_get_person($midgard->user);
  echo "DEBUG: Authenticated user ".$user->name." (#".$midgard->user.")\n";

  // Parse the email
  $mail=new nemeinnet_mail();
  $mail->body=$_REQUEST["mailbody"];
  $mime=&$mail->mimeDecode();
  echo "DEBUG: decoded body size ".strlen($mail->body)."b\n";

  // Get the log message
  $moblog_message = $mail->body;

  // Clean address from message
  $moblog_message = str_replace($moblog_email_receive." ","",$moblog_message);

  // Get the log time
  // TODO: read from the email
  $moblog_time = time();

  // Check for keywords in the message
  echo "DEBUG: ".substr(trim($moblog_message),0,6)."\n";
  if (stristr(substr(trim($moblog_message),0,6),"NEWLOC")) {
    // User is reporting new location
    mgd_include_snippet("/bergie/mobile/location");
  } elseif (stristr(substr(trim($moblog_message),0,6),"NEWLOG")) {
    // User is reporting new blog entry
    mgd_include_snippet("/bergie/mobile/newblog");
  } elseif (stristr(substr(trim($moblog_message),0,3),"LOG")) {
    // User is continuing a blog entry
    mgd_include_snippet("/bergie/mobile/blog");
  } else {
    // User wants to moblog
    mgd_include_snippet("/bergie/mobile/moblog");
  }
}
// Log status
moblog_log();

// Refresh MidCOM cache
exec('/usr/bin/lynx -dump http://bergie.iki.fi/midcom-cache-invalidate');
?>