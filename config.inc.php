<?php

// phpmyadmin configuration
// manual configuration
declare(strict_types=1);

// cookie based authentication
// encrypt password in cookie
// need 32 character long

// fill this for cookie auth
$cfg['blowfish_secret'] = '';

// server configuration

// initialize server
$i = 0;

// first server
$i++;

// authentication type 
$cfg['Servers'][$i]['auth_type'] = 'cookie';

// ___server parameters
$cfg['Servers'][$i]['host'] = '127.0.0.1';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

// ___directories for saving/loading
// files from server 
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';


// you can find more config options at
// https://docs.phpmyadmin.net/

?>
