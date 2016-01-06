<?php

require_once __DIR__.'/../config/config.php';

$objAuthenticationManager = new AuthenticationManager(COOKIE_NAME, COOKIE_EXPIRE_TIME);

if ($objAuthenticationManager->doAuthentication($_REQUEST) || trim($_REQUEST['url']) == '') {
    header('Location: '.$_REQUEST['url']);
} else {
    header('Location: '.LOGIN_URL.'?login_attempt=1');
}
exit(0);
