<?php 
require_once 'inc/Tweets/Display.php';
?>
<html>
<head>
    <title>My Organization's Tweeple</title>
    <link href="public/css/base.css" rel="stylesheet"/>
</head>
<body>
    <?php echo Tweets_Display::accounts(); ?>
</body>
</html>