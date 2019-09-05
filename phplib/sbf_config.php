<?php
// Files and directories variables
$conf_dir["lib"] = "phplib/";                  
$conf_dir["js"] = "jslib/";
$conf_dir["css"] = "csslib/";
$conf_dir["photo"] = "photo/";
$conf_dir["story"] = "story/";
$conf_dir["text"] = "text/";

$conf_lib["banner"] = $conf_dir["lib"]."sbf_banner.php"; 

/* 
// Changing banner after each refresh/reload
$seconds = date("s") % 2;  // Checking for ODD / EVEN SECONDS
if ($seconds == 0)  
   $conf_lib["banner"] = $conf_dir["lib"]."sbf_banner.php";   
else
   $conf_lib["banner"] = $conf_dir["lib"]."sbf_new_banner.php";   

*/

$conf_lib["footer"] = $conf_dir["lib"]."sbf_footer.php";
$conf_lib["db_conn"] = $conf_dir["lib"]."db_connect.php";
$conf_lib["function"] = $conf_dir["lib"]."sbf_functions.php";   
$conf_lib["story"] = $conf_dir["lib"]."sbf_story.php";   
$conf_lib["links"] = $conf_dir["lib"]."sbf_links.php";   
$conf_lib["memlinks"] = $conf_dir["lib"]."sbf_mem_links.php";   

$conf_lib["chk_form"] = $conf_dir["js"]."chk_form.js";
$conf_lib["css1"] = $conf_dir["css"]."sbf_style1.css";
$conf_lib["css2"] = $conf_dir["css"]."sbf_style2.css";
$conf_lib["css3"] = $conf_dir["css"]."sbf_style3.css";

$conf_tbl["mem"] = "sbf_members";
$conf_tbl["gb"] = "sbf_guestbook";
$conf_tbl["quote"] = "sbf_quotes";

$conf_name["page_title"] = "NoiseStop Systems Singapore";
$conf_name["home"] = "Home";
$conf_name["login"] = "Login";
$conf_name["gb"] = "Guest Book";
$conf_name["faq"] = "FAQs";

$conf_name["quote"] = "Random Quote";
$conf_name["mem"] = "Members on Board";
$conf_name["profile"] = "Update Profile";
$conf_name["password"] = "Update Password";
$conf_name["downloads"] = "Downloads Here";
$conf_name["links"] = "Useful Links";
$conf_name["approval"] = "Member's Approval";

// Dynamic screen layout
if (date("w") == 5)
{
    $conf_lib["banner"] = $conf_dir["lib"]."sbf_new_banner.php";
    $conf_lib["css1"] = $conf_lib["css3"];
}
?>