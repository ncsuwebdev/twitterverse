<?php header("Content-type: text/css"); ?> 

 /* CSS Document */

body {background: #C00 url(../images/twitterBG.jpg) repeat-x 0 0;line-height: 1.4em;color: #3B3B3B;text-align:center;font-family: Arial, Helvetica, sans-serif;font-size:62.5%; margin:0; padding:0;}
.access {height:0;width:0;overflow:hidden;position:absolute;left:-9000px;}

.clear {clear: both;}
#header {
	height: 291px;
	width: 900px;
	background:url(../images/header.jpg) no-repeat -5px 0;
	position: relative;
	top:0px;
}
#header h1.logo {z-index:95;width:300px;height:65px;position:absolute;top:0;left:0;overflow:hidden;text-indent:-9000px;}
#header h1.logo a {width:300px;height:65px;display:block;}
#intro {
	width: 350px;
	height: 200px;
	color: #5c5541;
	padding: 0px 0 0 10px;
	position: relative;
	top: 110px;
}
#intro h3 {font-size: 3em;font-weight: normal;margin-bottom: 15px; font-weight:bold;}
#intro p {font-size: 1.4em;line-height: 1.8em; padding-right: 5px;}
#intro p a#subscribe {margin-top: 5px; position: relative; float: right;color: #C00;  text-decoration: none; font-weight:bold;padding-right: 10px;
background: transparent url(../images/subscribe_feed_arrow.gif) no-repeat right 8px;}
#intro p a:hover#subscribe {text-decoration: underline; }

#wrapper {
width: 900px;
margin:0 auto;
text-align:left;
font-size:1em;
}

#nav {
margin: 13px 0 0 0;
width: 900px;
height: 65px;
}

#nav ul#tabs {
float: left;
margin: 0 0 0 10px;
padding: 0;
width: 290px;
background: transparent url(../images/tab-sprite.gif) no-repeat 0 0;
height: 65px;
}

#nav ul#tabs li {
<?php if(strpos(strtoupper($_SERVER["HTTP_USER_AGENT"]), "MSIE 6") !== false && strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows") !== false){ ?>
padding:0 3px 0 0;
<?php }else{ ?>
padding:0 15px 0 0;
<?php } ?>
float: left;
list-style-type: none;
width: 130px;
}

#nav ul#tabs li a {
width: 130px;
display: block;
margin-left: 10px;
text-indent: -9000px;
height:65px;
}

.home #nav ul#tabs li a:hover#hash_ncsu {
<?php if(strpos(strtoupper($_SERVER["HTTP_USER_AGENT"]), "MSIE 6") !== false && strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows") !== false){ ?>
background: url(../images/tab-sprite.gif) no-repeat -153px -65px;
width: 132px;
<?php }else{ ?>
background: url(../images/tab-sprite.gif) no-repeat -155px -65px;
<?php } ?>
}

/*** styles for search page ***/
.search #nav ul#tabs li a:hover#twitter_ncsu {background: url(../images/tab-sprite.gif) no-repeat -10px -195px;}
.search #nav ul#tabs li a:hover#hash_ncsu {background: none;}
.search #nav ul#tabs {background: transparent url(../images/tab-sprite.gif) no-repeat 0 -130px;}

/*** styles for level pages ***/
.level #nav ul#tabs li a:hover#twitter_ncsu {background: url(../images/tab-sprite.gif) no-repeat -10px -195px;}
.level #nav ul#tabs li a:hover#hash_ncsu {
<?php if(strpos(strtoupper($_SERVER["HTTP_USER_AGENT"]), "MSIE 6") !== false && strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows") !== false){ ?>
background: url(../images/tab-sprite.gif) no-repeat -153px -65px;
width: 132px;
<?php }else{ ?>
background: url(../images/tab-sprite.gif) no-repeat -155px -65px;
<?php } ?>}
.level #nav ul#tabs {background: transparent url(../images/tab-sprite.gif) no-repeat 0 -260px;}

#nav ul#social_buttons {
float: left;
margin: 0 0 0 50px;
padding: 0;
width: 550px;
position:relative; 
top:5px;
}

#nav ul#social_buttons li {list-style-type: none;float: left;}
#nav ul#social_buttons li a{
	display: block;
	padding: 10px 15px 10px 45px; 
	font-size: 1.2em;
	color:#fff;
	border-right: 1px solid #900;
	margin-right: 10px;
	text-decoration:none;
	
}
#nav ul#social_buttons li a:hover{text-decoration:underline;}

#nav ul#social_buttons li a#rss_updates {background: transparent url(../images/rss_button.jpg) no-repeat 0 0;}
#nav ul#social_buttons li a#follow_twitter {background: transparent url(../images/twitter_button.jpg) no-repeat 0 0;}
#nav ul#social_buttons li a#youtube {background: transparent url(../images/youtube_button.jpg) no-repeat 0 0;border-right:none;margin-right: 0;}

#copy {
padding: 0 0 45px 0;
margin: 0;
font-size: 1.1em;
line-height: 1.8em;
overflow:hidden;
background:#c00;
min-height: 700px;
}

