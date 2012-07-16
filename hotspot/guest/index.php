<?php
setcookie('id', $_GET['id']);
setcookie('url', $_GET['url']);
?> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>Free Wireless Internet</title>
</head>
<body>
	<div id="page" align="center">
		<div id="header">
			<div id="companyname" align="left">Welcome!</div>
		</div>
		<br />
		<div id="content">
			<div id="contenttext">

				<span class="title_blue">Free Wireless Internet</span><br />
				<span class="subtitle_gray">Terms of Use</span><br />
				<p class="body_text" align="justify">
				By accessing the wireless network, you acknowledge that you're of legal age, you have read and understood and agree to be bound by this agreement
				The wireless network service is provided by the property owners and is completely at their discretion. Your access to the network may be blocked, suspended, or terminated at any time for any reason. <br/>
				You agree not to use the wireless network for any purpose that is unlawful and take full responbility of your acts.
				The wireless network is provided &quot;as is&quot; without warranties of any kind, either expressed or implied.
				</p>
			</div>
			<div class="form-controls">
				<input id="accept-tou" type="checkbox" checked="checked" name="accept-tou" value="yes" />
				<span class="input_text" >I accept the <a href="javascript:void(0)" id="show-tou">Term of Use</a></label>
				<input class="input_text" name="connect" type="submit" value="Connect" id="connect" onClick="checkLogin()" />
			</div><br />
			<div class="footer"/>
		</div>
	</div>
<script type="text/javascript">
var checkbox_tou = document.getElementById('accept-tou');

function addevent(el, event, fn) {
	if (el.addEventListener)
		el.addEventListener(event, fn, false);
	else
		el.attachEvent('on'+event, fn);
}

function reflectAcceptTou() {
	console.log(checkbox_tou.checked);
	var button_connect = document.getElementById('connect');
	if (checkbox_tou.checked) {
		button_connect.removeAttribute('disabled');
		button_connect.removeAttribute('class');
	}
	else {
		button_connect.setAttribute('disabled', 'disabled');
		button_connect.setAttribute('class', 'disabled');
	}
}

addevent(checkbox_tou, 'change', reflectAcceptTou);

function checkLogin(){
	location.href = 'authorized.php';
}
</script>
</body>
</html>
