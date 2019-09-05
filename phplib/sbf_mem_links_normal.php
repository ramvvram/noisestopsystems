<?php
//print_r($_COOKIE);
   if (!isset($_COOKIE["uname"]))
       exit("<br><b><font color=\"red\">Sorry, you must <a href=\"login.php\">LOGIN</a> to access the member's functions!</b></font>");
	
?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
      <tr>
        <td width="9%" class="myLinks"><a href="member.php">&spades; Member</a></td>
        <td width="15%" class="myLinks"><a href="view_member.php">&spades; Members On Board</a></td>
        <td width="10%" class="myLinks"><a href="mail_member.php">&spades; Mail a Friend</a></td>
        <td width="13%" class="myLinks"><a href="profile.php">&spades; Update Profile</a></td>
        <td width="15%" class="myLinks"><a href="password.php">&spades; Update Password </a></td>
        <td width="14%" class="myLinks"><a href="links.php?type=d">&spades; Downloads Here </a></td>
        <td width="10%" class="myLinks"><a href="links.php?type=l"> &spades; Useful Links</a></td>
      </tr>
    </table>
    <br>
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="50%" >Welcome, <?php print $_COOKIE["mem_name"]; ?> <a class="logout" href="login.php?logout=1">&clubs; Logout</a></td>
        <td width="50%" align="right" >Today is <?php print date("d M Y, l"); ?> </td>
      </tr>
	</table>
	