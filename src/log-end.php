<?php

syslog(LOG_INFO, "DISPATCH TIME\t" . round(microtime(true) - START_TIME, 2));
syslog(LOG_INFO, 'END');