#right_brights {
	background: #e5e1d0;
	margin:0 0 0 30px;
	padding:0;
	position:relative;
	left: 0px;
	width:260px;
	float: left;
}

.brites {padding: 15px 20px 10px 20px;margin: 0;}
.brites h3, .brites h3 a{color: #C00; font-size: 1.2em;padding-bottom: 10px;text-decoration:none}
.brites .read_more {color: #C00;float: right; position: relative;padding: 10px 20px 20px 0;}
.brites .read_more a{color: #C00;text-decoration: none;padding-right: 10px;background: transparent url(../images/read_more_arrows.gif) no-repeat right 5px;}
.brites .read_more a:hover{color: #C00;text-decoration: underline;}
.brites hr.right_divider {clear: both;border: none; border-bottom: 1px solid #CCC;}
.brites hr.last_divider {border: none; }

#footer {clear: both; height: 255px; background:#000;}
#footer_nav {
width: 840px;
margin:0 auto;
text-align:left;
padding: 20px 0;
color:#666;
overflow:hidden;
font-size: 1.1em;
}

#footer ul {margin: 0;padding:0;}
#footer ul li, #footer_nav li span, #footer_nav li a {color: #FFF;display:inline;padding:0 10px 0 0;}
#footer_nav li a:hover{color: #CCC;}
#footer_nav p {padding-top: 25px}

#tweets{padding: 30px;background: #FFF;width: 530px;float:left;margin-left:10px;
<?php if(strpos(strtoupper($_SERVER["HTTP_USER_AGENT"]), "FIREFOX") !== false){ ?>
min-height:650px;<?php }  /* removed min-height:650px --> issues on ie7 and corners */ ?>
}

.tweetHeader {
    font-size: 1.5em;
    color: #666666; 
    margin-bottom: 10px;
}

div.tweet {
    border-top: 1px dashed #CCC;
    padding: 10px 5px;
    line-height: 1.3em;
    font-size: 1.2em;
}

div.friend {
    border-top: 1px solid #DDD;
}

div.row1 {
    background-color: #EFEFEF;
}

div.row2 {
    background-color: #FFF;
}

div.tweet a {
    color: #0097C0; 
    text-decoration: underline;
}

div.tweet a:hover {
    text-decoration: none;
}

div.tweet div.avatar {
    width: 48px;
    height: 48px;
    float: left;
    margin-right: 10px;
}

div.tweet div.origination {
    color: #999999;
    font-size: .9em;
    margin-left: 60px;
}

div.tweet div.origination a {
    color: #999999;
}

div.tweet div.text {
    margin-left: 60px;
}

div.tweet div.text a.username {
    font-weight: bold;
}

div.tweet div.text span.name {
    font-weight: bold;
}

div#tweets p {
    margin-bottom: 20px; 
}

div.twitterBasics {
}

div.twitterBasics ul {
    list-style-type: circle;
    list-style-position: outside;
    margin-bottom: 20px;
}

div.twitterBasics ul li {
    margin-left: 20px;
}

div.twitterBasics h3 {
    margin: 10px 0px;
    font-size: 1.2em;
}

div.brites ul {
    list-style-type: circle;
    list-style-position: outside;
    margin: 10px 0px;
}

div.brites ul li {
    margin-left: 20px;
}

div.brites ul li a {
    color: #CC0000;
}

div.brites ul li a:hover {
    text-decoration: none;
}

a.twitterButton {
    display: block;
    width: 100%;
    text-align: center;
    line-height: 30px;
    border: 1px solid #CCC;
    background-image: url(../images/more.gif);
    background-repeat: repeat-x;
    border-color: #DDDDDDD #AAAAAA #AAAAAA #DDDDDD;
    font-weight: bold;
    color: #999;
    font-size: 1.4em;
    text-decoration: none;
    color: #CC0000;
    -moz-border-radius-bottomleft: 5px;
    -moz-border-radius-bottomright: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;    
}

a.twitterButton:hover {
    background-position:left -78px;
    border:1px solid #BBBBBB;
    text-decoration:none;
}

a {
    color: #CC0000;
}

a:hover {
    text-decoration: none;
}

div#download {
    height: 90px;
    padding: 10px 10px 10px 10px;
    margin: 0px;
    text-align: center;
    font-size: 1.2em;
}

div.archive {
    background-image: url(../images/archive.png);
    background-repeat: no-repeat;
    background-position: center;
    height: 64px;
    margin-bottom: 5px;
}

div#downloadNow {
    padding: 0px;
    margin: 0px 0px 20px 0px;
    background-color: #E5E1D0;
    text-align: left;
    font-size: 110%;
}

div#downloadNow .archive {
    width: 90px;
    float: left;
    margin: 10px 10px 0px 0px;
    text-decoration: none;
    border: 0px;
}

div#downloadNow a {
    text-decoration: none;
}

div#downloadNow h3 {
    font-size: 1.3em;
    border: 0px;
    line-height: 80px;
}