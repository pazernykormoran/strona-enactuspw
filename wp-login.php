<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="https://www.w3.org/1999/xhtml" class="ie8" lang="pl-PL">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="https://www.w3.org/1999/xhtml" lang="pl-PL">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Dołącz do Enactus PW! &lsaquo; Zaloguj się</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<!--n2css--><link rel='stylesheet' href='./wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.8.2' type='text/css' media='all' />
<meta name='robots' content='noindex,follow' />
	<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login login-action-login wp-core-ui  locale-pl-pl">
		<div id="login">
		<h1><a href="https://pl.wordpress.org/" title="Oparte na WordPressie" tabindex="-1">Dołącz do Enactus PW!</a></h1>
	
<form name="loginform" id="loginform" action="./" method="post">
	<p>
		<label for="user_login">Nazwa użytkownika lub e-mail<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Hasło<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Zapamiętaj mnie</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Zaloguj się" />
		<input type="hidden" name="redirect_to" value="./wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="./?action=lostpassword">Nie pamiętasz hasła?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

/**
 * Filters whether to print the call to `wp_attempt_focus()` on the login screen.
 *
 * @since 4.8.0
 *
 * @param bool $print Whether to print the function call. Default true.
 */
wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="./index.html">&larr; Powrót do Dołącz do Enactus PW!</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	