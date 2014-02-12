<?php 
require_once '../inc/Tweets/Installer.php';

$installer = new Tweets_Installer();

if (!isset($_POST['consumerKey']) || !isset($_POST['consumerSecret'])) {
    die('Consume Key and Consumer Secret must be set.');
}

$consumerKey = trim(htmlentities($_POST['consumerKey']));
$consumerSecret = trim(htmlentities($_POST['consumerSecret']));

if ($consumerKey == '' || $consumerSecret == '') {
    die('Consume Key and Consumer Secret must be set.');
}

$installer->writeOauthAppInfo($consumerKey, $consumerSecret);

header('Location: index.php');