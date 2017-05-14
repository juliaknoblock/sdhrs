<?php
if (isset($_REQUEST['page']))
{ 
if($_REQUEST['page'] !="")
if(file_exists("pages/".$_REQUEST['page'].".php"))
$page_content = file_get_contents("pages/".$_REQUEST['page'].".php");
else
if (file_exists($_REQUEST['page'].".php"))
$page_content = file_get_contents($_REQUEST['page'].".php");
else
echo "<center>Page:".$_REQUEST['page']." does not exist! Please check the url and try again!</center>";
}
else
$page_content = file_get_contents("pages/aboutus.php");
$page_content = str_replace("!!HEADER!!", file_get_contents("design/header.php"),$page_content);
$page_content = str_replace("!!FOOTER!!", file_get_contents("design/footer.php"),$page_content); 

// canonical url tag generation
$canonicalUrlParts = parse_url($_SERVER['REQUEST_URI']);
$canonicalUrlPath = isset($canonicalUrlParts['path']) ? $canonicalUrlParts['path'] : '/';
$canonicalUrlHost = $_SERVER['HTTP_HOST'];
$page_content = str_replace("!!CANONICAL!!", "<link rel=\"canonical\" href=\"https://{$canonicalUrlHost}{$canonicalUrlPath}\" />", $page_content);
// end

echo $page_content;
?>