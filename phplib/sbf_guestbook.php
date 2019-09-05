  <table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
  	<td class="pageTitle">Guest Book</td>
  </tr>
  <tr>
  	<td>Wanna write me some message? <a href="sign_guestbook.php" class="small">Sign the Guestbook</a> now!</td>
  </tr>
  <tr>
    <td>
	<?php
		include "phplib/db_connect.php";
		$sql_stmt = "SELECT name, email, message, DATE_FORMAT(sign_date, '%a, %b %d, %y %I:%i %p') sign_on
					FROM sbf_guestbook ORDER BY sign_date desc ";
		$result = mysql_query($sql_stmt); 
		if (mysql_num_rows($result) == 0) // No record
		    print "Currently, there is no one signing the guest book!";
		else
		{
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
	?>				
	<!-- This is where I want to loop -->
	<br><table width="396" height="100" border="0" cellpadding="0" cellspacing="0" id="Table_01">
      <tr>
        <td width="76" height="12"> <img src="images/SBF-GuestBook_08.gif" width="76" height="12" alt=""></td>
        <td width="15"> <img src="images/SBF-GuestBook_09.gif" width="15" height="12" alt=""></td>
        <td width="283"> <img src="images/SBF-GuestBook_10.gif" width="283" height="12" alt=""></td>
        <td width="22"> <img src="images/SBF-GuestBook_11.gif" width="22" height="12" alt=""></td>
      </tr>
      <tr>
        <td height="68" valign="top"> <img src="images/SBF-GuestBook_13.gif" width="76" height="68" alt=""></td>
        <td background="images/SBF-GuestBook_14.gif">&nbsp;</td>
        <td valign="top" bgcolor="#FFFFFF"> 
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>
			  <?php 
			  		print "Name: <b>".$row["name"]."</b>";
					print " | Email: <b>".$row["email"]."</b>";
				?>
			  </td>
            <tr>
              <td><?php print "Signed On: <b>".$row["sign_on"]."</b>"; ?></td>
            </tr>
            </tr>
            <tr>
              <td><br><?php print $row["message"]; ?></td>
            </tr>
          </table>
		  </td>
        <td background="images/SBF-GuestBook_16.gif">&nbsp;</td>
      </tr>
      <tr>
        <td height="19"> <img src="images/SBF-GuestBook_18.gif" width="76" height="19" alt=""></td>
        <td> <img src="images/SBF-GuestBook_19.gif" width="15" height="19" alt=""></td>
        <td> <img src="images/SBF-GuestBook_20.gif" width="283" height="19" alt=""></td>
        <td> <img src="images/SBF-GuestBook_21.gif" width="22" height="19" alt=""></td>
      </tr>
    </table>
	<br>	
	<?php	
			} // End While
		}  // End If
	?>
	<!-- This is where I want to loop -->
		  </td>
		</tr>
	  </table>
