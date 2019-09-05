<?php

   if (!isset($_COOKIE["uname"]))
       exit($error_msg["notmember"]);

    $login_user = $_COOKIE["uname"];  // To be used by some programs
	
	if (!empty($_COOKIE["last_login"]))
	   $last_login_desc = " | Last Login on ".$_COOKIE["last_login"];
	
?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
      <tr>
        <td width="12%" class="myLinks"><a href="member.php">&spades; <?php print $conf_name["quote"]; ?> </a></td>
        <td width="15%" class="myLinks"><a href="view_member.php">&spades; <?php print $conf_name["mem"]; ?></a></td>
        <td width="10%" class="myLinks"><a href="mail_member.php">&spades; <?php print $conf_name["mail"]; ?></a></td>
        <td width="12%" class="myLinks"><a href="profile.php">&spades; <?php print $conf_name["profile"]; ?></a></td>
        <td width="14%" class="myLinks"><a href="password.php">&spades; <?php print $conf_name["password"]; ?> </a></td>
        <td width="13%" class="myLinks"><a href="links.php?type=d">&spades; <?php print $conf_name["downloads"]; ?> </a></td>
        <td width="10%" class="myLinks"><a href="links.php?type=l"> &spades; <?php print $conf_name["links"]; ?></a></td>
      </tr>
	  <?php
	  if ($_COOKIE["admin"] == "Y") // Only display, if this is administrator
	  {
	  ?>
      <tr>
        <td colspan="7" class="myLinks"><a href="app_member.php">&spades;<?php print $conf_name["approval"]; ?></a></td>
      </tr>
	  <?php
	  }
	  ?>
    </table>
    <br>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="70%" >Welcome, 
		<?php 
		   print $_COOKIE["mem_name"]; 
		   print $last_login_desc;
		?> |
		<a class="logout" href="login.php?logout=1">&clubs; Logout</a></td>
        <td width="50%" align="right" >Today is <?php print date("d M Y, l"); ?> </td>
      </tr>
	</table>
	