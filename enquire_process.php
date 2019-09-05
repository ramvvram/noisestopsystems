<?php
/***************************************************************************
*                               Booking Email
*                              -------------------
*     begin                : Nov 2007
*     created by           : Lay Poh Leng (just_pl@yahoo.com)
*
***************************************************************************/

//foreach($_POST as $key=>$value)
//    print $key ."<br>";

//print_r($_SERVER);
$server_name = str_replace("www.", "", $_SERVER['SERVER_NAME']);
$domain_name = 'http://www.'.$server_name;

### Replace the following email for testing purpose ###
$mail_sender = "noreply@".$server_name;
$mail_recipient = "info@noisestopsystems.sg";
$mail_cc = "yaphsiuling@noisestopsystems.sg";
$mail_bcc = "booking@mindmomentum.com";
$mail_subject = "Noise Stop Systems - Online Enquiry";

$send_title = stripslashes($_POST['title']);
$send_name = stripslashes($_POST['name']);
$send_name2 = stripslashes($_POST['name2']);
$send_address = stripslashes($_POST['address']);
$send_country = stripslashes($_POST['country']);
$send_postal = stripslashes($_POST['postcode']);
$send_email = stripslashes($_POST['email']);
$send_tel = stripslashes($_POST['tel']);
$send_enq_src = stripslashes($_POST['enq_source']);
$send_enquiry = stripslashes($_POST['enquiy']); 
$send_noise_can_hear = stripslashes($_POST['noise_can_hear']); 
$send_source_of_noise = stripslashes($_POST['source_of_noise']); 
$send_measure1 = stripslashes($_POST['measurement1']); 
$send_measure2 = stripslashes($_POST['measurement2']); 
$send_measure3 = stripslashes($_POST['measurement3']); 

/* 

#### Text Email Message Sample ####

$text_email_msg = '
======================
ONLINE BOOKING DETAILS
======================
Enquiry Source = '.$send_enq_src.'
Title = '.$send_title.'
Name = '.$send_name.'
Family Name = '.$send_name2.'
Address = '.$send_address.'
Country = '.$send_country.'
Postal Code = '.$send_postal.'
Date of Stay = '.$send_datestay.'
Information = '.$send_info.'
Email = '.$send_email.'
Contact No. = '.$send_tel.'
Enquire Details = '.$send_enquiy.'
Type of Noise you can hear? = '.$send_noise_can_hear.'
Source of noise = '.$send_source_of_noise.'
Measurement  = '.$send_measure1.' X '.$send_measure2.'
Height = '.$send_measure3;


print nl2br($text_email_msg);
*/

#### HTML Email Message ####

$html_email_msg = '
<html>
<style type="text/css">
body, p, td {
	font-family: Verdana, Times New Roman, Arial;
	font-size: 12px;
}
.label {
	width:30%;
	font-weight: bold;
	color: #666666;
}
.separator {
	width: 3%;
}
.footnote {
	font-size:10px;
	color: #999999;
}
</style>
<body>
<h2>ONLINE ENQUIRY DETAILS</h2>
<table width="700">
<tr>
  <td class="label" valign="top">Enquiry Source</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_enq_src.'</td>
</tr>
<tr>
  <td class="label" valign="top">Title</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_title.'</td>
</tr>
<tr>
  <td class="label" valign="top">Name</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_name.'</td>
</tr>
<tr>
  <td class="label" valign="top">Family Name</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_name2.'</td>
</tr>
<tr>
  <td class="label" valign="top">Address</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.nl2br($send_address).'</td>
</tr>
<tr>
  <td class="label" valign="top">Postal code or Zip </td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_postal.'</td>
</tr>
<tr>
  <td class="label" valign="top">Email</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_email.'</td>
</tr>
<tr>
  <td class="label" valign="top">Enquiry Details</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.nl2br($send_enquiry).'</td>
</tr>
<tr>
  <td class="label" valign="top">Telephone Number</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_tel.'</td>
</tr>
<tr>
  <td class="label" valign="top">Type of Noise you can hear?</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_noise_can_hear.'</td>
</tr>
<tr>
  <td class="label" valign="top">Source of noise</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_source_of_noise.'</td>
</tr>
<tr>
  <td class="label" valign="top">Measurement</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_measure1.' X '.$send_measure2.'</td>
</tr>
<tr>
  <td class="label" valign="top">Height</td>
  <td class="separator" valign="top">:</td>
  <td class="field" valign="top">'.$send_measure3.'</td>
</tr>
</table>
<br>
<p class="footnote">
NOTE:This is an automated email message sent from '.$domain_name.'. Please do not reply to this email.
</p>
</body>
</html>';

//print $html_email_msg;

// To send HTML mail, the Content-type header must be set
$mail_hdr  = 'MIME-Version: 1.0' . "\r\n";
$mail_hdr .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$mail_hdr .= 'To: '. $mail_recipient . "\r\n";
$mail_hdr .= 'From: '. $mail_sender . "\r\n";
$mail_hdr .= 'Cc: '. $mail_cc . "\r\n";
$mail_hdr .= 'Bcc: '. $mail_bcc . "\r\n";

$mail_msg = $html_email_msg;  // Replace text msg if do not want html msg

// Mail it
$mail_out = @mail($mail_recipient, $mail_subject, $mail_msg, $mail_hdr);

// Set to thank you message if successful
if ($mail_out)
	header("Location: thankyou.html");
else
	header("Location: sorry.html");

?>