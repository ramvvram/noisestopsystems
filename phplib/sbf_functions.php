<?php
/********************************************************
  Function Name: getSenderRecipientEmail
  Description  : Retrieving both sender and receipient email
                 with name. 
                 Returns an array, with both sender and recipient
  Parameters   : $s_username - sender login username
                 $r_username - recipient login username
*********************************************************/
function getSenderRecipientEmail($s_username, $r_username)
{
	// Fetch name, email address of the person to mail to
	$sql_stmt = "SELECT email, name FROM sbf_members
	             WHERE username = '$r_username' ";

	$result = mysql_query($sql_stmt);
	$row = mysql_fetch_array($result, MYSQL_ASSOC);  
	$recipient = "$row[name]<$row[email]>";  // NAME <myemail@yahoo.com>

	// Fetch name, email address of the sender
	$sql_stmt = "SELECT email, name  FROM sbf_members
    	         WHERE username = '$s_username' ";

	$result = mysql_query($sql_stmt);
	$row = mysql_fetch_array($result, MYSQL_ASSOC);  
	$sender = "$row[name]<$row[email]>";  

	$ret_email = array("r"=>"$recipient", "s"=>"$sender");
	return $ret_email;

}  // End-function getSenderRecipientEmail


/********************************************************
  Function Name: sendEmail
  Description  : Sending mail, catering for cc, bcc, reply-to
                 and also html email
  Parameters   : $to - recipient(s) email, can have multiple
                       emails, using commas
                 $subject - email subject
                 $from - sender email
                 $msg - email message
                 $cc - cc to person
                 $bcc - bcc to person
                 $reply - reply to person
                 $html - 1: HTML message; 0: Normal text
*********************************************************/
function sendEmail($to="", $subject="", $from="", $msg="", $cc="", 
                   $bcc="", $reply="", $html=0)
{

  if ($html) // HTML mail
  {
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  }

  if (!empty($from))
     $headers .= 'From: $from'. "\r\n";

  if (!empty($reply))
     $headers .= 'Reply-To: $cc' . "\r\n";

  if (!empty($cc))
     $headers .= 'Cc: $cc' . "\r\n";

  if (!empty($bcc))
     $headers .= 'Bcc: $bcc' . "\r\n";

  mail($to, $subject, $msg, $headers);

} // End-function sendEmail


?>