<?php 
require_once '../inc/Tweets/Installer.php';

$installer = new Tweets_Installer();

$oauthConfig = Tweets_Ncsu::getConfigFile();
$installUrl = Tweets_Ncsu::getBaseUrl();

$session = new Zend_Session_Namespace('twitterAppAuthentication');

$config = array(
    'callbackUrl'     => $installUrl . '/install/twitter_callback.php',
    'siteUrl'         => 'http://twitter.com/oauth',
    'consumerKey'     => $oauthConfig->oauth->consumerKey,
    'consumerSecret'  => $oauthConfig->oauth->consumerSecret,
);

$consumer = new Zend_Oauth_Consumer($config);

$accessToken = $consumer->getAccessToken($_GET, unserialize($session->requestToken));

$installer->writeOauthToken($accessToken->getParam('oauth_token'), $accessToken->getParam('oauth_token_secret'));

$session->unsetAll();

header('Location: index.php');