<?php 
require_once 'inc/Tweets/Display.php';

$nextCursor = null;

if (isset($_GET['nextCursor'])) {
    $nextCursor = $_GET['nextCursor'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Campus is Tweeting - NC State on Twitter - NC State University</title>
<?php include_once("inc/layout/head.php"); ?>     
</head>
<body class="level">
<?php include_once("inc/layout/header.php"); ?>     
     <div id="copy">
        <div id="tweets">
<p>
    Catch up with your favorite sports team, stay up on the latest campus news,
    or discover the next must-attend event.  This is the complete list of organizations 
    that are tweeting on campus.  If you are an NC State organization and would like to 
    be listed here, send an email to <a href="mailto:twitter@ncsu.edu">twitter@ncsu.edu</a>.
</p>
<br />
<?php echo Tweets_Display::accounts($nextCursor); ?>
        </div><!-- end tweets --> 
<?php include_once("inc/layout/right-nav.php"); ?>     
  </div><!-- end copy --> 
     <br class="clear" />
</div><!-- end wrapper -->  
<?php include_once("inc/layout/footer.php"); ?>     
</body>
</html>
