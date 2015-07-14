# syawalan
Web untuk pendaftaran acara syawalan PMR Wira SMA N 1 Kebumen<br>
Dibuat menggunakan framework php Yii2<br>
Untuk merubah username dan password login, silahkan edit models/User.php<br>
Untuk merubah setting database, ganti config/db.php, dan isikan<br>
<br>
<?php<br>
<br>
return [<br>
    'class' => 'yii\db\Connection',<br>
    'dsn' => 'mysql:host=localhost;dbname=syawalan',<br>
    'username' => 'root',<br>
    'password' => '',<br>
    'charset' => 'utf8',<br>
];<br>

