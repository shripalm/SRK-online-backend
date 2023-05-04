<?php
    define('BASE_URL', '/');

    define('FILE_LOCATION', 'uploads/');
    define('MAX_FILE_SIZE', 1 * 1024 * 1024);
    
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_DB', 'SRK-online');

    define('JWT_SECRET', 'Bwtey45aaIII=');
    define('JWT_ALGO', 'HS512');
    
    define('SENDGRID_ID', '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');
    define('SENDGRID_MAIL', 'shripal.nextstep@gmail.com');

    $date = new DateTime();
    $currentTS = $date->getTimestamp();
    define('CURRENT_TS', $currentTS);

?>