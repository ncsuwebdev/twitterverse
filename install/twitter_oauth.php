<?php 
require_once '../inc/Tweets/Installer.php';

$installer = new Tweets_Installer();

$oauthConfig = Tweets_Ncsu::getConfigFile();
$installUrl = Tweets_Ncsu::getBaseUrl();

$config = array(
    'callbackUrl'     => $installUrl . '/install/twitter_callback.php',
    'siteUrl'         => 'http://twitter.com/oauth',
    'consumerKey'     => $oauthConfig->oauth->consumerKey,
    'consumerSecret'  => $oauthConfig->oauth->consumerSecret,
);

$consumer = new Zend_Oauth_Consumer($config);

$session = new Zend_Session_Namespace('twitterAppAuthentication');

$token = $consumer->getRequestToken();

$session->requestToken = serialize($token);

$consumer->redirect();
