<?php 
require_once 'inc/Tweets/Display.php';

$maxId = null;

if (isset($_GET['maxId'])) {
    $maxId = $_GET['maxId'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>NC State on Twitter - NC State University</title>
<?php include_once("inc/layout/head.php"); ?>     
</head>
<body class="home">
<?php include_once("inc/layout/header.php"); ?>     
     <div id="copy">
         <div id="tweets">
           <h2 class="tweetHeader">Tweets from NC State</h2> 
            <?php echo Tweets_Display::timeline($maxId); ?>
        </div><!-- end tweets --> 
        
<?php include_once("inc/layout/right-nav.php"); ?>        
     </div><!-- end copy --> 
     <br class="clear" />
</div><!-- end wrapper -->  
<?php include_once("inc/layout/footer.php"); ?>     
</body>
</html>
