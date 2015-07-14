# syawalan
Web untuk pendaftaran acara syawalan PMR Wira SMA N 1 Kebumen
Dibuat menggunakan framework php Yii2
Untuk merubah username dan password login, silahkan edit models/User.php
Untuk merubah setting database, ganti config/db.php, dan isikan 
<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=syawalan',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];

