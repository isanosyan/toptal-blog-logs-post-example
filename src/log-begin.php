<?php

define('START_TIME', microtime(true));
openlog(uniqid(), LOG_ODELAY, LOG_LOCAL0);
syslog(LOG_INFO, 'BEGIN');
syslog(LOG_INFO, "URI\t{$_SERVER['REQUEST_URI']}");
$browserHash = substr(md5($_SERVER['HTTP_USER_AGENT']), 0, 7);
syslog(LOG_INFO, "CLIENT\t{$_SERVER['REMOTE_ADDR']}\t{$browserHash}");
